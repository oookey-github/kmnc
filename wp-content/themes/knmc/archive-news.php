<?php
/**
* Template Name: お知らせ一覧ページ
*/
get_header(); ?>
<!------------- HEADER -----------　-->

<body id="top">
    
    <!-- フィックスメニュー -->
    <?php get_sidebar('flex_menu'); ?>

    <div class="newspage">
        <div class="body_inner">

            <header>

                <!-- メインメニュー -->
                <?php get_sidebar('main_menu'); ?>

                <div class="pc">
                    <div class="nav_link flex">
                        <a href="<?php bloginfo('url'); ?>"><p class="fs12">トップ</p></a>
                        <p>&gt;</p>
                        <a href=""><p class="fs12">お知らせ一覧</p></a>
                    </div>
                </div>
            </header>

            <div class="news">
                <h2 class="vertical">お知らせ</h2>

                <div>

                <!----- ページ送り ------>
                <?php
                $args = array(
                    'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
                    'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                    'prev_text'     => __( '<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" /></svg>'), // 「前へ」リンクのテキスト
                    'next_text'     => __( '<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" /></svg>'), // 「次へ」リンクのテキスト
                    // 'type'          => 'list', // 戻り値の指定 (plain/list)
                );
                the_posts_pagination($args);
                ?>

                <dl>

                    <?php
                    if (have_posts()) : query_posts('post_type=news&posts_per_page=10&paged='.$paged);
                    while (have_posts()) : the_post();
                    ?>
                    <dt><?php the_time('Y.m.d'); ?></dt>
                    <dd>
                        <div>
                            <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_field('news_info'); ?></p>
                        </div>
                        <a href="<?php echo get_permalink(); ?>"><p><span class="arrow"></span>詳しく見る</p></a>
                    </dd>

                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php
                    wp_reset_query();
                    ?>

                </dl>

                <!-- ページネーション -->
                <?php
                $args = array(
                    'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
                    'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                    'prev_text'     => __( '<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" /></svg>'), // 「前へ」リンクのテキスト
                    'next_text'     => __( '<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" /></svg>'), // 「次へ」リンクのテキスト
                    // 'type'          => 'list', // 戻り値の指定 (plain/list)
                );
                the_posts_pagination($args);
                ?>

                <!-- <ul class="Pagination">
                    <li class="Pagination-Item">
                    <a class="Pagination-Item-Link" href="news_list.html">
                    <svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                    </svg>
                    </a>
                    </li>
                    <li class="Pagination-Item">
                    <a class="Pagination-Item-Link isActive" href="news_list.html"><span>1</span></a>
                    </li>
                    <li class="Pagination-Item">
                    <a class="Pagination-Item-Link" href="news_list.html"><span>2</span></a>
                    </li>
                    <li class="Pagination-Item">
                    <a class="Pagination-Item-Link" href="news_list.html"><span>3</span></a>
                    </li>
                    <li class="Pagination-Item">
                    <a class="Pagination-Item-Link" href="news_list.html"><span>4</span></a>
                    </li>
                    <li class="Pagination-Item">
                    <a class="Pagination-Item-Link" href="news_list.html"><span>5</span></a>
                    </li>
                    <li class="Pagination-Item">
                    <a class="Pagination-Item-Link" href="news_list.html">
                    <svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                    </svg>
                    </a>
                    </li>
                </ul> -->

                </div>

            </div>

        </div>
    </div>



<!------------- FOOTER ------------->
<?php get_footer(); ?>