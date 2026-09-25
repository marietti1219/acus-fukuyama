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
      font-size: 14px;
      letter-spacing: .2em;
      color: rgba(255,255,255,.75);
      margin-bottom: 12px;
    }
    .hero-h1 {
      font-family: var(--serif);
      font-weight: 400;
      font-size: clamp(2.2rem, 8vw, 4.2rem);
      line-height: 1.2;
      margin-bottom: 12px;
      color: #fff;
    }
    .hero-h1 em {
      font-style:normal; font-weight:300;
      font-size:clamp(1rem,3vw,1.35rem);
      display:block; margin-bottom:4px; color:rgba(255,255,255,.8);
    }
    .hero-catch {
      font-family: var(--sans);
      font-size: clamp(0.95rem, 3vw, 1.4rem);
      font-weight: 300;
      color: rgba(255,255,255,0.85);
      letter-spacing: .08em;
      margin-bottom: 22px;
    }
    .hero-tagline {
      font-size:13px; color:rgba(255,255,255,.75);
      line-height:1.8; margin-bottom:18px; max-width:520px;
    }
    .hero-labels { display:flex; flex-wrap:wrap; gap:7px; margin-bottom:22px; }
    .hero-label {
      font-size: 13px;
      letter-spacing: .06em;
      border: 1px solid rgba(255,255,255,.45);
      padding: 5px 14px;
      border-radius: 30px;
      color: rgba(255,255,255,.9);
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
    .team-career {
      margin-top: 16px;
      display: flex;
      flex-direction: column;
      gap: 6px;
    }
    .career-row {
      display: grid;
      grid-template-columns: 120px 1fr;
      gap: 8px;
      font-size: 12.5px;
      line-height: 1.7;
    }
    .career-row dt {
      color: var(--accent);
      font-weight: 400;
      white-space: nowrap;
    }
    .career-row dd {
      color: var(--text);
    }
    @media (max-width: 600px) {
      .career-row {
        grid-template-columns: 1fr;
        gap: 2px;
      }
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
    .staff-icons {
      display: flex;
      gap: 10px;
      margin-top: 16px;
      align-items: center;
    }
    .staff-icon-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background: var(--surface);
      border: 1px solid var(--border);
      color: var(--text);
      transition: background 0.2s, color 0.2s, transform 0.15s;
      text-decoration: none;
    }
    .staff-icon-btn:hover {
      background: var(--text);
      color: #fff;
      transform: translateY(-2px);
    }
    .staff-icon-official {
      width: auto;
      padding: 0 14px;
      border-radius: 40px;
      gap: 6px;
      font-size: 12px;
      letter-spacing: .04em;
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
    .voices-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      margin-top: 28px;
    }
    .voice-pair {
      display: flex;
      flex-direction: column;
    }
    .voice-pair .voice-card {
      border-radius: 0 0 8px 8px;
      border-top: none;
      flex: 1;
    }
    .voice-pair .voice-img-card {
      border-radius: 8px 8px 0 0;
    }
    .voice-img-card {
      border-radius: 8px;
      overflow: hidden;
    }
    .voice-img-card img {
      width: 100%;
      height: auto;
      display: block;
    }
    .voice-note {
      font-size: 11px;
      color: var(--muted);
      margin-top: 8px;
      text-align: right;
    }
    @media (max-width: 660px) {
      .voices-grid {
        grid-template-columns: 1fr;
      }
    }

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
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 200;
      background: rgba(250,249,247,.97);
      border-top: 1px solid var(--border);
      padding: 10px 16px 14px;
      gap: 8px;
      display: none;
    }
    .sticky-cta.visible {
      display: flex;
    }
    @media (max-width: 640px) {
      .sticky-cta { display: none; }
      .sticky-cta.visible { display: flex; }
    }
    .sticky-cta a {
      flex:1; text-align:center; font-size:13px; font-weight:500;
      padding:13px 0; border-radius:8px;
    }
    .sticky-rsv{ background:var(--cta); color:#fff; }
    .sticky-line{ background:var(--line); color:#fff; }

    /* ===== Hero menu grid ===== */
    .hero-menu-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 8px;
      margin-bottom: 24px;
      max-width: 520px;
    }
    .hero-menu-card {
      display: block;
      border-radius: 8px;
      overflow: hidden;
      transition: opacity 0.2s, transform 0.2s;
    }
    .hero-menu-card:hover {
      opacity: 0.88;
      transform: translateY(-2px);
    }
    .hero-menu-card img {
      width: 100%;
      height: auto;
      display: block;
    }
    @media (max-width: 660px) {
      .hero-menu-grid {
        grid-template-columns: 1fr;
        max-width: 100%;
      }
    }

    /* ===== Menu card grid ===== */
    .menu-card-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }
    .menu-card-link {
      position: relative;
      display: block;
      border: none;
      padding: 0;
      background: none;
      cursor: pointer;
      border-radius: 8px;
      overflow: hidden;
    }
    .menu-card-link img {
      width: 100%;
      height: auto;
      display: block;
    }
    .menu-card-overlay {
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background 0.2s;
    }
    .menu-card-overlay span {
      color: #fff;
      font-size: 14px;
      font-family: var(--sans);
      letter-spacing: .1em;
      font-weight: 400;
      opacity: 0;
      transition: opacity 0.2s;
    }
    .menu-card-link:hover .menu-card-overlay {
      background: rgba(0,0,0,0.35);
    }
    .menu-card-link:hover .menu-card-overlay span {
      opacity: 1;
    }
    @media (max-width: 660px) {
      .menu-card-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
<!-- Google tag (gtag.js) -->
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
        <p class="hero-eyebrow">広島県福山市</p>
        <h1 class="hero-h1">鍼灸サロン Acus</h1>
        <p class="hero-catch">眼精疲労・首肩コリ・美容鍼</p>
        <div class="hero-labels">
          <span class="hero-label">完全個室</span>
          <span class="hero-label">担当者制</span>
          <span class="hero-label">完全予約制</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section style="padding:40px 0 32px; background:var(--bg);">
  <div class="wrap">
    <p style="font-size:11px; letter-spacing:.22em; text-transform:uppercase; color:var(--accent); margin-bottom:10px;">Menu</p>
    <h2 style="font-family:var(--serif); font-size:clamp(1.2rem,3vw,1.5rem); font-weight:400; color:var(--text); margin-bottom:20px;">施術メニュー</h2>
    <div class="menu-card-grid">
      <button class="menu-card-link" onclick="openModal('face')">
        <img src="img/menu-face.png" alt="お顔・頭の鍼">
        <div class="menu-card-overlay"><span>詳細を見る</span></div>
      </button>
      <button class="menu-card-link" onclick="openModal('body')">
        <img src="img/menu-body.png" alt="からだの鍼">
        <div class="menu-card-overlay"><span>詳細を見る</span></div>
      </button>
      <button class="menu-card-link" onclick="openModal('ems')">
        <img src="img/menu-ems.png" alt="楽トレ（EMS）">
        <div class="menu-card-overlay"><span>詳細を見る</span></div>
      </button>
      <button class="menu-card-link" onclick="openModal('peeling')">
        <img src="img/menu-peeling.png" alt="ハーブピーリング">
        <div class="menu-card-overlay"><span>詳細を見る</span></div>
      </button>
    </div>

    <div id="modal-overlay" onclick="closeModal()" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.5); z-index:1000;"></div>

    <div id="modal" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%,-50%); z-index:1001; background:#fff; border-radius:12px; padding:32px 28px; max-width:460px; width:90%; box-shadow:0 8px 40px rgba(0,0,0,0.18);">
      <button onclick="closeModal()" style="position:absolute; top:14px; right:18px; background:none; border:none; font-size:20px; cursor:pointer; color:#888;">✕</button>
      <p id="modal-eyebrow" style="font-size:11px; letter-spacing:.18em; color:var(--accent); margin-bottom:8px;"></p>
      <h3 id="modal-title" style="font-family:var(--serif); font-size:1.2rem; font-weight:400; margin-bottom:14px; color:var(--text);"></h3>
      <p id="modal-desc" style="font-size:13.5px; line-height:1.9; color:var(--text); margin-bottom:20px;"></p>
      <div style="background:#f9f6f2; border-radius:8px; padding:14px 16px; margin-bottom:20px;">
        <p style="font-size:11px; color:var(--muted); margin-bottom:6px;">料金</p>
        <p id="modal-price-first" style="font-size:13px; color:var(--text); margin-bottom:4px;"></p>
        <p id="modal-price-regular" style="font-size:13px; color:var(--text);"></p>
      </div>
      <a id="modal-rsv-btn" href="https://edisone.jp/salonacus/" style="display:block; text-align:center; background:var(--cta); color:#fff; padding:13px; border-radius:40px; font-size:13px; letter-spacing:.06em;">24時間オンライン予約</a>
    </div>

    <div style="margin-top:16px; text-align:right;">
      <a href="menu.php" style="font-size:12px; color:var(--accent); border-bottom:1px solid var(--accent-l); padding-bottom:2px;">メニュー・料金を見る →</a>
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
          <div class="value-title-row"><span class="value-num">01</span><strong>美容医療と併用もできる美容鍼</strong></div>
          <p>足や腰の筋肉と同じように、お顔の筋肉も使わずにいると細く硬くなります。普段無表情でいる時間が長い人ほど、Acusのお顔・頭の鍼をすることで「目が開きやすい！」「こめかみが軽い」と感じます。表情筋へのアプローチは、美容医療でエイジングケアをしている方にもおすすめです。</p>
        </div>
      </div>
      <div class="value-item">
        <img class="value-img" src="img/salon-exterior-night.jpg" alt="完全個室 プライベート空間">
        <div class="value-body">
          <!-- 眼精疲労対応 修正 -->
          <div class="value-title-row"><span class="value-num">02</span><strong>スマホ・PC・運転による眼精疲労に、専門的にアプローチします</strong></div>
          <p>一日中画面を見る仕事・スマホの長時間使用・長距離ドライブ。現代特有のこれらの習慣が引き起こす眼精疲労は、目だけではなく首・肩・自律神経にも影響することがあります。顎やこめかみ・後頭部の筋肉にも、鍼でアプローチできます。表面のマッサージでおこる皮膚の摩擦や肌の引き延ばしを起こさず、コリにアクセスします。</p>
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
    </div>
  </div>
