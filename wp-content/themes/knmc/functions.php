<?php
// ページネーションのHTMLカスタマイズ
function custom_pagination_html( $template ) {
    $template = '
    <ul class="Pagination">
    <h2 class="screen-reader-text">%2$s</h2>
    %3$s
    </ul>';
    return $template;
}
add_filter('navigation_markup_template','custom_pagination_html');

// ページ表示件数の設定
function custom_posts_per_page($query) {
    if(is_admin() || ! $query->is_main_query()){
        return;
    }
    // お知らせ
    if($query->is_archive('news')) {
        $query->set('posts_per_page', '2');
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');

?>