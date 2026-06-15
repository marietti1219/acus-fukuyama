#!/usr/bin/env node
/**
 * scripts/build-columns.mjs
 * microCMS の全記事を静的 HTML として生成する
 *   - column/{id}/index.html  … 個別記事ページ
 *   - column/index.html       … 一覧ページ（静的カード＋クライアントサイドフィルタ）
 * 実行: node scripts/build-columns.mjs  /  npm run build:columns
 */

import { readFileSync, writeFileSync, mkdirSync, existsSync } from 'fs';
import { join, dirname } from 'path';
import { fileURLToPath } from 'url';

const __dirname = dirname(fileURLToPath(import.meta.url));
const ROOT = join(__dirname, '..');

// ── .env 読み込み ──────────────────────────────────────────────────────────
function loadEnv() {
  const envPath = join(ROOT, '.env');
  if (!existsSync(envPath)) {
    throw new Error('.env ファイルが見つかりません。.env.example をコピーして作成してください。');
  }
  for (const line of readFileSync(envPath, 'utf-8').split('\n')) {
    const m = line.match(/^([^#=\s][^=]*)=(.*)$/);
    if (m) process.env[m[1].trim()] = m[2].trim();
  }
}

// ── article.html / index.html からインライン <style> を抽出 ──────────────
function extractStyle(filePath) {
  const html = readFileSync(filePath, 'utf-8');
  const m = html.match(/<style>([\s\S]*?)<\/style>/);
  return m ? `<style>${m[1]}</style>` : '';
}

// ── microCMS 全記事取得（ページネーション対応）──────────────────────────
async function fetchAllArticles(apiKey, domain, endpoint) {
  const base = `https://${domain}.microcms.io/api/v1/${endpoint}`;
  const fields = 'id,title,publishedAt,eyecatch,category,content,description';
  const limit = 100;
  let offset = 0;
  let articles = [];

  while (true) {
    const url = `${base}?limit=${limit}&offset=${offset}&orders=-publishedAt&fields=${encodeURIComponent(fields)}`;
    const res = await fetch(url, { headers: { 'X-MICROCMS-API-KEY': apiKey } });
    if (!res.ok) throw new Error(`microCMS API エラー: ${res.status} ${url}`);
    const data = await res.json();
    articles = articles.concat(data.contents ?? []);
    if (articles.length >= (data.totalCount ?? 0)) break;
    offset += limit;
  }
  return articles;
}

// ── ユーティリティ ──────────────────────────────────────────────────────────
function esc(str) {
  return String(str ?? '').replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}
function fmtDateJp(iso) {
  const d = new Date(iso);
  return `${d.getFullYear()}年${d.getMonth() + 1}月${d.getDate()}日`;
}
function fmtDateDot(iso) {
  const d = new Date(iso);
  return `${d.getFullYear()}.${String(d.getMonth() + 1).padStart(2, '0')}.${String(d.getDate()).padStart(2, '0')}`;
}
// category フィールドは配列で返る場合があるため正規化する
function normCats(category) {
  if (!category) return [];
  return (Array.isArray(category) ? category : [category]).map(c => c.trim()).filter(Boolean);
}

// ── 共通 head ───────────────────────────────────────────────────────────────
function buildHead({ title, description, canonical, ogType, ogImage, styleBlock }) {
  return `  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>${title}</title>
  <meta name="description" content="${esc(description)}">
  <link rel="icon" type="image/png" href="${ogType === 'article' ? '../../' : '../'}img/favicon.png">
  <link rel="apple-touch-icon" href="${ogType === 'article' ? '../../' : '../'}img/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500&family=Zen+Kaku+Gothic+Antique:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="${ogType === 'article' ? '../../' : '../'}css/common.css">
  ${styleBlock}
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-BJNHNDB2DZ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-BJNHNDB2DZ');
  </script>
  <link rel="canonical" href="${canonical}">
  <meta property="og:type" content="${ogType}">
  <meta property="og:site_name" content="鍼灸サロンAcus">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:title" content="${title}">
  <meta property="og:description" content="${esc(description)}">
  <meta property="og:url" content="${canonical}">
  <meta property="og:image" content="${esc(ogImage)}">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="${title}">
  <meta name="twitter:description" content="${esc(description)}">
  <meta name="twitter:image" content="${esc(ogImage)}">
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HealthAndBeautyBusiness",
  "name": "鍼灸サロンAcus",
  "alternateName": "アキューズ",
  "url": "https://acus-web.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "春日池6-23",
    "addressLocality": "福山市",
    "addressRegion": "広島県",
    "postalCode": "721-0917",
    "addressCountry": "JP"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 34.4851,
    "longitude": 133.3625
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Wednesday","Thursday","Friday"],
      "opens": "10:00",
      "closes": "19:30"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Saturday","Sunday","PublicHolidays"],
      "opens": "10:00",
      "closes": "17:00"
    }
  ],
  "priceRange": "¥¥",
  "image": "https://acus-web.com/img/hero.jpg",
  "sameAs": [
    "https://lin.ee/wasvy2y"
  ]
}
  </script>`;
}

// ── 共通フッター・ヘッダー HTML ─────────────────────────────────────────────
function buildHeaderHtml(base, activeLabel) {
  return `<header id="hdr">
  <div class="hdr-in">
    <a href="${base}index.php" class="hdr-logo"><img src="${base}img/logo.png" alt="鍼灸サロンAcus" width="160" height="46"></a>
    <nav class="hdr-nav">
      <a href="${base}index.php">トップ</a>
      <a href="${base}menu.php">メニュー・料金</a>
      <a href="${base}staff.php">スタッフ</a>
      <a href="${base === '../' ? 'index.html' : '../'}"${activeLabel === 'column' ? ' class="active"' : ''}>コラム</a>
      <a href="${base}access.php">アクセス</a>
      <a href="${base}faq.php">よくある質問</a>
    </nav>
    <div class="hdr-cta">
      <a href="https://lin.ee/wasvy2y" class="btn-line-h" target="_blank" rel="noopener">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.12 2 11.2c0 4.02 2.67 7.46 6.45 8.93.47.17.4.46.3.96l-.19 1.07c-.06.33-.3 1.28 1.12.7 1.43-.59 7.68-4.52 10.47-7.75A9.01 9.01 0 0 0 22 11.2C22 6.12 17.52 2 12 2z"/></svg>
        LINE
      </a>
      <a href="https://edisone.jp/salonacus/" class="btn-rsv-h" target="_blank" rel="noopener">予約する</a>
    </div>
    <button class="hdr-toggle" id="hdr-toggle" aria-label="メニューを開く" aria-expanded="false" aria-controls="drawer"><span></span><span></span><span></span></button>
  </div>
</header>
<div id="drawer">
  <nav class="drw-nav">
    <a href="${base}index.php" onclick="closeDrawer()">トップ</a>
    <a href="${base}menu.php" onclick="closeDrawer()">メニュー・料金</a>
    <a href="${base}staff.php" onclick="closeDrawer()">スタッフ</a>
    <a href="${base === '../' ? 'index.html' : '../'}" onclick="closeDrawer()">コラム</a>
    <a href="${base}access.php" onclick="closeDrawer()">アクセス</a>
    <a href="${base}faq.php" onclick="closeDrawer()">よくある質問</a>
  </nav>
  <div class="drw-cta">
    <a href="https://edisone.jp/salonacus/" class="drw-rsv" target="_blank" rel="noopener">オンライン予約</a>
    <a href="https://lin.ee/wasvy2y" class="drw-line" target="_blank" rel="noopener">LINE お問い合わせ</a>
  </div>
</div>`;
}

function buildFooterHtml(base, colLink) {
  return `<footer>
  <div class="wrap">
    <div class="ftr-in">
      <div>
        <a href="${base}index.php" class="ftr-logo"><img src="${base}img/logo.png" alt="鍼灸サロンAcus" width="160" height="52"></a>
        <p class="ftr-addr">美容と眠りの鍼灸サロン<br>〒721-0917<br>広島県福山市春日池6-23</p>
      </div>
      <div class="ftr-cols">
        <div class="ftr-col">
          <h4>Site</h4>
          <ul>
            <li><a href="${base}index.php">トップ</a></li>
            <li><a href="${base}menu.php">メニュー・料金</a></li>
            <li><a href="${base}staff.php">スタッフ</a></li>
            <li><a href="${colLink}">コラム</a></li>
            <li><a href="${base}access.php">アクセス</a></li>
            <li><a href="${base}faq.php">よくある質問</a></li>
          </ul>
        </div>
        <div class="ftr-col">
          <h4>Reserve</h4>
          <ul>
            <li><a href="https://edisone.jp/salonacus/" target="_blank" rel="noopener">オンライン予約</a></li>
            <li><a href="https://lin.ee/wasvy2y" target="_blank" rel="noopener">LINE 公式</a></li>
          </ul>
        </div>
        <div class="ftr-col">
          <h4>SNS</h4>
          <ul>
            <li><a href="https://www.instagram.com/mari_acus/" target="_blank" rel="noopener">Instagram（鈴木）</a></li>
            <li><a href="https://www.instagram.com/kanae.harikyu/" target="_blank" rel="noopener">Instagram（佐藤）</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="ftr-btm">
      <span>&copy; 2013 鍼灸サロンAcus. All rights reserved.</span>
      <span>Fukuyama, Hiroshima</span>
    </div>
  </div>
</footer>`;
}

const commonJs = `
  const toggle = document.getElementById('hdr-toggle');
  const drawer = document.getElementById('drawer');
  function closeDrawer() {
    drawer.classList.remove('open');
    toggle.setAttribute('aria-expanded', 'false');
  }
  toggle.addEventListener('click', () => {
    const open = drawer.classList.toggle('open');
    toggle.setAttribute('aria-expanded', open);
  });
  const hdr = document.getElementById('hdr');
  const bt = document.getElementById('back-top');
  window.addEventListener('scroll', () => {
    hdr.classList.toggle('scrolled', window.scrollY > 40);
    bt.classList.toggle('vis', window.scrollY > 300);
  }, { passive: true });
  bt.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  const obs = new IntersectionObserver(es => es.forEach(e => {
    if (e.isIntersecting) { e.target.classList.add('vis'); obs.unobserve(e.target); }
  }), { threshold: .12 });
  document.querySelectorAll('.r').forEach(el => obs.observe(el));`;

// ── 記事個別ページ生成 ──────────────────────────────────────────────────────
function generateArticleHtml(article, styleBlock) {
  const { id, title, publishedAt, eyecatch, category, content: bodyHtml = '', description } = article;
  const canonical = `https://acus-web.com/column/${id}/`;
  const ogImage = eyecatch?.url ?? 'https://acus-web.com/img/hero.jpg';
  const plainBody = bodyHtml.replace(/<[^>]+>/g, '').replace(/\s+/g, ' ').trim();
  const metaDesc = description || (plainBody.slice(0, 120) + '｜鍼灸サロンAcus');
  const crumb = title.length > 30 ? title.slice(0, 30) + '…' : title;
  const cats  = normCats(category);
  const tag   = cats.map(c => `<span class="col-tag">${esc(c)}</span>`).join('');
  const date  = publishedAt ? `<span class="art-date">${fmtDateJp(publishedAt)}</span>` : '';
  const thumb = eyecatch ? `<img class="art-thumb" src="${esc(eyecatch.url)}" alt="${esc(title)}">` : '';

  return `<!DOCTYPE html>
<html lang="ja">
<head>
${buildHead({ title: `${esc(title)}｜鍼灸サロンAcus｜福山市`, description: metaDesc, canonical, ogType: 'article', ogImage, styleBlock })}
</head>
<body>

${buildHeaderHtml('../../', 'column')}

<div class="page-hero" style="padding-bottom:40px;">
  <div class="wrap">
    <nav class="breadcrumb" aria-label="パンくずリスト">
      <a href="../../index.php">トップ</a>
      <span class="sep">›</span>
      <a href="../">コラム</a>
      <span class="sep">›</span>
      <span class="cur">${esc(crumb)}</span>
    </nav>
  </div>
</div>

<section class="sec" style="padding-top:56px;">
  <div class="wrap">
    <div class="art-wrap">
      <div class="art-meta">${tag}${date}</div>
      <h1 class="art-title">${esc(title)}</h1>
      ${thumb}
      <div class="art-body">${bodyHtml}</div>
    </div>
  </div>
</section>

<div class="art-cta">
  <div class="wrap">
    <div class="art-cta-inner">
      <p class="art-cta-label">Reservation</p>
      <p class="art-cta-h">ご予約・ご相談はこちら</p>
      <p class="art-cta-sub">完全個室・完全予約制｜広島県福山市</p>
      <div class="art-cta-btns">
        <a href="https://edisone.jp/salonacus/" class="btn-fill" target="_blank" rel="noopener">オンライン予約</a>
        <a href="https://lin.ee/wasvy2y" class="btn-line-g" target="_blank" rel="noopener">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.12 2 11.2c0 4.02 2.67 7.46 6.45 8.93.47.17.4.46.3.96l-.19 1.07c-.06.33-.3 1.28 1.12.7 1.43-.59 7.68-4.52 10.47-7.75A9.01 9.01 0 0 0 22 11.2C22 6.12 17.52 2 12 2z"/></svg>
          LINE 予約・相談
        </a>
      </div>
    </div>
  </div>
</div>
<div class="art-back">
  <a href="../">コラム一覧へ戻る</a>
</div>

${buildFooterHtml('../../', '../')}

<button class="back-top" id="back-top" aria-label="トップへ戻る">
  <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
</button>

<script>${commonJs}
</script>
</body>
</html>`;
}

// ── コラム一覧ページ生成 ────────────────────────────────────────────────────
function generateIndexHtml(articles, styleBlock) {
  // 全記事から個別カテゴリを重複排除して収集
  const categories = [...new Set(articles.flatMap(a => normCats(a.category)))];

  const filterBtns = [
    '<button class="col-filter-btn active" data-cat="">すべて</button>',
    ...categories.map(c => `<button class="col-filter-btn" data-cat="${esc(c)}">${esc(c)}</button>`)
  ].join('\n      ');

  const cards = articles.map(a => {
    const cats = normCats(a.category);
    const thumb = a.eyecatch
      ? `<img class="col-card-thumb" src="${esc(a.eyecatch.url)}?w=600" alt="${esc(a.title)}" loading="lazy">`
      : `<div class="col-card-thumb-ph"><span>Column</span></div>`;
    const tag  = cats.map(c => `<span class="col-tag">${esc(c)}</span>`).join('');
    const date = a.publishedAt ? `<span class="col-date">${fmtDateDot(a.publishedAt)}</span>` : '';
    return `<a class="col-card" href="${esc(a.id)}/" data-cat="${esc(cats.join(','))}">
  ${thumb}
  <div class="col-card-meta">${tag}${date}</div>
  <p class="col-title">${esc(a.title)}</p>
</a>`;
  }).join('\n');

  const desc = '鍼灸サロンAcusのコラム。首こり・頭痛、美容鍼、鍼灸についての情報など、お役立ち情報をお届けします。広島県福山市の鍼灸サロン。';

  return `<!DOCTYPE html>
<html lang="ja">
<head>
${buildHead({
    title: 'コラム｜鍼灸サロンAcus｜広島県福山市',
    description: desc,
    canonical: 'https://acus-web.com/column/',
    ogType: 'website',
    ogImage: 'https://acus-web.com/img/hero.jpg',
    styleBlock
  })}
</head>
<body>

${buildHeaderHtml('../', 'column')}

<div class="page-hero">
  <div class="wrap">
    <p style="font-size:10px;letter-spacing:.3em;color:rgba(240,235,224,.38);margin-bottom:12px;">COLUMN</p>
    <h1>コラム</h1>
    <p>鍼灸と健康についての情報をお届けします</p>
  </div>
</div>

<section class="sec">
  <div class="wrap">
    <div class="col-filter" id="js-filter" role="group" aria-label="カテゴリ絞り込み">
      ${filterBtns}
    </div>
    <div class="col-grid" id="js-grid">
      ${cards}
    </div>
  </div>
</section>

${buildFooterHtml('../', 'index.html')}

<button class="back-top" id="back-top" aria-label="トップへ戻る">
  <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
</button>

<script>
  document.getElementById('js-filter').addEventListener('click', e => {
    const btn = e.target.closest('.col-filter-btn');
    if (!btn) return;
    document.querySelectorAll('.col-filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const cat = btn.dataset.cat;
    document.querySelectorAll('#js-grid .col-card').forEach(card => {
      const cardCats = card.dataset.cat ? card.dataset.cat.split(',') : [];
      card.style.display = (cat === '' || cardCats.includes(cat)) ? '' : 'none';
    });
  });
${commonJs}
</script>
</body>
</html>`;
}

// ── メイン ───────────────────────────────────────────────────────────────────
async function main() {
  loadEnv();

  const apiKey   = process.env.MICROCMS_API_KEY;
  const domain   = process.env.MICROCMS_SERVICE_DOMAIN;
  const endpoint = process.env.MICROCMS_COLUMN_ENDPOINT;
  if (!apiKey || !domain || !endpoint) {
    throw new Error('.env に MICROCMS_API_KEY、MICROCMS_SERVICE_DOMAIN、MICROCMS_COLUMN_ENDPOINT を設定してください。');
  }

  const articleStyleBlock = extractStyle(join(ROOT, 'column', 'article.html'));
  const indexStyleBlock   = extractStyle(join(ROOT, 'column', 'index.html'));

  console.log('microCMS から記事を取得中...');
  const articles = await fetchAllArticles(apiKey, domain, endpoint);
  console.log(`${articles.length} 件の記事を取得しました。`);

  // 個別記事ページ生成
  let generated = 0;
  for (const article of articles) {
    const dir = join(ROOT, 'column', article.id);
    mkdirSync(dir, { recursive: true });
    writeFileSync(join(dir, 'index.html'), generateArticleHtml(article, articleStyleBlock), 'utf-8');
    console.log(`  ✓ column/${article.id}/index.html`);
    generated++;
  }

  // 一覧ページ再生成
  writeFileSync(join(ROOT, 'column', 'index.html'), generateIndexHtml(articles, indexStyleBlock), 'utf-8');
  const allCats = [...new Set(articles.flatMap(a => normCats(a.category)))];
  console.log(`  ✓ column/index.html（カテゴリ: ${allCats.join('、')}）`);

  console.log(`\n完了: 記事 ${generated} ページ＋一覧ページを生成しました。`);
}

main().catch(e => { console.error(e.message); process.exit(1); });
