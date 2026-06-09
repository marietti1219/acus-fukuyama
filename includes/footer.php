<footer>
  <div class="wrap">
    <div class="ftr-in">
      <div>
        <a href="index.php" class="ftr-logo"><img src="img/logo.png" alt="鍼灸サロンAcus" width="160" height="52"></a>
        <p class="ftr-addr">美容と眠りの鍼灸サロン<br>〒721-0917<br>広島県福山市春日池6-23</p>
      </div>
      <div class="ftr-cols">
        <div class="ftr-col">
          <h4>Site</h4>
          <ul>
            <li><a href="index.php">トップ</a></li>
            <li><a href="menu.php">メニュー・料金</a></li>
            <li><a href="staff.php">スタッフ</a></li>
            <li><a href="/column/index.html">コラム</a></li>
            <li><a href="access.php">アクセス</a></li>
            <li><a href="faq.php">よくある質問</a></li>
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
</footer>

<div class="sticky-cta">
  <a class="sticky-rsv" href="https://edisone.jp/salonacus/">24時間オンライン予約</a>
  <a class="sticky-line" href="https://lin.ee/wasvy2y">LINE相談</a>
</div>

<script>
  const io = new IntersectionObserver(es => {
    es.forEach(e => { if(e.isIntersecting){ e.target.classList.add('vis'); io.unobserve(e.target); } });
  }, {threshold:0.08});
  document.querySelectorAll('.r').forEach(el => io.observe(el));

  const toggle = document.getElementById('hdr-toggle');
  const drawer = document.getElementById('drawer');
  toggle.addEventListener('click', () => {
    const isOpen = drawer.classList.toggle('open');
    toggle.setAttribute('aria-expanded', String(isOpen));
    toggle.setAttribute('aria-label', isOpen ? 'メニューを閉じる' : 'メニューを開く');
    const s = toggle.querySelectorAll('span');
    if(isOpen){
      s[0].style.transform='rotate(45deg) translate(5px,5px)'; s[1].style.opacity='0'; s[2].style.transform='rotate(-45deg) translate(5px,-5px)';
    } else { s[0].style.transform=s[1].style.opacity=s[2].style.transform=''; }
  });
  function closeDrawer(){
    drawer.classList.remove('open');
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'メニューを開く');
    const s=toggle.querySelectorAll('span');
    s[0].style.transform=s[1].style.opacity=s[2].style.transform='';
  }
  const hdr = document.getElementById('hdr');
  const bt = document.querySelector('.back-top');
  window.addEventListener('scroll', () => {
    hdr.classList.toggle('scrolled', window.scrollY > 10);
    if(bt) bt.classList.toggle('vis', window.scrollY > 400);
  }, { passive: true });
  if(bt) bt.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
</script>
<button class="back-top" aria-label="ページトップへ戻る">
  <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
</button>
