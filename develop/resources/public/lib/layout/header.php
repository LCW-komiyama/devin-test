<?php
$img_dir = get_template_directory_uri() . '/assets/images';
$gnavi = array(
  array('label' => 'サービス', 'href' => '#service', 'icon' => 'chevron'),
  array('label' => '制作・運用実績', 'href' => '#works', 'icon' => 'chevron'),
  array('label' => 'お客様の声', 'href' => '#voice', 'icon' => 'chevron'),
  array('label' => 'コラム', 'href' => '#column', 'icon' => 'chevron'),
  array('label' => '私たちについて', 'href' => '#about', 'icon' => 'chevron'),
  array('label' => '採用情報', 'href' => '#recruit', 'icon' => 'external'),
);
?>
<header class="l-header js-header">
  <div class="l-header__inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logo">
      <img src="<?php echo $img_dir; ?>/logo.svg" alt="Revision" width="165" height="26">
    </a>
    <nav class="l-header__nav">
      <ul class="l-header__navList">
        <?php foreach ($gnavi as $item) : ?>
        <li class="l-header__navItem">
          <a href="<?php echo esc_attr($item['href']); ?>" class="l-header__navLink">
            <span><?php echo esc_html($item['label']); ?></span>
            <?php if ($item['icon'] === 'chevron') : ?>
            <img src="<?php echo $img_dir; ?>/icon-chevron.svg" alt="" class="l-header__navIcon">
            <?php else : ?>
            <img src="<?php echo $img_dir; ?>/icon-external.svg" alt="" class="l-header__navIcon l-header__navIcon--external">
            <?php endif; ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </nav>
    <div class="l-header__btns">
      <a href="#" class="l-header__btn l-header__btn--download">
        <img src="<?php echo $img_dir; ?>/icon-download.svg" alt="">
        <span>資料ダウンロード</span>
      </a>
      <a href="#" class="l-header__btn l-header__btn--contact">
        <img src="<?php echo $img_dir; ?>/icon-mail.svg" alt="">
        <span>お問い合わせ</span>
      </a>
    </div>
  </div>
</header>
