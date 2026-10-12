<?php 
  // ================================
  // 【対策 1】?author=1 などのクエリを使ったユーザー名の漏洩を防ぐ
  // `?author=` のクエリを検知した場合、トップページにリダイレクトする
  // ================================
  function block_author_enum() {
    if (isset($_GET['author'])) { // URLに ?author= が含まれるかチェック
      wp_redirect(home_url(), 301); // トップページにリダイレクト（301リダイレクト）
      exit; // 処理を終了
    }
  }
  add_action('init', 'block_author_enum');

  // ================================
  // 【対策 2】REST API 経由でユーザー情報が取得されるのを防ぐ
  // `https://example.com/wp-json/wp/v2/users/` にアクセスすると
  // デフォルトではユーザー情報が取得できてしまうため、403エラーを返す
  // ================================
  function disable_rest_user_endpoint($response, $user, $request) {
    return new WP_Error(
      'rest_forbidden', // エラーコード
      __('REST API access to users is forbidden.'), // エラーメッセージ
      array('status' => 403) // HTTPステータスコード 403（Forbidden）
    );
  }
  add_filter('rest_prepare_user', 'disable_rest_user_endpoint', 10, 3);
  
  // All in one seo のタイトルタグ付与
  add_theme_support( 'title-tag' );

  //自動更新を無効にする
  add_filter( 'automatic_updater_disabled', '__return_true' );
?>