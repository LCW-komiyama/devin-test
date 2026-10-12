<?php
/**
 * スタイルとスクリプトのエンキュー
 */
function theme_enqueue_styles_scripts() {
  // CSSのエンキュー
  wp_enqueue_style(
    'theme-styles',
    get_template_directory_uri() . '/assets/css/styles.css',
    array(),
    wp_get_theme()->get('Version')
  );

  // JavaScriptのエンキュー（vendor.js）
  wp_enqueue_script(
    'theme-vendor',
    get_template_directory_uri() . '/assets/js/vendor.js',
    array(),
    wp_get_theme()->get('Version'),
    true // footerに配置
  );

  // JavaScriptのエンキュー（scripts.js）
  wp_enqueue_script(
    'theme-scripts',
    get_template_directory_uri() . '/assets/js/scripts.js',
    array('theme-vendor'), // vendor.jsに依存
    wp_get_theme()->get('Version'),
    true // footerに配置
  );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles_scripts');

