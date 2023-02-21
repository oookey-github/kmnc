<?php get_header(); ?>
<!------------- HEADER ------------->

<body>
    
    <!-- フィックスメニュー -->
    <?php get_sidebar('flex_menu'); ?>

    <div class="newspage newspage_detail">
        <div class="body_inner">

            <header>
                
                <!-- メインメニュー -->
                <?php get_sidebar('main_menu'); ?>

                <div class="nav_link flex">
                    <a href="<?php bloginfo('url'); ?>"><p class="fs12">トップ</p></a>
                    <p>&gt;</p>
                    <a href="<?php bloginfo('url'); ?>/news/"><p class="fs12">お知らせ一覧</p></a>
                    <p>&gt;</p>
                    <a href=""><p class="fs12">【GWを世界遺産リゾート熊野倶楽部で】Special Event のご案内</p></a>
                </div>
            </header>

            <div class="news">
                <div class="title">
                    <h2 class="vertical">お知らせ</h2>
                </div>
                <div>
                    <div class="detail">
                        <div class="detail_title">
                            <p>2022.11.12</p>
                            <h2>【GWを世界遺産リゾート熊野倶楽部で】Special Event のご案内</h2>
                        </div>
                        <div class="detail_inner">
                            <p>世界遺産リゾート熊野倶楽部では年末年始期間中、連日趣向を凝らしたイベント&エンターテイメントをご用意。世界遺産リゾート熊野倶楽部で心がはずむ 贅沢な時間と体験を心行くまでお愉しみくださいませ。
                                <br><br>
                                世界遺産リゾート熊野倶楽部では年末年始期間中、連日趣向を凝らしたイベント&エンターテイメントをご用意。世界遺産リゾート熊野倶楽部で心がはずむ 贅沢な時間と体験を心行くまでお愉しみくださいませ。
                                <br><br>
                                世界遺産リゾート熊野倶楽部では年末年始期間中、連日趣向を凝らしたイベント&エンターテイメントをご用意。世界遺産リゾート熊野倶楽部で心がはずむ 贅沢な時間と体験を心行くまでお愉しみくださいませ。
                            </p>
                        </div>
                    </div>
                    <a href="<?php bloginfo('url'); ?>/news/"><span class="arrow"></span>一覧へ戻る</a>
                </div>
            </div>

        </div>
    </div>

<!------------- FOOTER ------------->
<?php get_footer(); ?>