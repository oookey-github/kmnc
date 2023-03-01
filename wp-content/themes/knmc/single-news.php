<?php get_header(); ?>
<!------------- HEADER ------------->

<body id="top">
    
    <!-- フィックスメニュー -->
    <?php get_sidebar('flex_menu'); ?>

    <div class="newspage newspage_detail">
        <div class="body_inner">

            <header>
                
                <!-- メインメニュー -->
                <?php get_sidebar('main_menu'); ?>

                <div class="pc">
                    <div class="nav_link flex">
                        <a href="<?php bloginfo('url'); ?>"><p class="fs12">トップ</p></a>
                        <p>&gt;</p>
                        <a href="<?php bloginfo('url'); ?>/news/"><p class="fs12">お知らせ一覧</p></a>
                        <p>&gt;</p>
                        <p class="fs12"><?php the_title(); ?></p>
                    </div>
                </div>
            </header>

            <div class="news">
                <div class="title">
                    <h2 class="vertical">お知らせ</h2>
                </div>
                <div>
                    <div class="detail">
                        <div class="detail_title">
                            <p><?php the_time('Y.m.d'); ?></p>
                            <h2><?php the_title(); ?></h2>
                        </div>

                        <div class="detail_inner">
                            <?php if( get_field('news_info') ) { ?>
								<p class="news_info"><?php the_field('news_info'); ?></p>
							<?php } ?>

                            <?php if(have_rows('news_inner')): ?>
								<?php while(have_rows('news_inner')): the_row(); ?>

                                <?php if( get_sub_field('news_subtitle') ) { ?>
                                    <h4 class="news_subtitle"><?php the_sub_field('news_subtitle'); ?></h4>
                                <?php } ?>

                                <?php if( get_sub_field('news_img') ) { ?>
                                    <div class="news_img">
                                        <img src="<?php the_sub_field('news_img'); ?>">
                                        <a href="<?php the_sub_field('news_img'); ?>" data-lightbox="img" data-title="<?php the_sub_field('news_img_info'); ?>" class="news_img_size">
                                            <p>画像を拡大</p>
                                        </a>
                                    </div>
                                <?php } ?>

                                <?php if( get_sub_field('news_detail') ) { ?>
                                    <p class="news_detail"><?php the_sub_field('news_detail'); ?></p>
                                <?php } ?>

                                <?php endwhile; ?>
							<?php endif; ?>
                        </div>
                    </div>
                    <a href="<?php bloginfo('url'); ?>/news/"><span class="arrow"></span>一覧へ戻る</a>
                </div>
            </div>

        </div>
    </div>

<!------------- FOOTER ------------->
<?php get_footer(); ?>