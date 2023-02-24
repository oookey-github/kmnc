<?php
/**
* Template Name: お知らせ一覧ページ
*/
get_header(); ?>
<!------------- HEADER -----------　-->

<body>
    
    <!-- フィックスメニュー -->
    <?php get_sidebar('flex_menu'); ?>

    <div class="newspage">
        <div class="body_inner">

            <header>

                <!-- メインメニュー -->
                <?php get_sidebar('main_menu'); ?>

                <div class="nav_link flex">
                    <a href="<?php bloginfo('url'); ?>"><p class="fs12">トップ</p></a>
                    <p>&gt;</p>
                    <a href=""><p class="fs12">お知らせ一覧</p></a>
                </div>
            </header>

            <div class="news">
                <h2 class="vertical">お知らせ</h2>

                <div>
                <!-- ページネーション -->
                <?php 
                // the_posts_pagination(
                //     array(
                //     'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
                //     'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                //     'prev_text'     => __( '<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" /></svg>'), // 「前へ」リンクのテキスト
                //     'next_text'     => __( '<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" /></svg>'), // 「次へ」リンクのテキスト
                //     'type'          => 'list', // 戻り値の指定 (plain/list)
                //     )
                // ); 
                ?>



                <!----- ページ送り ------>
                <div class="wrap pagination">

                <?php
                $args = array(
                    'mid_size' => 1,
                    'prev_text' => '&lt;&lt;前へ',
                    'next_text' => '次へ&gt;&gt;',
                    'screen_reader_text' => ' ',
                );
                the_posts_pagination($args);
                ?>


                    <?php 
                    // global $wp_rewrite;
                    // $paginate_base = get_pagenum_link(1);
                    // if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
                    //     $paginate_format = '';
                    //     $paginate_base = add_query_arg('paged','%#%');
                    // }
                    // else{
                    //     $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                    //     user_trailingslashit('page/%#%/','paged');;
                    //     $paginate_base .= '%_%';
                    // }
                    // echo paginate_links(array(
                    //     'base' => $paginate_base,
                    //     'format' => $paginate_format,
                    //     'total' => $wp_query->max_num_pages,
                    //     'mid_size' => 1,
                    //     'current' => ($paged ? $paged : 1),
                    //     'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" /></svg>',
                    //     'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" /></svg>',
                    // )); 
                    ?>
                </div>
                <?php
                // wp_reset_query();
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

                <dl>


                    <?php
                    if (have_posts()) : query_posts('post_type=news&posts_per_page=999&paged='.$paged);
                    while (have_posts()) : the_post();
                    ?>
                    <dt><?php the_time('Y.m.d'); ?></dt>
                    <dd>
                        <div>
                            <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_field('news_detail'); ?></p>
                        </div>
                        <a href="<?php echo get_permalink(); ?>"><p><span class="arrow"></span>詳しく見る</p></a>
                    </dd>

                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php
                    wp_reset_query();
                    ?>



                    <!-- <dt>2022.11.12</dt>
                    <dd>
                        <div>
                            <h2><a href="./news_detail.html">【GWを世界遺産リゾート熊野倶楽部で】Special Event のご案内</a></h2>
                            <p>世界遺産リゾート熊野倶楽部では年末年始期間中、連日趣向を凝らしたイベント&amp;エンターテイメントをご用意。世界遺産リゾート熊野倶楽部で心がはずむ 贅沢な時間と体験を心行くまでお愉しみくださいませ。</p>
                        </div>
                        <a href="../news/news_detail.html"><p><span class="arrow"></span>詳しく見る</p></a>
                    </dd>



                    <dt>2022.11.12</dt>
                    <dd>
                        <div>
                            <h2><a href="./news_detail.html">【奇跡の蝶】アサギマダラ復活プロジェクト</a></h2>
                            <p>毎週土曜日はラグジュアリーなクラブラウンジを。<br>
                                聖地熊野の自然を望みながら、心地よく優しいギターの音色に癒される特別なひと時をお過ごしください。</p>
                        </div>
                        <a href="../news/news_detail.html"><p><span class="arrow"></span>詳しく見る</p></a>
                    </dd>
                    <dt>2022.11.12</dt>
                    <dd>
                        <div>
                            <h2><a href="./news_detail.html">【SDGs】夕食コース「ハーフブッフェ」でのご予約に関するご案内</a></h2>
                            <p>世界遺産リゾート熊野倶楽部では年末年始期間中、連日趣向を凝らしたイベント&amp;エンターテイメントをご用意。世界遺産リゾート熊野倶楽部で心がはずむ 贅沢な時間と体験を心行くまでお愉しみくださいませ。</p>
                        </div>
                        <a href="../news/news_detail.html"><p><span class="arrow"></span>詳しく見る</p></a>
                    </dd>
                    <dt>2022.11.12</dt>
                    <dd>
                        <div>
                            <h2><a href="./news_detail.html">【川渕皓平様プロデュース】世界遺産リゾート熊野俱楽部を彩る竹あかり</a></h2>
                            <p>世界遺産リゾート熊野倶楽部では年末年始期間中、連日趣向を凝らしたイベント&amp;エンターテイメントをご用意。世界遺産リゾート熊野倶楽部で心がはずむ 贅沢な時間と体験を心行くまでお愉しみくださいませ。</p>
                        </div>
                        <a href="../news/news_detail.html"><p><span class="arrow"></span>詳しく見る</p></a>
                    </dd>
                    <dt>2022.11.12</dt>
                    <dd>
                        <div>
                            <h2><a href="./news_detail.html">【GWを世界遺産リゾート熊野倶楽部で】Special Event のご案内</a></h2>
                            <p>世界遺産リゾート熊野倶楽部では年末年始期間中、連日趣向を凝らしたイベント&amp;エンターテイメントをご用意。世界遺産リゾート熊野倶楽部で心がはずむ 贅沢な時間と体験を心行くまでお愉しみくださいませ。</p>
                        </div>
                        <a href="../news/news_detail.html"><p><span class="arrow"></span>詳しく見る</p></a>
                    </dd>
                    <dt>2022.11.12</dt>
                    <dd>
                        <div>
                            <h2><a href="./news_detail.html">【奇跡の蝶】アサギマダラ復活プロジェクト</a></h2>
                            <p>毎週土曜日はラグジュアリーなクラブラウンジを。<br>
                                聖地熊野の自然を望みながら、心地よく優しいギターの音色に癒される特別なひと時をお過ごしください。</p>
                        </div>
                        <a href="../news/news_detail.html"><p><span class="arrow"></span>詳しく見る</p></a>
                    </dd>
                    <dt>2022.11.12</dt>
                    <dd>
                        <div>
                            <h2><a href="./news_detail.html">【SDGs】夕食コース「ハーフブッフェ」でのご予約に関するご案内</a></h2>
                            <p>世界遺産リゾート熊野倶楽部では年末年始期間中、連日趣向を凝らしたイベント&amp;エンターテイメントをご用意。世界遺産リゾート熊野倶楽部で心がはずむ 贅沢な時間と体験を心行くまでお愉しみくださいませ。</p>
                        </div>
                        <a href="../news/news_detail.html"><p><span class="arrow"></span>詳しく見る</p></a>
                    </dd>
                    <dt>2022.11.12</dt>
                    <dd>
                        <div>
                            <h2><a href="./news_detail.html">【川渕皓平様プロデュース】世界遺産リゾート熊野俱楽部を彩る竹あかり</a></h2>
                            <p>世界遺産リゾート熊野倶楽部では年末年始期間中、連日趣向を凝らしたイベント&amp;エンターテイメントをご用意。世界遺産リゾート熊野倶楽部で心がはずむ 贅沢な時間と体験を心行くまでお愉しみくださいませ。</p>
                        </div>
                        <a href="../news/news_detail.html"><p><span class="arrow"></span>詳しく見る</p></a>
                    </dd> -->
                </dl>

                <!-- ページネーション -->
                <ul class="Pagination">
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
                </ul>
                </div>

            </div>

        </div>
    </div>



<!------------- FOOTER ------------->
<?php get_footer(); ?>