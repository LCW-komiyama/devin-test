<?php
$img_dir = get_template_directory_uri() . '/assets/images';
$footer_nav_left = array('トップ', 'お客様の声', '私たちについて', 'ニュース', 'コラム', '採用一覧');
$footer_nav_service = array('サービス一覧', 'Web制作', 'SEO対策', 'MEO対策', '広告運用', '動画制作', 'SNS運用', 'AIO/LLMO', 'Webコンサルタント', 'パブリックリレーションズ');
$footer_nav_works = array('事例一覧', 'Web制作', 'SEO対策', 'MEO対策', '広告運用', '動画制作', 'LINE運用', 'Instagram運用', 'AIO/LLMO', 'パブリックリレーションズ', 'その他');
?>
<section class="l-cta">
  <div class="l-cta__inner">
    <p class="l-cta__text">
      専門のプロフェッショナルが事業にあったご提案をいたします。<br>
      まずはお気軽におご相談ください。
    </p>
    <div class="l-cta__row">
      <a href="#" class="l-cta__btn l-cta__btn--contact">
        <img src="<?php echo $img_dir; ?>/icon-mail-dark.svg" alt="">
        <span>お問い合わせ</span>
      </a>
      <a href="#" class="l-cta__btn l-cta__btn--download">
        <img src="<?php echo $img_dir; ?>/icon-mail-white.svg" alt="">
        <span>資料請求</span>
      </a>
      <div class="l-cta__tel">
        <p class="l-cta__telNote">お電話でもお問合せできます<br>平日9:00〜18:00</p>
        <a href="tel:028-680-6833" class="l-cta__telNumber">028-680-6833</a>
      </div>
    </div>
  </div>
</section>
<footer class="l-footer js-footer">
  <div class="l-footer__inner">
    <div class="l-footer__left">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer__logo">
        <img src="<?php echo $img_dir; ?>/logo.svg" alt="Revision" width="165" height="26">
      </a>
      <div class="l-footer__address">
        <p>
          UTSUNOMIYA / 宇都宮本社<br>
          栃木県宇都宮市錦２丁目４−３<br>
          Tel: 028-680-6833
        </p>
        <p>
          TOKYO / 東京オフィス<br>
          東京都渋谷区代々木3-1-11<br>
          パシフィックスクエア代々木 4F
        </p>
      </div>
      <a href="#" class="l-footer__sns">
        <img src="<?php echo $img_dir; ?>/icon-sns.svg" alt="X">
      </a>
      <p class="l-footer__copyright">© Revision Inc.</p>
    </div>
    <div class="l-footer__right">
      <nav class="l-footer__nav">
        <ul class="l-footer__navCol l-footer__navCol--main">
          <?php foreach ($footer_nav_left as $label) : ?>
          <li><a href="#"><?php echo esc_html($label); ?></a></li>
          <?php endforeach; ?>
        </ul>
        <div class="l-footer__navCol">
          <p class="l-footer__navHead"><a href="#">サービス</a></p>
          <ul>
            <?php foreach ($footer_nav_service as $label) : ?>
            <li><a href="#"><?php echo esc_html($label); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="l-footer__navCol">
          <p class="l-footer__navHead"><a href="#">制作実績</a></p>
          <ul>
            <?php foreach ($footer_nav_works as $label) : ?>
            <li><a href="#"><?php echo esc_html($label); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </nav>
      <p class="l-footer__partner"><a href="#">パートナー企業をお探しの方へ</a></p>
      <p class="l-footer__privacy"><a href="#">プライバシーポリシー</a></p>
    </div>
  </div>
</footer>
