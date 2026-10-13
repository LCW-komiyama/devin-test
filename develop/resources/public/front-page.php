<?php include_once('header.php'); ?>
<?php $img_dir = get_template_directory_uri() . '/assets/images'; ?>

<main class="l-main p-top">

  <!-- FV -->
  <section class="p-top-fv">
    <div class="p-top-fv__inner">
      <div class="p-top-fv__left">
        <p class="p-top-fv__en">CREATIVE×MARKETING</p>
        <h1 class="p-top-fv__title">
          Webマーケティングで<br>
          ビジネス課題を解決する。
        </h1>
        <ul class="p-top-fv__cards">
          <?php
          $fv_cards = array('Web制作', 'SNS運用', 'Webマーケティング');
          foreach ($fv_cards as $card) :
          ?>
          <li class="p-top-fv__card">
            <p class="p-top-fv__cardTitle"><?php echo esc_html($card); ?></p>
            <ul class="p-top-fv__cardLinks">
              <li><a href="#"><img src="<?php echo $img_dir; ?>/icon-check.svg" alt="">サービス詳細</a></li>
              <li><a href="#"><img src="<?php echo $img_dir; ?>/icon-check.svg" alt="">資料請求</a></li>
            </ul>
            <a href="#" class="p-top-fv__cardBtn">
              <img src="<?php echo $img_dir; ?>/icon-mail.svg" alt="">お問い合わせ
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="p-top-fv__slider js-fvSlider">
        <div class="p-top-fv__slides">
          <?php
          $fv_slides = array(
            array('img' => 'fv-main.png', 'text' => '自社で更新・発信できる自走型の運営を実現。高貴さを表現したデザインでブランドイメージも向上', 'client' => '会計バンク株式会社'),
            array('img' => 'office.png', 'text' => 'デザインとマーケティングの力で、事業の成長を支えるクリエイティブを提供します。', 'client' => 'Revision Inc.'),
            array('img' => 'works-pc-1.png', 'text' => 'ブランドの世界観を保ちながら、成果につながるサイト設計を実現。', 'client' => 'ミッケ！ in ODAIBA'),
          );
          foreach ($fv_slides as $si => $slide) :
          ?>
          <div class="p-top-fv__slide<?php echo $si === 0 ? ' is-active' : ''; ?>">
            <img src="<?php echo $img_dir; ?>/top/<?php echo esc_attr($slide['img']); ?>" alt="" class="p-top-fv__slideImg">
            <div class="p-top-fv__slideCaption">
              <p class="p-top-fv__slideText"><?php echo esc_html($slide['text']); ?></p>
              <p class="p-top-fv__slideClient"><span>Client :</span><?php echo esc_html($slide['client']); ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="p-top-fv__pager">
          <ul class="p-top-fv__dots js-fvDots">
            <?php foreach ($fv_slides as $si => $slide) : ?>
            <li class="<?php echo $si === 0 ? 'is-active' : ''; ?>"></li>
            <?php endforeach; ?>
          </ul>
          <div class="p-top-fv__arrows">
            <button type="button" class="p-top-fv__arrow p-top-fv__arrow--prev"><img src="<?php echo $img_dir; ?>/icon-slider-arrow.svg" alt="前へ"></button>
            <button type="button" class="p-top-fv__arrow p-top-fv__arrow--next"><img src="<?php echo $img_dir; ?>/icon-slider-arrow.svg" alt="次へ"></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- サービス -->
  <section class="p-top-secHead" id="service">
    <div class="p-top-secHead__inner">
      <h2 class="c-h2">
        <span class="c-h2__en">Service</span>
        <span class="c-h2__ja">サービス</span>
      </h2>
      <p class="p-top-secHead__text">お客様の事業課題に応じて<br>最適なWebソリューションを提供いたします。</p>
      <a href="#" class="c-more">
        <span>もっと見る</span>
        <span class="c-more__circle"><img src="<?php echo $img_dir; ?>/icon-more-circle-arrow.svg" alt=""></span>
      </a>
    </div>
  </section>

  <section class="p-top-service">
    <div class="p-top-service__inner">
      <h3 class="c-h3"><img src="<?php echo $img_dir; ?>/icon-h3-dot.svg" alt="">クリエイティブ</h3>
      <ul class="p-top-service__cards">
        <?php
        $creative_cards = array(
          array('icon' => 'svc-creative.svg', 'title' => 'コーポレートサイト制作', 'text' => 'ブランドの基盤を築き、ステークホルダーとの最適なコミュニケーションを図るWebサイトを制作します。'),
          array('icon' => 'svc-recruit.svg', 'title' => '採用サイト制作', 'text' => 'ブランドの基盤を築き、ステークホルダーとの最適なコミュニケーションを図るWebサイトを制作します。'),
          array('icon' => 'svc-lp.svg', 'title' => 'LP（ランディングページ）制作', 'text' => 'PRしたい商品・サービスの訴求を行い、売上アップに直結する重要な役割を果します。'),
          array('icon' => 'svc-creative.svg', 'title' => 'ECサイト制作', 'text' => '多様な決済や外部ツールとの連携により、購入率アップ。カゴ落ちを意識したサイト設計で、機会損失を防ぎます。'),
        );
        foreach ($creative_cards as $card) :
        ?>
        <li class="c-card">
          <a href="#" class="c-card__link">
            <span class="c-card__head">
              <img src="<?php echo $img_dir; ?>/<?php echo esc_attr($card['icon']); ?>" alt="" class="c-card__icon">
              <span class="c-card__title"><?php echo esc_html($card['title']); ?></span>
            </span>
            <span class="c-card__text"><?php echo esc_html($card['text']); ?></span>
            <img src="<?php echo $img_dir; ?>/icon-card-arrow.svg" alt="" class="c-card__arrow">
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
      <ul class="p-top-service__btns">
        <?php foreach (array('サービスサイト制作', 'オウンドメディア制作', '動画制作') as $btn) : ?>
        <li><a href="#" class="c-linkBtn"><span><?php echo esc_html($btn); ?></span><img src="<?php echo $img_dir; ?>/icon-btn-arrow.svg" alt=""></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- クリエイティブ事例 -->
  <section class="p-top-works" id="works">
    <h4 class="c-h4">クリエイティブ事例</h4>
    <ul class="p-top-works__list js-worksSlider">
      <?php for ($i = 1; $i <= 6; $i++) :
        $n = (($i - 1) % 4) + 1; ?>
      <li class="c-worksCard">
        <div class="c-worksCard__image">
          <img src="<?php echo $img_dir; ?>/top/works-pc-<?php echo $n; ?>.png" alt="" class="c-worksCard__pc">
          <img src="<?php echo $img_dir; ?>/top/works-sp-<?php echo $n; ?>.png" alt="" class="c-worksCard__sp">
        </div>
        <p class="c-worksCard__title">ミッケ！ in ODAIBA</p>
        <ul class="c-worksCard__tags">
          <li class="c-tag">WEB制作</li>
          <li class="c-tag">#LP制作</li>
          <li class="c-tag c-tag--text">#エンタメ</li>
        </ul>
      </li>
      <?php endfor; ?>
    </ul>
    <a href="#" class="c-moreText">もっと見る<img src="<?php echo $img_dir; ?>/icon-more-arrow.svg" alt=""></a>
  </section>

  <!-- マーケティング -->
  <section class="p-top-marketing">
    <div class="p-top-marketing__inner">
      <h3 class="c-h3"><img src="<?php echo $img_dir; ?>/icon-h3-dot.svg" alt="">マーケティング</h3>
      <ul class="p-top-marketing__cards">
        <?php
        $marketing_cards = array(
          array('icon' => 'svc-creative.svg', 'title' => 'WEBコンサルティング', 'text' => 'ブランドの基盤を築き、ステークホルダーとの最適なコミュニケーションを図るWebサイトを制作します。'),
          array('icon' => 'svc-creative.svg', 'title' => '広告運用', 'text' => '各種主要媒体との連携により、CV数アップ。ターゲット層を意識したアカウント設計で、予算の無駄遣いを防ぎます。'),
          array('icon' => 'svc-creative.svg', 'title' => 'Instagram運用', 'text' => '各種SNSや機能との連携により、フォロワー数アップ。世界観を意識したアカウント設計で、離脱を防ぎます。'),
          array('icon' => 'svc-line.svg', 'title' => 'LINE運用', 'text' => '各種ECや外部ツールとの連携により、リピート率アップ。顧客心理を意識した配信設計で、ブロックを防ぎます。'),
        );
        foreach ($marketing_cards as $card) :
        ?>
        <li class="c-card">
          <a href="#" class="c-card__link">
            <span class="c-card__head">
              <img src="<?php echo $img_dir; ?>/<?php echo esc_attr($card['icon']); ?>" alt="" class="c-card__icon">
              <span class="c-card__title"><?php echo esc_html($card['title']); ?></span>
            </span>
            <span class="c-card__text"><?php echo esc_html($card['text']); ?></span>
            <img src="<?php echo $img_dir; ?>/icon-card-arrow.svg" alt="" class="c-card__arrow">
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
      <ul class="p-top-marketing__btns">
        <li><a href="#" class="c-linkBtn"><span>SEO<small>（検索エンジン最適化）</small></span><img src="<?php echo $img_dir; ?>/icon-btn-arrow.svg" alt=""></a></li>
        <li><a href="#" class="c-linkBtn"><span>AIO/LLMO</span><img src="<?php echo $img_dir; ?>/icon-btn-arrow.svg" alt=""></a></li>
        <li><a href="#" class="c-linkBtn"><span>MEO<small>（マップ検索エンジン最適化）</small></span><img src="<?php echo $img_dir; ?>/icon-btn-arrow.svg" alt=""></a></li>
        <li><a href="#" class="c-linkBtn"><span>PR</span><img src="<?php echo $img_dir; ?>/icon-btn-arrow.svg" alt=""></a></li>
      </ul>
    </div>
  </section>

  <!-- マーケティング事例 -->
  <section class="p-top-cases">
    <h4 class="c-h4">マーケティング事例</h4>
    <ul class="p-top-cases__list js-worksSlider">
      <?php
      $cases = array(
        array('name' => '女将 くみ', 'logo' => array('case-logo-1.png'), 'screen' => 'case-screen-1.png', 'tag' => 'Instagram運用', 'tagClass' => '', 'bg' => '#faf7f1'),
        array('name' => '株式会社HIBIYAキャリアアソシエイツ', 'logo' => array('case-logo-2a.svg', 'case-logo-2b.svg'), 'screen' => 'case-screen-2.png', 'tag' => 'LINE', 'tagClass' => 'c-tag--line', 'bg' => '#ffffff'),
        array('name' => '小堀建設', 'logo' => array('case-logo-3.png'), 'screen' => 'case-screen-3.png', 'tag' => 'Instagram', 'tagClass' => 'c-tag--instagram', 'bg' => '#faf7f1'),
        array('name' => '上州屋旅館', 'logo' => array('case-logo-4a.svg', 'case-logo-4b.svg', 'case-logo-4c.svg'), 'screen' => 'case-screen-4.png', 'tag' => 'Instagram', 'tagClass' => 'c-tag--instagram', 'bg' => '#faf7f1'),
        array('name' => '前田メディカルクリニック', 'logo' => array('case-logo-5.png'), 'screen' => 'case-screen-5.png', 'tag' => 'Instagram', 'tagClass' => 'c-tag--instagram', 'bg' => '#e1f2ff'),
        array('name' => '日本顔タイプ診断協会', 'logo' => array('case-logo-6a.svg', 'case-logo-6b.svg'), 'screen' => 'case-screen-6.png', 'tag' => 'LINE', 'tagClass' => 'c-tag--line', 'bg' => '#ffffff'),
      );
      foreach ($cases as $case) :
      ?>
      <li class="c-caseCard">
        <div class="c-caseCard__image" style="background-color: <?php echo esc_attr($case['bg']); ?>;">
          <div class="c-caseCard__logo">
            <?php foreach ($case['logo'] as $logo) : ?>
            <img src="<?php echo $img_dir; ?>/top/<?php echo esc_attr($logo); ?>" alt="">
            <?php endforeach; ?>
          </div>
          <div class="c-caseCard__phone">
            <img src="<?php echo $img_dir; ?>/top/<?php echo esc_attr($case['screen']); ?>" alt="" class="c-caseCard__screen">
            <img src="<?php echo $img_dir; ?>/top/case-phone.png" alt="" class="c-caseCard__frame">
          </div>
        </div>
        <p class="c-caseCard__name"><?php echo esc_html($case['name']); ?></p>
        <ul class="c-caseCard__tags">
          <li class="c-tag <?php echo esc_attr($case['tagClass']); ?>"><?php echo esc_html($case['tag']); ?></li>
        </ul>
      </li>
      <?php endforeach; ?>
    </ul>
    <a href="#" class="c-moreText">もっと見る<img src="<?php echo $img_dir; ?>/icon-more-arrow.svg" alt=""></a>
  </section>

  <!-- クライアント -->
  <section class="p-top-client" id="client">
    <div class="p-top-client__head">
      <h2 class="c-h2">
        <span class="c-h2__en">Client</span>
        <span class="c-h2__ja">クライアント</span>
      </h2>
      <p class="p-top-client__text">1000件以上の数々のビジネス課題を解決してきました。</p>
    </div>
    <ul class="p-top-client__grid">
      <?php for ($i = 1; $i <= 24; $i++) : ?>
      <li class="p-top-client__cell">
        <img src="<?php echo $img_dir; ?>/top/client-<?php echo sprintf('%02d', $i); ?>.png" alt="">
      </li>
      <?php endfor; ?>
    </ul>
  </section>

  <!-- お客様の声 -->
  <section class="p-top-secHead" id="voice">
    <div class="p-top-secHead__inner">
      <h2 class="c-h2">
        <span class="c-h2__en">Voice</span>
        <span class="c-h2__ja">お客様の声</span>
      </h2>
      <p class="p-top-secHead__text">実際にサービスをご利用いただいた<br>お客様からの声をご紹介いたします。</p>
      <a href="#" class="c-more">
        <span>もっと見る</span>
        <span class="c-more__circle"><img src="<?php echo $img_dir; ?>/icon-more-circle-arrow.svg" alt=""></span>
      </a>
    </div>
  </section>

  <section class="p-top-voice">
    <ul class="p-top-voice__list">
      <?php
      $voices = array(
        array(
          'title' => 'CV率前年比130%達成！ナカニシが実現した“コンバージョンを最大化する”サイト設計',
          'images' => array('voice-1.png'),
          'logo' => 'client-05.png',
          'tags' => array(array('Webコンサルティング', ''), array('製品・工業・素材', 'c-tag--outline')),
        ),
        array(
          'title' => '半年でInstagramフォロワー数が2倍、インプレッションが3倍に！ホテル三日月が目指す“選ばれる施設”づくり',
          'images' => array('voice-2.png'),
          'logo' => 'voice-logo-2.png',
          'tags' => array(array('Webコンサルティング', ''), array('旅行・ホテル', 'c-tag--outline')),
        ),
        array(
          'title' => '採用サイトからの応募者数前年比10倍以上 “見られるサイト”から“応募されるサイト”へ変革した事例',
          'images' => array('voice-3a.png', 'voice-3b.png'),
          'logo' => null,
          'logoSvg' => array('voice-logo-3a.svg', 'voice-logo-3b.svg'),
          'tags' => array(array('Webコンサルティング', ''), array('製品・工業・素材', 'c-tag--outline')),
        ),
      );
      for ($row = 0; $row < 2; $row++) :
        foreach ($voices as $voice) :
      ?>
      <li class="c-voiceCard">
        <div class="c-voiceCard__image">
          <?php foreach ($voice['images'] as $vi => $vimg) : ?>
          <img src="<?php echo $img_dir; ?>/top/<?php echo esc_attr($vimg); ?>" alt="" class="c-voiceCard__img<?php echo $vi > 0 ? ' c-voiceCard__img--overlay' : ''; ?>">
          <?php endforeach; ?>
          <div class="c-voiceCard__logoBox">
            <?php if ($voice['logo']) : ?>
            <img src="<?php echo $img_dir; ?>/top/<?php echo esc_attr($voice['logo']); ?>" alt="">
            <?php else : ?>
            <span class="c-voiceCard__logoSet">
              <?php foreach ($voice['logoSvg'] as $lsvg) : ?>
              <img src="<?php echo $img_dir; ?>/top/<?php echo esc_attr($lsvg); ?>" alt="">
              <?php endforeach; ?>
            </span>
            <?php endif; ?>
          </div>
        </div>
        <p class="c-voiceCard__title"><?php echo esc_html($voice['title']); ?></p>
        <ul class="c-voiceCard__tags">
          <?php foreach ($voice['tags'] as $tag) : ?>
          <li class="c-tag <?php echo esc_attr($tag[1]); ?>"><?php echo esc_html($tag[0]); ?></li>
          <?php endforeach; ?>
        </ul>
      </li>
      <?php
        endforeach;
      endfor;
      ?>
    </ul>
  </section>

  <!-- 会社イメージ -->
  <div class="p-top-office" id="about">
    <img src="<?php echo $img_dir; ?>/top/office.png" alt="オフィス風景">
  </div>

  <!-- メンバー -->
  <section class="p-top-secHead" id="member">
    <div class="p-top-secHead__inner">
      <h2 class="c-h2">
        <span class="c-h2__en">Member</span>
        <span class="c-h2__ja">メンバー</span>
      </h2>
      <p class="p-top-secHead__text">専門のプロフェッショナルが<br>事業にあったご提案をいたします。</p>
      <a href="#" class="c-more">
        <span>もっと見る</span>
        <span class="c-more__circle"><img src="<?php echo $img_dir; ?>/icon-more-circle-arrow.svg" alt=""></span>
      </a>
    </div>
  </section>

  <section class="p-top-member">
    <div class="p-top-member__marquee js-memberMarquee">
      <ul class="p-top-member__track">
        <?php for ($i = 1; $i <= 7; $i++) : ?>
        <li><img src="<?php echo $img_dir; ?>/top/member-<?php echo $i; ?>.png" alt="メンバー"></li>
        <?php endfor; ?>
      </ul>
    </div>
  </section>

  <!-- お知らせ / コラム -->
  <section class="p-top-newsColumn" id="column">
    <div class="p-top-news">
      <h3 class="p-top-news__title">お知らせ</h3>
      <ul class="p-top-news__list">
        <?php
        $news = array(
          array('date' => '2026.05.01', 'cat' => 'NEWS', 'title' => '【栃木県初開催】母の日に“おしゃれ”が集まるマーケットイベント「TOCHIGI CREATORS MARKET」開催インフルエンサーやショップオーナーなど20店舗超が出店'),
          array('date' => '2026.05.01', 'cat' => 'INFO', 'title' => '臨時休業のお知らせ'),
          array('date' => '2026.03.05', 'cat' => 'NEWS', 'title' => 'Revisionは8期目を迎えました'),
          array('date' => '2026.02.11', 'cat' => 'NEWS', 'title' => 'LINE公式アカウント運用代行サービス「LPRO（エルプロ）」提供開始のお知らせ'),
          array('date' => '2026.01.01', 'cat' => 'INFO', 'title' => '新年のご挨拶'),
        );
        foreach ($news as $item) :
        ?>
        <li class="p-top-news__item">
          <a href="#">
            <span class="p-top-news__meta">
              <span class="p-top-news__date"><?php echo esc_html($item['date']); ?></span>
              <span class="p-top-news__cat">/ <?php echo esc_html($item['cat']); ?></span>
            </span>
            <span class="p-top-news__itemTitle"><?php echo esc_html($item['title']); ?></span>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
      <a href="#" class="c-moreText p-top-news__more">お知らせ一覧<img src="<?php echo $img_dir; ?>/icon-more-arrow.svg" alt=""></a>
    </div>
    <div class="p-top-column">
      <h3 class="p-top-column__title">コラム</h3>
      <ul class="p-top-column__list">
        <?php
        $columns = array(
          array('img' => 'column-1.png', 'title' => '【AI・無料・アプリ】バナーの作成はツールで！おすすめ11選と作るコツを解説', 'date' => '2025.12.19', 'cat' => 'Web制作・広告運用'),
          array('img' => 'column-2.png', 'title' => '【採用サイトを作成する方法】費用、おすすめのツールと制作会社を解説', 'date' => '2025.10.06', 'cat' => '採用サイト'),
          array('img' => 'column-3.png', 'title' => 'Googleビジネスプロフィールの登録手順と設定のポイントを徹底解説', 'date' => '2025.03.10', 'cat' => 'MEO'),
        );
        foreach ($columns as $col) :
        ?>
        <li class="p-top-column__item">
          <a href="#">
            <div class="p-top-column__thumb"><img src="<?php echo $img_dir; ?>/top/<?php echo esc_attr($col['img']); ?>" alt=""></div>
            <div class="p-top-column__body">
              <p class="p-top-column__itemTitle"><?php echo esc_html($col['title']); ?></p>
              <p class="p-top-column__meta"><span class="p-top-column__date"><?php echo esc_html($col['date']); ?></span> / <span class="p-top-column__cat"><?php echo esc_html($col['cat']); ?></span></p>
            </div>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
      <a href="#" class="c-moreText p-top-column__more">コラム一覧<img src="<?php echo $img_dir; ?>/icon-more-arrow.svg" alt=""></a>
    </div>
  </section>

</main>

<?php include_once('footer.php'); ?>
