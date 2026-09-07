<!DOCTYPE html>
<html lang="ja"><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>鍼灸サロンAcus｜福山市の眼精疲労・スマホ疲れ・頭痛専門の鍼灸院</title>
  <meta name="description" content="スマホ・PC・タブレット・車の運転による眼精疲労・頭痛・首こりに特化した福山市の鍼灸院。完全個室・完全予約制。2013年開院、地域密着の伴走型鍼灸サロンAcus。">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <link rel="apple-touch-icon" href="img/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500&family=Noto+Serif+JP:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/common.css">
  <style>
    /* ===== Reset ===== */
    *, *::before, *::after { box-sizing:border-box; margin:0; padding:0; }
    :root {
      --bg:       #FDFCFA;
      --surface:  #ffffff;
      --text:     #2c2c2c;
      --muted:    #444444;
      --accent:   #8b7355;
      --accent-l: #c4a882;
      --border:   #e8e3dc;
      --dark:     #1e1c1a;
      --dark2:    #2c2a28;
      --cta:      #3a3a3a;
      --line:     #06b25d;
      --serif:    'Noto Serif JP', serif;
      --sans:     'Noto Sans JP', sans-serif;
      --max:      900px;
      /* 旧・黒背景セクション用（ベージュ/グリーン配色） */
      --sand:     #F5F0E8;
      --forest:   #2D5016;
    }
    html { scroll-behavior:smooth; }
    body {
      background:var(--bg);
      font-family:'Noto Sans JP', sans-serif; font-weight:300;
      font-size:18px; line-height:1.5;
      -webkit-font-smoothing:antialiased;
    }
    img { max-width:100%; display:block; }
    a { color:inherit; text-decoration:none; }

    /* ===== Layout ===== */
    .wrap { max-width:var(--max); margin:0 auto; padding:0 24px; }
    .section { padding:100px 0; border-top:1px solid var(--border); }
    .section:first-of-type { border-top:none; }
    .eyebrow {
      font-size:11px; letter-spacing:.22em; text-transform:uppercase;
      color:var(--accent); font-family:var(--sans); font-weight:400;
      display:block; margin-bottom:14px;
    }
    .sec-title {
      font-family:var(--serif); font-weight:400;
      font-size:clamp(1.35rem,4vw,1.85rem);
      line-height:1.6; color:var(--text);
    }
    .sec-sub {
      margin-top:12px; font-size:13.5px;
      color:var(--text); line-height:1.9;
    }

    /* ===== Header ===== */
    header {
      position:sticky; top:0; z-index:100;
      background:rgba(250,249,247,.96); backdrop-filter:blur(8px);
      border-bottom:1px solid var(--border);
    }
    .header-inner {
      max-width:var(--max); margin:0 auto; padding:0 24px;
      height:58px; display:flex; align-items:center; justify-content:space-between;
    }
    .header-logo img { height:30px; }
    .header-nav { display:flex; align-items:center; gap:28px; }
    .nav-links { display:flex; gap:24px; }
    .nav-links a { font-size:12px; letter-spacing:.04em; color:var(--muted); }
    .nav-links a:hover { color:var(--text); }
    .header-btns { display:flex; gap:8px; }
    .btn-sm {
      font-size:11px; padding:7px 14px; border-radius:40px;
      font-family:var(--sans); cursor:pointer;
    }
    .btn-sm.rsv { background:var(--cta); color:#fff; }
    .btn-sm.line { border:1px solid var(--border); color:var(--muted); }
    @media(max-width:660px){ .nav-links{display:none;} }

    /* ===== Hero ===== */
    .hero { position:relative; overflow:hidden; }
    .hero-img {
      width:100%; height:clamp(440px,70vh,680px);
      object-fit:cover; object-position:center 30%; display:block;
    }
    .hero-overlay {
      position:absolute; inset:0;
      background:linear-gradient(to bottom,rgba(20,18,15,.05) 0%,rgba(20,18,15,.55) 55%,rgba(20,18,15,.78) 100%);
    }
    .hero-body {
      position:absolute; bottom:0; left:0; right:0;
      padding:0 24px 48px; color:#fff;
      max-width:var(--max); margin:0 auto;
    }
    /* full-width centering */
    .hero-body-outer {
      position:absolute; bottom:0; left:0; right:0; padding-bottom:48px;
    }
    .hero-eyebrow {
      font-size:11px; letter-spacing:.2em; color:rgba(255,255,255,.65);
      margin-bottom:10px;
    }
    .hero-h1 {
      font-family:var(--serif); font-weight:400;
      font-size:clamp(1.5rem,5vw,2.3rem);
      line-height:1.5; margin-bottom:8px;
    }
    .hero-h1 em {
      font-style:normal; font-weight:300;
      font-size:clamp(1rem,3vw,1.35rem);
      display:block; margin-bottom:4px; color:rgba(255,255,255,.8);
    }
    .hero-tagline {
      font-size:13px; color:rgba(255,255,255,.75);
      line-height:1.8; margin-bottom:18px; max-width:520px;
    }
    .hero-labels { display:flex; flex-wrap:wrap; gap:7px; margin-bottom:22px; }
    .hero-label {
      font-size:10.5px; letter-spacing:.05em;
      border:1px solid rgba(255,255,255,.35);
      padding:3px 10px; border-radius:30px; color:rgba(255,255,255,.8);
    }
    .hero-cta { display:flex; flex-wrap:wrap; gap:10px; align-items:center; }
    .btn-hero-rsv {
      background:#fff; color:var(--text);
      font-size:13px; font-weight:500; letter-spacing:.07em;
      padding:13px 28px; border-radius:40px; font-family:var(--sans);
    }
    .btn-hero-line {
      background:var(--line); color:#fff;
      font-size:13px; font-weight:400; letter-spacing:.06em;
      padding:12px 24px; border-radius:40px; font-family:var(--sans);
    }
    .hero-note {
      margin-top:10px; font-size:11px; color:rgba(255,255,255,.5);
    }

    /* ===== Insight strip ===== */
    .insight {
      background:var(--sand); color:var(--forest);
      padding:76px 24px;
    }
    .insight-inner {
      max-width:var(--max); margin:0 auto;
      display:grid; grid-template-columns:1fr 1fr; gap:48px; align-items:center;
    }
    .insight-eyebrow {
      font-size:10px; letter-spacing:.22em; text-transform:uppercase;
      color:rgba(45,80,22,.45); margin-bottom:16px;
    }
    .insight-title {
      font-family:var(--serif); font-weight:400;
      font-size:clamp(1.2rem,3.5vw,1.6rem);
      line-height:1.65; color:var(--forest); margin-bottom:20px;
    }
    .insight-body { font-size:22px; font-weight:500; color:rgba(45,80,22,.65); line-height:1.8; }
    .insight-stat {
      border-left:1px solid rgba(45,80,22,.18); padding-left:40px;
      display:flex; flex-direction:column; gap:24px;
    }
    .stat-item { display:flex; flex-direction:column; gap:4px; }
    .stat-num {
      font-family:var(--serif); font-size:clamp(2rem,5vw,2.8rem);
      font-weight:300; color:var(--accent); line-height:1;
    }
    .stat-label { font-size:12px; color:rgba(45,80,22,.55); letter-spacing:.06em; }
    @media(max-width:640px){
      .insight-inner{ grid-template-columns:1fr; gap:32px; }
      .insight-stat{ border-left:none; padding-left:0; border-top:1px solid rgba(45,80,22,.18); padding-top:24px; flex-direction:row; flex-wrap:wrap; gap:16px; }
    }

    /* ===== Programs ===== */
    .programs-grid {
      display:grid; grid-template-columns:repeat(3,1fr);
      gap:12px; margin-top:32px;
    }
    .program-card {
      background:var(--surface); border:1px solid var(--border);
      border-radius:8px; overflow:hidden;
    }
    .program-card-head {
      padding:20px 20px 16px;
    }
    .program-tag {
      font-size:10px; letter-spacing:.1em; font-weight:500;
      padding:3px 10px; border-radius:20px; display:inline-block;
      margin-bottom:12px;
    }
    .tag-beauty  { background:#f5eee6; color:var(--accent); }
    .tag-perform { background:#e8f0ef; color:#4a7c72; }
    .tag-recover { background:#ede9f5; color:#6b5c8a; }
    .program-name {
      font-family:var(--serif); font-size:15px; font-weight:400;
      line-height:1.55; margin-bottom:10px; color:var(--text);
    }
    .program-desc { font-size:12.5px; color:var(--text); line-height:1.85; }
    @media(max-width:620px){ .programs-grid{ grid-template-columns:1fr; } }

    /* ===== Values ===== */
    .values-list {
      display:flex; flex-direction:column; gap:48px; margin-top:32px;
    }
    .value-item {
      display:grid; grid-template-columns:360px 1fr; gap:0;
      align-items:flex-start;
    }
    .value-img {
      width:100%; height:300px; object-fit:cover; object-position:center;
    }
    .value-body { padding:8px 28px 24px; }
    .value-title-row { display:flex; align-items:center; gap:12px; margin-bottom:10px; }
    .value-num {
      font-family:var(--serif); font-size:14px; color:var(--sub);
      letter-spacing:.1em; flex-shrink:0;
    }
    .value-body strong { font-size:22px; font-weight:500; }
    .value-body p { font-size:18px; color:var(--text); line-height:1.88; }
    @media(max-width:620px){
      .value-item{ grid-template-columns:1fr; }
      .value-img{ height:180px; }
      .value-body{ padding:20px 0; }
    }

    /* ===== Philosophy ===== */
    .philosophy-card {
      background:var(--surface); border:1px solid var(--border);
      border-radius:8px; padding:36px 36px; margin-top:28px;
    }
    .philosophy-card h3 {
      font-family:var(--serif); font-weight:400;
      font-size:clamp(1.05rem,3vw,1.25rem); margin-bottom:6px; color:var(--accent);
    }
    .philosophy-card .sub {
      font-size:12px; color:var(--text); margin-bottom:20px;
      padding-bottom:16px; border-bottom:1px solid var(--border);
    }
    .philosophy-card p { font-size:18px; color:var(--text); line-height:1.95; }
    @media(max-width:580px){ .philosophy-card{ padding:24px 20px; } }

    /* ===== Team ===== */
    .team-grid {
      display:grid; grid-template-columns:200px 1fr; gap:40px;
      margin-top:32px; align-items:start;
    }
    .team-photo {
      width:200px; height:260px; object-fit:cover;
      object-position:center top; border-radius:6px;
    }
    .team-body .team-name {
      font-family:var(--serif); font-size:1.35rem; font-weight:400;
      margin-bottom:4px;
    }
    .team-body .team-role {
      font-size:11.5px; color:var(--muted); letter-spacing:.04em;
      padding-bottom:14px; margin-bottom:16px;
      border-bottom:1px solid var(--border);
    }
    .team-body .team-msg {
      font-size:14px; color:var(--text); line-height:1.9;
      margin-bottom:12px; font-family:var(--serif); font-weight:400;
    }
    .team-body .team-bio {
      font-size:13px; color:var(--text); line-height:1.88;
    }
    .team-body .team-ig {
      display:inline-block; margin-top:14px; font-size:12px;
      color:var(--accent); border-bottom:1px solid var(--accent-l); padding-bottom:2px;
    }
    .team-second {
      margin-top:40px; padding-top:32px; border-top:1px solid var(--border);
      display:grid; grid-template-columns:160px 1fr; gap:32px; align-items:start;
    }
    .team-second img {
      width:160px; height:200px; object-fit:cover;
      object-position:center top; border-radius:6px;
    }
    @media(max-width:600px){
      .team-grid{ grid-template-columns:1fr; }
      .team-photo{ width:100%; height:220px; }
      .team-second{ grid-template-columns:1fr; }
      .team-second img{ width:100%; height:180px; }
    }

    /* ===== Access ===== */
    .access-grid {
      display:grid; grid-template-columns:1fr 1fr; gap:32px; margin-top:32px;
    }
    .access-info { display:flex; flex-direction:column; gap:0; }
    .access-row {
      display:flex; gap:0; padding:14px 0;
      border-bottom:1px solid var(--border); font-size:13px;
    }
    .access-row:first-child{ border-top:1px solid var(--border); }
    .access-label {
      min-width:90px; color:var(--muted); font-size:12px;
      letter-spacing:.04em; padding-top:1px; flex-shrink:0;
    }
    .access-val { color:var(--text); line-height:1.75; }
    .access-map {
      border-radius:8px; overflow:hidden;
      border:1px solid var(--border); height:100%; min-height:220px;
    }
    .access-map iframe { width:100%; height:100%; min-height:220px; border:0; }
    @media(max-width:600px){
      .access-grid{ grid-template-columns:1fr; }
      .access-map{ height:220px; }
    }

    /* ===== CTA banner ===== */
    .cta-band {
      background:#f5f1eb; padding:80px 24px; text-align:center;
    }
    .cta-band h2 {
      font-family:var(--serif); font-weight:400;
      font-size:clamp(1.15rem,3.5vw,1.5rem); margin-bottom:10px;
    }
    .cta-band p { font-size:18px; color:var(--text); margin-bottom:26px; line-height:1.85; }
    .cta-btns { display:flex; justify-content:center; gap:12px; flex-wrap:wrap; }
    .btn-dark {
      background:var(--cta); color:#fff;
      font-size:13px; font-weight:500; letter-spacing:.08em;
      padding:14px 30px; border-radius:40px; font-family:var(--sans);
    }
    .btn-line {
      background:var(--line); color:#fff;
      font-size:13px; font-weight:400; letter-spacing:.06em;
      padding:13px 26px; border-radius:40px; font-family:var(--sans);
    }

    /* ===== Social Proof ===== */
    .voices-list { display:flex; flex-direction:column; gap:14px; margin-top:28px; }
    .voice-card {
      background:var(--surface); border:1px solid var(--border);
      border-radius:8px; padding:22px 22px 18px;
    }
    .voice-header {
      display:flex; justify-content:space-between; align-items:center;
      margin-bottom:12px;
    }
    .voice-tag {
      font-size:11px; letter-spacing:.05em; color:var(--accent);
      border:1px solid var(--accent-l); padding:3px 10px; border-radius:20px;
    }
    .voice-meta { font-size:11px; color:var(--muted); text-align:right; }
    .voice-stars { color:#c4a860; font-size:12px; margin-bottom:2px; }
    .voice-text { font-size:13.5px; color:var(--text); line-height:1.85; }

    /* ===== Footer ===== */
    footer {
      background:var(--sand); color:rgba(45,80,22,.68);
      padding:72px 24px 52px;
    }
    .footer-inner {
      max-width:var(--max); margin:0 auto;
      display:grid; grid-template-columns:1fr 1fr 1fr; gap:32px;
    }
    .footer-logo img { height:26px; filter:brightness(0); margin-bottom:12px; }
    .footer-logo p { font-size:11.5px; line-height:1.8; }
    .footer-col h4 {
      font-size:10px; letter-spacing:.18em; text-transform:uppercase;
      color:rgba(45,80,22,.4); margin-bottom:12px;
    }
    .footer-col ul { list-style:none; display:flex; flex-direction:column; gap:7px; }
    .footer-col ul li a { font-size:12px; color:rgba(45,80,22,.65); }
    .footer-col ul li a:hover { color:var(--forest); }
    .footer-bottom {
      max-width:var(--max); margin:28px auto 0;
      padding-top:18px; border-top:1px solid rgba(45,80,22,.14);
      font-size:11px; color:rgba(45,80,22,.35);
      display:flex; justify-content:space-between; flex-wrap:wrap; gap:6px;
    }
    @media(max-width:580px){
      .footer-inner{ grid-template-columns:1fr 1fr; }
      .footer-logo{ grid-column:span 2; }
    }

    /* ===== Sticky mobile CTA ===== */
    .sticky-cta {
      display:none; position:fixed; bottom:0; left:0; right:0; z-index:200;
      background:rgba(250,249,247,.97); border-top:1px solid var(--border);
      padding:10px 16px 14px; gap:8px;
    }
    @media(max-width:640px){ .sticky-cta{ display:flex; } }
    .sticky-cta a {
      flex:1; text-align:center; font-size:13px; font-weight:500;
      padding:13px 0; border-radius:8px;
    }
    .sticky-rsv{ background:var(--cta); color:#fff; }
    .sticky-line{ background:var(--line); color:#fff; }
  </style>
<style>
  /* ベースリセット：スタッフエリアのボタン共通 */
  a[href*="instagram.com/mari_acus"],
  a[href="https://acus-web.com/mariko/suzuki_mariko_with_images.html"],
  a[href*="reserva.be"] {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 280px !important;
    padding: 0 24px !important;
    border-radius: 4px !important;
    font-family: "Noto Sans JP", sans-serif !important;
    font-weight: 400 !important;
    letter-spacing: 0.04em !important;
    text-decoration: none !important;
    transition: opacity 0.2s ease, transform 0.15s ease !important;
    box-sizing: border-box !important;
    cursor: pointer !important;
  }
  a[href*="instagram.com/mari_acus"]:hover,
  a[href="https://acus-web.com/mariko/suzuki_mariko_with_images.html"]:hover,
  a[href*="reserva.be"]:hover {
    opacity: 0.82 !important;
    transform: translateY(-1px) !important;
  }

  /* Instagram ボタン：グラデーション */
  a[href*="instagram.com/mari_acus"] {
    height: 48px !important;
    background: linear-gradient(135deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%) !important;
    color: #fff !important;
    font-size: 13px !important;
    gap: 8px !important;
  }

  /* オフィシャルサイトボタン：ダークエレガント */
  a[href="https://acus-web.com/mariko/suzuki_mariko_with_images.html"] {
    height: 48px !important;
    background: #2e2a26 !important;
    color: #f5f0eb !important;
    font-size: 13px !important;
    border: 1px solid rgba(255,255,255,0.08) !important;
  }

  /* 同業者専用ボタン：落ち着いたグレージュ + ボーダー */
  a[href*="reserva.be"] {
    height: 60px !important;
    flex-direction: column !important;
    gap: 3px !important;
    background: #3a3530 !important;
    color: #f5f0eb !important;
    border: 1px solid rgba(200,180,150,0.25) !important;
  }

  .rbtn-main {
    display: block !important;
    font-size: 12.5px !important;
    font-weight: 500 !important;
    letter-spacing: 0.05em !important;
    color: #f5f0eb !important;
    line-height: 1 !important;
  }
  .rbtn-sub {
    display: block !important;
    font-size: 10px !important;
    color: rgba(245,240,235,0.55) !important;
    letter-spacing: 0.06em !important;
    line-height: 1 !important;
    font-weight: 300 !important;
  }
</style><style data-acus-btns="1">
  /* ===== スタッフボタン 共通ベース ===== */
  a[href*="instagram.com/mari_acus"],
  a[href="https://acus-web.com/mariko/suzuki_mariko_with_images.html"],
  a[href*="reserva.be"] {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 300px !important;
    box-sizing: border-box !important;
    border-radius: 6px !important;
    font-family: "Noto Sans JP", sans-serif !important;
    letter-spacing: 0.06em !important;
    text-decoration: none !important;
    transition: opacity 0.25s ease, transform 0.2s ease, box-shadow 0.2s ease !important;
    position: relative !important;
    overflow: hidden !important;
  }
  a[href*="instagram.com/mari_acus"]:hover,
  a[href="https://acus-web.com/mariko/suzuki_mariko_with_images.html"]:hover,
  a[href*="reserva.be"]:hover {
    opacity: 0.88 !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 20px rgba(0,0,0,0.18) !important;
  }
  a[href*="instagram.com/mari_acus"]:active,
  a[href="https://acus-web.com/mariko/suzuki_mariko_with_images.html"]:active,
  a[href*="reserva.be"]:active {
    transform: translateY(0px) !important;
    opacity: 0.75 !important;
  }

  /* ===== Instagram ボタン ===== */
  a[href*="instagram.com/mari_acus"] {
    height: 50px !important;
    padding: 0 24px !important;
    background: linear-gradient(100deg, #f09433 0%, #e6683c 22%, #dc2743 48%, #cc2366 76%, #bc1888 100%) !important;
    color: #fff !important;
    font-size: 13px !important;
    font-weight: 400 !important;
    gap: 10px !important;
    box-shadow: 0 2px 12px rgba(220,39,67,0.28) !important;
  }

  /* ===== オフィシャルサイトボタン ===== */
  a[href="https://acus-web.com/mariko/suzuki_mariko_with_images.html"] {
    height: 50px !important;
    padding: 0 24px !important;
    background: #2e2a26 !important;
    color: #f0ebe4 !important;
    font-size: 13px !important;
    font-weight: 300 !important;
    border: 1px solid rgba(255,255,255,0.1) !important;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2) !important;
    gap: 8px !important;
  }

  /* ===== 同業者専用ボタン ===== */
  a[href*="reserva.be"] {
    height: 64px !important;
    padding: 10px 24px !important;
    flex-direction: column !important;
    gap: 5px !important;
    background: #3d3028 !important;
    border: 1px solid rgba(210,185,145,0.3) !important;
    box-shadow: 0 2px 12px rgba(0,0,0,0.22), inset 0 1px 0 rgba(255,255,255,0.06) !important;
  }

  /* 同業者専用ボタン：アクセントライン（上部） */
  a[href*="reserva.be"]::before {
    content: '' !important;
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    height: 2px !important;
    background: linear-gradient(90deg, #c8a96e, #e8d0a0, #c8a96e) !important;
    border-radius: 6px 6px 0 0 !important;
  }

  .rbtn-main {
    display: block !important;
    font-size: 12.5px !important;
    font-weight: 500 !important;
    letter-spacing: 0.06em !important;
    color: #f0ebe4 !important;
    line-height: 1 !important;
  }
  .rbtn-sub {
    display: block !important;
    font-size: 10px !important;
    color: rgba(210,185,145,0.75) !important;
    letter-spacing: 0.08em !important;
    line-height: 1 !important;
    font-weight: 300 !important;
  }
</style><!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BJNHNDB2DZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-BJNHNDB2DZ');
</script>
<link rel="canonical" href="https://acus-fukuyama.com/">
<meta property="og:type" content="website">
<meta property="og:site_name" content="鍼灸サロンAcus">
<meta property="og:locale" content="ja_JP">
<meta property="og:title" content="鍼灸サロンAcus｜広島県福山市・美容鍼・パーソナル鍼灸">
<meta property="og:description" content="広島県福山市で18年、36,000症例。解剖生理学に基づき、停滞した身体機能を「再起動」する大人のためのパーソナル鍼灸サロン。完全個室・担当者制・予約制。">
<meta property="og:url" content="https://acus-fukuyama.com/">
<meta property="og:image" content="https://acus-fukuyama.com/img/hero.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="鍼灸サロンAcus｜広島県福山市・美容鍼・パーソナル鍼灸">
<meta name="twitter:description" content="広島県福山市で18年、36,000症例。解剖生理学に基づき、停滞した身体機能を「再起動」する大人のためのパーソナル鍼灸サロン。完全個室・担当者制・予約制。">
<meta name="twitter:image" content="https://acus-web.com/img/hero.jpg">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HealthAndBeautyBusiness",
  "name": "鍼灸サロンAcus",
  "alternateName": "アキューズ",
  "url": "https://acus-fukuyama.com",
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
  "image": "https://acus-fukuyama.com/img/hero.jpg",
  "sameAs": [
    "https://lin.ee/wasvy2y"
  ]
}
</script>
</head>
<body>

<!-- HEADER -->
<?php $page_active = 'top'; include 'includes/header.php'; ?>

<!-- 1. HERO -->
<section class="hero">
  <img class="hero-img" src="img/hero-treatment.jpg" alt="鍼灸サロンAcus 眼精疲労・頭痛 施術イメージ">
  <div class="hero-overlay"></div>
  <div class="hero-body-outer">
    <div class="wrap">
      <div class="hero-body" style="position:relative; bottom:auto; padding:0;">
        <p class="hero-eyebrow">Since 2013</p>
        <!-- 眼精疲労対応 修正 -->
        <h1 class="hero-h1">
          <em>鍼灸サロンAcus</em>
          スマホ・PC・運転で酷使した目と体の、その疲れに。
        </h1>
        <p class="hero-tagline">
          頭痛・首こり・目の疲れ・慢性疲労など、長引く不調は<br>
          筋肉・神経・血流など原因は様々です。<br>
          2013年から、地元福山で、長引く不調でお悩みの皆様に<br>
          寄り添ってきた、伴走型の鍼灸院です。
        </p>
        <div class="hero-labels">
          <span class="hero-label">完全個室</span>
          <span class="hero-label">担当者制</span>
          <span class="hero-label">完全予約制</span>
        </div>
        <div class="hero-cta">
          <a class="btn-hero-rsv" href="https://edisone.jp/salonacus/">24時間オンライン予約</a>
          <a class="btn-hero-line" href="https://lin.ee/wasvy2y">LINEで相談する</a>
        </div>
        <p class="hero-note">鍼がはじめての方・怖い方も、刺激量を調整して対応します。</p>
      </div>
    </div>
  </div>
</section>

<!-- 眼精疲労対応 修正 -->
<!-- FOR YOU -->
<section class="section" style="padding:56px 0;">
  <div class="wrap">
    <span class="eyebrow">For You</span>
    <h2 class="sec-title">こんな方に来てほしい</h2>
    <ul style="display:flex;flex-wrap:wrap;gap:12px;margin-top:28px;list-style:none;padding:0;">
      <li style="background:var(--surface);border:1px solid var(--border);border-radius:20px;padding:10px 20px;font-size:13.5px;color:var(--text);">在宅ワーク・テレワークで一日中PCを見ている</li>
      <li style="background:var(--surface);border:1px solid var(--border);border-radius:20px;padding:10px 20px;font-size:13.5px;color:var(--text);">スマホを手放せず、目がしょぼしょぼする</li>
      <li style="background:var(--surface);border:1px solid var(--border);border-radius:20px;padding:10px 20px;font-size:13.5px;color:var(--text);">長距離・長時間の運転後に頭が重くなる</li>
      <li style="background:var(--surface);border:1px solid var(--border);border-radius:20px;padding:10px 20px;font-size:13.5px;color:var(--text);">眼科で異常なしと言われたのに目が疲れる</li>
      <li style="background:var(--surface);border:1px solid var(--border);border-radius:20px;padding:10px 20px;font-size:13.5px;color:var(--text);">目薬を差してもすぐ目が乾く・重い</li>
      <li style="background:var(--surface);border:1px solid var(--border);border-radius:20px;padding:10px 20px;font-size:13.5px;color:var(--text);">夕方になると頭痛がひどくなる</li>
    </ul>
  </div>
</section>

<!-- 2. INSIGHT -->
<div class="insight">
  <div class="insight-inner" style="grid-template-columns:1fr; max-width:640px;">
    <div>
      <p class="insight-eyebrow">Status &amp; Insight</p>
      <h2 class="insight-title">「なんとなくの不調」を<br>放置しない。</h2>
      <!-- 眼精疲労対応 修正 -->
      <p class="insight-body">
        頑張っているのに、体がついてこない。<br><br>
        目の奥の重さ、夕方の後頭部のこわばり、休んでも抜けない疲れ、繰り返す頭痛、張り続ける首と肩。<br><br>
        「どこに行けばいいか分からない」不調に一緒に向き合い、伴走します。
      </p>
    </div>
  </div>
</div>

<!-- 3. ORIGINAL PROGRAMS -->
<section class="section">
  <div class="wrap">
    <span class="eyebrow">Menu</span>
    <h2 class="sec-title">メニュー</h2>
    <p class="sec-sub">お悩みに合わせたコースをご用意しています。</p>

    <div class="programs-grid">
      <!-- 眼精疲労対応 修正 -->
      <div class="program-card">
        <div class="program-card-head">
          <span class="program-tag tag-perform">眼精疲労・デジタル疲労</span>
          <div class="program-name">デジタルアイケア鍼</div>
          <p class="program-desc">スマホ・PC・タブレット・運転による目の疲れ・眼精疲労に特化したコース。目の周囲・首・肩の経穴へのアプローチで、目の奥の重さ・ぼやけ・頭痛を根本からケアします。</p>
        </div>
      </div>
      <div class="program-card">
        <div class="program-card-head">
          <span class="program-tag tag-perform">不調・パフォーマンス</span>
          <div class="program-name">からだの鍼</div>
          <!-- 眼精疲労対応 修正 -->
          <p class="program-desc">目の奥の重さ、繰り返す頭痛、張り続ける首こり。長引く不調は、筋肉・神経・血流など原因は様々です。表面のケアでは届かない深層から、鍼でアプローチします。</p>
        </div>
      </div>
      <div class="program-card">
        <div class="program-card-head">
          <span class="program-tag tag-beauty">全身リフレッシュ</span>
          <div class="program-name">全身【お顔とからだの鍼】</div>
          <p class="program-desc">「疲れが抜けない」を「いつもより3時間眠ったあとのような軽さ」へ。施術中90%以上の方が眠ってしまう脱力感が人気です。</p>
        </div>
      </div>
      <div class="program-card">
        <div class="program-card-head">
          <span class="program-tag tag-recover">見た目リカバリー</span>
          <div class="program-name">お顔の鍼＋ハーブピーリング</div>
          <p class="program-desc">化粧ノリが悪い・化粧水が浸透しない気がする・ターンオーバーを正常に近づけたい・疲れ顔がぬけない、そんなときにおススメ。</p>
        </div>
      </div>
    </div>

    <div style="margin-top:20px; text-align:right;">
      <a href="menu.html" style="font-size:12px; color:var(--accent); border-bottom:1px solid var(--accent-l); padding-bottom:2px;">メニュー・料金を見る →</a>
    </div>
  </div>
</section>

<!-- 4. OUR VALUES -->
<section class="section">
  <div class="wrap">
    <span class="eyebrow">Our Values</span>
    <h2 class="sec-title">Acusが選ばれる理由</h2>
    <div class="values-list">
            <div class="value-item">
        <picture>
          <source srcset="img/value-beauty-acupuncture.webp" type="image/webp">
          <img class="value-img" src="img/value-beauty-acupuncture.jpg" alt="美容鍼 電気鍼施術">
        </picture>
        <div class="value-body">
          <div class="value-title-row"><span class="value-num">01</span><strong>美容医療と連携できる、誠実な美容鍼</strong></div>
          <p>美容鍼の効果を誇張せず、できることとできないことを正直にお伝えします。ボトックス後のダウンタイムケアや、美容医療との併用など、医療と鍼灸の両方を理解した上で対応しています。「美容鍼って実際どうなの？」という疑問にも、根拠をもってお答えします。</p>
        </div>
      </div>
      <div class="value-item">
        <img class="value-img" src="img/salon-exterior-night.jpg" alt="完全個室 プライベート空間">
        <div class="value-body">
          <!-- 眼精疲労対応 修正 -->
          <div class="value-title-row"><span class="value-num">02</span><strong>頭痛・眼精疲労と、長く向き合ってきました。</strong></div>
          <p>院長自身、長年の頭痛に悩んだ経験があります。鎮痛剤に頼り続ける生活から、服用回数が減り、生活の質が上がるまでの過程を実感として知っています。だからこそ、頭痛・眼精疲労と日常の関係や、生活習慣の見直しを一緒に考えることができます。また、状態によっては信頼のおける頭痛専門医へのご紹介も行っています。</p>
        </div>
      </div>
      <div class="value-item">
        <picture>
          <source srcset="img/treatment-room.webp" type="image/webp">
          <img class="value-img" src="img/treatment-room.jpg" alt="施術ルーム">
        </picture>
        <div class="value-body">
          <div class="value-title-row"><span class="value-num">03</span><strong>「痛みをゼロにする」その先まで伴走します</strong></div>
          <p>元フィットネスインストラクターの知識と経験を活かし、不調や痛みから回復した後のフェーズにも対応しています。痛みが出ない体づくり、より良いパフォーマンスの発揮。「治った」で終わりにせず、その先の生活まで一緒に考えていきます。</p>
        </div>
      </div>
      <!-- 眼精疲労対応 修正 -->
      <div class="value-item">
        <div class="value-body" style="grid-column:1/-1;">
          <div class="value-title-row"><span class="value-num">04</span><strong>スマホ・PC・運転による眼精疲労に、専門的にアプローチします</strong></div>
          <p>一日中画面を見る仕事・スマホの長時間使用・長距離ドライブ。現代特有のこれらの習慣が引き起こす眼精疲労は、目だけでなく首・肩・自律神経にも波及します。目の周囲の経穴（ツボ）への鍼と、首肩の深層筋へのアプローチを組み合わせることで、表面的なマッサージでは届かない疲れにアクセスします。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5. PHILOSOPHY -->

<!-- 6. SOCIAL PROOF -->
<section class="section">
  <div class="wrap">
    <span class="eyebrow">Social Proof</span>
    <h2 class="sec-title">お客様の声</h2>
    <div class="voices-list">
      <div class="voice-card">
        <div class="voice-header">
          <span class="voice-tag">エイジングケア・美容鍼</span>
          <div class="voice-meta">
            <div class="voice-stars">★★★★★</div>
            <div>30代 女性</div>
          </div>
        </div>
        <p class="voice-text">肌のトーンが上がり、友人から「若返った？」と言われるようになりました。</p>
      </div>
      <div class="voice-card">
        <div class="voice-header">
          <span class="voice-tag">パフォーマンスアップ・首こり</span>
          <div class="voice-meta">
            <div class="voice-stars">★★★★★</div>
            <div>40代 女性</div>
          </div>
        </div>
        <p class="voice-text">10年来の頭痛から解放され、薬に頼らない生活が手に入りました。</p>
      </div>
      <div class="voice-card">
        <div class="voice-header">
          <span class="voice-tag">リカバリー・慢性疲労</span>
          <div class="voice-meta">
            <div class="voice-stars">★★★★★</div>
            <div>50代 女性</div>
          </div>
        </div>
        <p class="voice-text">施術後の帰り道に感じる体の軽さ。夜ぐっすり眠れる幸せを実感しています。</p>
      </div>
      <!-- 眼精疲労対応 修正 -->
      <div class="voice-card">
        <div class="voice-header">
          <span class="voice-tag">眼精疲労・デジタル疲労</span>
          <div class="voice-meta">
            <div class="voice-stars">★★★★★</div>
            <div>30代 男性</div>
          </div>
        </div>
        <p class="voice-text">毎日10時間以上PCで作業していて、目の奥の痛みと頭痛が慢性化していました。3回の施術で目の重さが明らかに軽くなり、仕事の集中力も戻ってきました。</p>
      </div>
    </div>
  </div>
</section>

<!-- 7. THE TEAM -->
<section class="section">
  <div class="wrap">
    <span class="eyebrow">The Team</span>
    <h2 class="sec-title">スタッフ紹介</h2>
    <div class="team-grid">
      <a href="mariko/suzuki_mariko_with_images.html"><img class="team-photo" src="img/team-mariko.jpg" alt="鈴木まりこ 院長"></a>
      <div class="team-body">
        <div class="team-name">鈴木まりこ</div>
        <div class="team-role">Acus 代表・院長　／　はり師・きゅう師</div>
        <p class="team-msg">「お顔もメンタルも体の一部」という信念のもと、福山の地で生活の質と、パフォーマンス向上をサポートします。</p>
        <p class="team-bio">
          2008年 はり師・きゅう師資格取得。2013年より福山市春日池にてAcusを展開。地域に根ざした信頼と、常に最新の知見を取り入れる姿勢を大切にしています。得意分野は頭痛と美容鍼。
        </p>
        <a href="https://www.instagram.com/mari_acus/" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:7px;padding:9px 20px;background:linear-gradient(135deg,#f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);color:#fff;font-size:13px;font-family:inherit;letter-spacing:0.08em;text-decoration:none;border:none;border-radius:2px;white-space:nowrap;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink:0;vertical-align:middle;"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke="currentColor" stroke-width="2" fill="none"></rect><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2" fill="none"></circle><circle cx="17.5" cy="6.5" r="1" fill="currentColor"></circle></svg><span>Instagram @mari_acus</span></a><div style="margin-top:16px;"><a href="https://acus-web.com/mariko/suzuki_mariko_with_images.html" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:8px;padding:9px 20px;background-color:#2e2a26;color:#f5f0eb;font-size:13px;font-family:inherit;letter-spacing:0.1em;text-decoration:none;border:1.5px solid #2e2a26;border-radius:2px;white-space:nowrap;" onmouseover="this.style.backgroundColor='transparent';this.style.color='#2e2a26';" onmouseout="this.style.backgroundColor='#2e2a26';this.style.color='#f5f0eb';">鈴木まりこ オフィシャルサイト →</a></div>
<div style="margin-top:16px;">
  <a href="https://reserva.be/salonacus/reserve?mode=service_staff&amp;search_evt_no=aeeJwzNTUxNzcHAARnAUQ" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:8px;padding:9px 20px;background-color:#2e2a26;color:#f5f0eb;font-size:13px;font-family:inherit;letter-spacing:0.1em;text-decoration:none;border:1.5px solid #2e2a26;border-radius:2px;white-space:nowrap;" onmouseover="this.style.backgroundColor='transparent';this.style.color='#2e2a26';" onmouseout="this.style.backgroundColor='#2e2a26';this.style.color='#f5f0eb';"><span class="rbtn-main">【同業者専用】空き状況を確認して予約</span><span class="rbtn-sub">外部サイト（RESERVA）へ遷移します</span></a>
</div>
      </div>
    </div>
    <div class="team-second">
      <img src="img/team-kanae.jpg" alt="佐藤かなえ 鍼灸師">
      <div class="team-body">
        <div class="team-name">佐藤かなえ</div>
        <div class="team-role">鍼灸師　／　はり師・きゅう師　／　JSTAスポーツアロマトレーナー</div>
        <p class="team-bio">
          美容鍼・産前産後ケア・睡眠ケアを得意とする鍼灸師。毎回の体調に合わせて施術内容を変えながら、お客様の快適な日常をサポートしています。
        </p>
        <a href="https://www.instagram.com/kanae.harikyu/" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:7px;padding:9px 20px;background:linear-gradient(135deg,#f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);color:#fff;font-size:13px;font-family:inherit;letter-spacing:0.08em;text-decoration:none;border:none;border-radius:2px;white-space:nowrap;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink:0;vertical-align:middle;"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke="currentColor" stroke-width="2" fill="none"></rect><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2" fill="none"></circle><circle cx="17.5" cy="6.5" r="1" fill="currentColor"></circle></svg><span>Instagram @kanae.harikyu</span></a>
      </div>
    </div>
    <div style="margin-top:24px; text-align:right;">
      <a href="staff.html" style="font-size:12px; color:var(--accent); border-bottom:1px solid var(--accent-l); padding-bottom:2px;">スタッフ詳細を見る →</a>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<div class="cta-band">
  <div style="max-width:600px; margin:0 auto;">
    <h2>まずは予約する。相談はLINEで。</h2>
    <p>
      24時間オンライン予約受付中。<br>
      症状や不安なことはLINEからいつでもご相談いただけます。
    </p>
    <div class="cta-btns">
      <a class="btn-dark" href="https://edisone.jp/salonacus/">24時間オンライン予約</a>
      <a class="btn-line" href="https://lin.ee/wasvy2y">LINEで相談する</a>
    </div>
  </div>
</div>

<!-- 8. ACCESS -->
<section class="section">
  <div class="wrap">
    <span class="eyebrow">Clinic Info</span>
    <h2 class="sec-title">アクセス・概要</h2>
    <div class="access-grid">
      <div class="access-info">
        <div class="access-row">
          <span class="access-label">サロン名</span>
          <span class="access-val">鍼灸サロンAcus（アキューズ）</span>
        </div>
        <div class="access-row">
          <span class="access-label">住所</span>
          <span class="access-val">広島県福山市春日池6-23</span>
        </div>
        <div class="access-row">
          <span class="access-label">受付</span>
          <span class="access-val">完全予約制<br>オンラインまたはLINEから24時間受付</span>
        </div>
        <div class="access-row">
          <span class="access-label">施術</span>
          <span class="access-val">完全個室・担当者制</span>
        </div>
        <div class="access-row">
          <span class="access-label">アクセス</span>
          <span class="access-val">
            <a href="https://acus-web.com/access.html" style="color:var(--accent); border-bottom:1px solid var(--accent-l);">アクセス詳細を見る →</a>
          </span>
        </div>
      </div>
      <div class="access-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3289.5!2d133.3847!3d34.4856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355071e1b0000001%3A0x1!2z5bqD5bGx5YaF44Ot44Oz5LiDAcus!5e0!3m2!1sja!2sjp!4v1234567890" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<?php include 'includes/footer.php'; ?>

<script>
  const toggle = document.getElementById('hdr-toggle');
  const drawer = document.getElementById('drawer');
  function closeDrawer() {
    drawer.classList.remove('open');
    toggle.setAttribute('aria-expanded','false');
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
  }, {passive:true});
  bt.addEventListener('click', () => window.scrollTo({top:0,behavior:'smooth'}));
  const obs = new IntersectionObserver(es => es.forEach(e => {
    if (e.isIntersecting) { e.target.classList.add('vis'); obs.unobserve(e.target); }
  }), {threshold:.12});
  document.querySelectorAll('.r').forEach(el => obs.observe(el));
</script>
</body></html>
