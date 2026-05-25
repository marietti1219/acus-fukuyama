<?php if (!isset($page_active)) $page_active = ''; ?>
<header id="hdr">
  <div class="hdr-in">
    <a href="index.html" class="hdr-logo"><img src="img/logo.png" alt="鍼灸サロンAcus" width="160" height="46"></a>
    <nav class="hdr-nav">
      <a href="index.html"<?= $page_active==='top'    ? ' class="active"' : '' ?>>トップ</a>
      <a href="menu.html"<?= $page_active==='menu'   ? ' class="active"' : '' ?>>メニュー・料金</a>
      <a href="staff.html"<?= $page_active==='staff'  ? ' class="active"' : '' ?>>スタッフ</a>
      <a href="/column/index.html"<?= $page_active==='column' ? ' class="active"' : '' ?>>コラム</a>
      <a href="access.html"<?= $page_active==='access' ? ' class="active"' : '' ?>>アクセス</a>
      <a href="faq.html"<?= $page_active==='faq'    ? ' class="active"' : '' ?>>よくある質問</a>
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
    <a href="index.html" onclick="closeDrawer()">トップ</a>
    <a href="menu.html" onclick="closeDrawer()">メニュー・料金</a>
    <a href="staff.html" onclick="closeDrawer()">スタッフ</a>
    <a href="/column/index.html" onclick="closeDrawer()">コラム</a>
    <a href="access.html" onclick="closeDrawer()">アクセス</a>
    <a href="faq.html" onclick="closeDrawer()">よくある質問</a>
  </nav>
  <div class="drw-cta">
    <a href="https://edisone.jp/salonacus/" class="drw-rsv" target="_blank" rel="noopener">オンライン予約</a>
    <a href="https://lin.ee/wasvy2y" class="drw-line" target="_blank" rel="noopener">LINE 予約・お問い合わせ</a>
  </div>
</div>