</section>

<!-- 5. PHILOSOPHY -->

<!-- 6. SOCIAL PROOF -->
<section class="section">
  <div class="wrap">
    <span class="eyebrow">Social Proof</span>
    <h2 class="sec-title">お客様の声</h2>
    <div class="voices-grid">
      <div class="voice-pair">
        <div class="voice-img-card">
          <img src="img/voice-brand.png" alt="お客様の声：頑張らなくていい場所">
        </div>
        <div class="voice-card" style="margin-top:0; border-top:none;">
          <span class="voice-tag">メンテナンス</span>
          <p class="voice-text">Acusは頑張らなくていい場所。でもメンテしてもらったら、また頑張ろうって思える場所。</p>
        </div>
      </div>
      <div class="voice-pair">
        <div class="voice-img-card">
          <img src="img/voice-skill.png" alt="お客様の声：福山で一番の技術">
        </div>
        <div class="voice-card" style="margin-top:0; border-top:none;">
          <span class="voice-tag">鍼灸院</span>
          <p class="voice-text">先生の"腕の良さ"で通っています。この価格でこの施術。他にないと思います。結果にも満足しています。</p>
        </div>
      </div>
      <div class="voice-pair">
        <div class="voice-img-card">
          <img src="img/voice-fukuyama.png" alt="お客様の声：前向きな自分になれる">
        </div>
        <div class="voice-card" style="margin-top:0; border-top:none;">
          <span class="voice-tag">鍼灸</span>
          <p class="voice-text">体に対する知識や技術は高いと思う。まりこさんの言葉やエネルギーに元気をもらいました。来るたびに新しい目標に出会える。</p>
        </div>
      </div>
      <div class="voice-pair">
        <div class="voice-img-card">
          <img src="img/voice-space.png" alt="お客様の声：素敵空間">
        </div>
        <div class="voice-card" style="margin-top:0; border-top:none;">
          <span class="voice-tag">施術空間</span>
          <p class="voice-text">来るとしばらく体が楽に過ごせる。その日の夜は力が抜けてスーと眠れます。プライベートな空間でリラックスできる。マイナスなことが何もない。素敵空間です。</p>
        </div>
      </div>
    </div>
    <p class="voice-note">※個人の感想です。効果には個人差があります。</p>
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
          得意分野は頭痛と美容鍼。フィットネスと鍼灸、両方の知識から体にアプローチします。
        </p>
        <dl class="team-career">
          <div class="career-row">
            <dt>2001〜2003年</dt>
            <dd>大阪リゾート＆スポーツ専門学校</dd>
          </div>
          <div class="career-row">
            <dt>2001〜2023年</dt>
            <dd>フィットネスインストラクターとして従事（スタジオ・プール・GYM／開業後も並行して継続）</dd>
          </div>
          <div class="career-row">
            <dt>2005〜2008年</dt>
            <dd>朝日医療大学校</dd>
          </div>
          <div class="career-row">
            <dt>2008年</dt>
            <dd>はり師・きゅう師資格取得</dd>
          </div>
          <div class="career-row">
            <dt>2008〜2013年</dt>
            <dd>鍼灸接骨院 勤務</dd>
          </div>
          <div class="career-row">
            <dt>2013年</dt>
            <dd>鍼灸サロンAcus 開業</dd>
          </div>
        </dl>
        <div class="staff-icons">
          <a href="https://www.instagram.com/mari_acus/" target="_blank" rel="noopener" class="staff-icon-btn" aria-label="Instagram">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke="currentColor" stroke-width="2" fill="none"/>
              <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2" fill="none"/>
              <circle cx="17.5" cy="6.5" r="1" fill="currentColor"/>
            </svg>
          </a>
          <a href="https://www.facebook.com/marisuzugogo/" target="_blank" rel="noopener" class="staff-icon-btn" aria-label="Facebook">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
            </svg>
          </a>
          <a href="https://acus-web.com/mariko/suzuki_mariko_with_images.html" target="_blank" rel="noopener" class="staff-icon-btn staff-icon-official" aria-label="オフィシャルサイト">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
              <line x1="2" y1="12" x2="22" y2="12" stroke="currentColor" stroke-width="2"/>
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" stroke="currentColor" stroke-width="2"/>
            </svg>
            <span>Official</span>
          </a>
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
        <div class="staff-icons">
          <a href="https://www.instagram.com/kanae.harikyu/" target="_blank" rel="noopener" class="staff-icon-btn" aria-label="Instagram">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke="currentColor" stroke-width="2" fill="none"/>
              <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2" fill="none"/>
              <circle cx="17.5" cy="6.5" r="1" fill="currentColor"/>
            </svg>
          </a>
          <a href="https://haliiku-kanae.com/" target="_blank" rel="noopener" class="staff-icon-btn staff-icon-official" aria-label="オフィシャルサイト">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
              <line x1="2" y1="12" x2="22" y2="12" stroke="currentColor" stroke-width="2"/>
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" stroke="currentColor" stroke-width="2"/>
            </svg>
            <span>Official</span>
          </a>
        </div>
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
  const modalData = {
    face: {
      eyebrow: 'お顔・頭の鍼',
      title: 'お顔・頭の鍼',
      desc: '足や腰の筋肉と同じように、お顔の筋肉も使わずにいると細く硬くなります。普段無表情でいる時間が長い人ほど、Acusのお顔・頭の鍼をすることで「目が開きやすい！」「こめかみが軽い」と感じます。',
      priceFirst: '初回　¥5,800（カウンセリング・施術 80分）',
      priceRegular: '通常　¥7,700（45分）'
    },
    body: {
      eyebrow: 'からだの鍼',
      title: 'からだの鍼',
      desc: '奥にひろがる心地よい刺激で、こわばった筋肉がふわっとゆるみます。鍼の優しい刺激で神経に働きかけて、重だるさや不快感を和らげます。',
      priceFirst: '初回　¥5,800（カウンセリング・施術 80分）',
      priceRegular: '通常　¥7,700（45分）'
    },
    peeling: {
      eyebrow: 'ハーブピーリング',
      title: 'ハーブピーリング（角質ケア）',
      desc: '古い角質をやさしく定期的にケアして、肌表面をなめらかに。つるんとした手触りと明るい印象の肌作りを手伝います。',
      priceFirst: '初回　¥5,800（カウンセリング・施術 60分）',
      priceRegular: '通常　¥7,700（45分）'
    },
    ems: {
      eyebrow: '楽トレ（EMS）',
      title: '楽トレ（EMS）',
      desc: '電気刺激で、筋肉をギュッ、ギュッと寝たまま収縮します。普段使いにくい筋肉にも刺激を届け、筋肉を使う感覚を思い出させます。',
      priceFirst: '初回　¥3,980（45分）',
      priceRegular: '通常　¥5,500（45分）'
    }
  };

  function openModal(key) {
    const d = modalData[key];
    document.getElementById('modal-eyebrow').textContent = d.eyebrow;
    document.getElementById('modal-title').textContent = d.title;
    document.getElementById('modal-desc').textContent = d.desc;
    document.getElementById('modal-price-first').textContent = d.priceFirst;
    document.getElementById('modal-price-regular').textContent = d.priceRegular;
    document.getElementById('modal-overlay').style.display = 'block';
    document.getElementById('modal').style.display = 'block';
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    document.getElementById('modal-overlay').style.display = 'none';
    document.getElementById('modal').style.display = 'none';
    document.body.style.overflow = '';
  }

  const stickyCta = document.querySelector('.sticky-cta');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
      stickyCta.classList.add('visible');
    } else {
      stickyCta.classList.remove('visible');
    }
  }, {passive: true});
</script>
</body></html>
