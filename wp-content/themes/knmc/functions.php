<?php
// ページネーションのHTMLカスタマイズ
// function custom_pagination_html( $template ) {
//     $template = '
//     <ul class="Pagination">
//     <li class="Pagination-Item">%2$s</li>
//         %3$s
//     </ul>';
//     return $template;
// }
// add_filter('navigation_markup_template','custom_pagination_html');

// ページ表示件数の設定
function custom_posts_per_page($query) {
    if(is_admin() || ! $query->is_main_query()){
        return;
    }
    // 制作実績
    if($query->is_archive('news')) {
        $query->set('posts_per_page', '2');
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');


?>