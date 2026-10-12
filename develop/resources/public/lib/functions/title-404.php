<?php

// 404のときだけ AIOSEO の title rewrites を無効化
add_filter('aioseo_disable_title_rewrites', function ($disabled) {
  return is_404() ? true : $disabled;
});

// 404のときだけ <title> を差し替え（WP標準）
add_filter('pre_get_document_title', function ($title) {
  if (is_404()) {
    return 'ページが見つかりませんでした｜' . get_bloginfo('name');
  }
  return $title;
});