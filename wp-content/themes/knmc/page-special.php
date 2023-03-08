<?php
/**
* Template Name: 特集-星空鑑賞会
* Template Post Type: special
*/
get_header(); ?>
<!------------- HEADER ------------->

<body id="top">

    <!-- フィックスメニュー -->
    <?php get_sidebar('flex_menu'); ?>

    <div class="stargazing">
        <div class="body_inner">
            <header>
                <!-- メインメニュー -->
                <?php get_sidebar('main_menu'); ?>

                <div class="pc">
                    <div class="nav_link flex">
                        <a href="<?php bloginfo('url'); ?>">"><p class="fs12">トップ</p></a>
                        <p>&gt;</p>
                        <a href=""><p class="fs12">星空鑑賞会</p></a>
                    </div>
                </div>
            </header>
            
            <div class="content_inner fv_fadein">
                <div class="mc_text page_title">
                    <div class="horiz_text horiz_text_title">
                        <span class="text_line_h"></span>
                        <p class="">星空鑑賞会</p>
                    </div>
                    <h2 class="mc_title mc_page_title">Starry Sky Viewing</h2>
                </div>
            </div>

            <div class="star_banner fv_fadein">
            <div class="star_banner_bg parallax"><img src="<?php bloginfo('template_directory'); ?>/image/stargazing_banner.png" alt=""></div>
                <div class="inner">
                    <img src="<?php bloginfo('template_directory'); ?>/image/stargazing_mv_text.svg" alt="">
                </div>
            </div>

            <div class="text_c fadein">
                <p>見上げれば、満天の星<br>静寂の中、澄み切った夜空に星々の瞬きを<br>バータイムとともにお愉しみください　
                    <br>一年を通し、その時期の一番の見どころを<br>星空案内人がご案内いたします
                    <br> 特別な旅のひとときをお愉しみください</p>
            </div>

            <div class="section fadein">
                <div class="title">
                    <h2>星空鑑賞会</h2>
                </div>
                <div class="flex">
                    <div><img src="<?php bloginfo('template_directory'); ?>/image/stargazing_1.png" alt=""></div>
                    <div class="">
                        <p class="detail">
                            ※夜のバータイムに星空と共に贅沢なひとときをお愉しみください<br>※星空観察に最適な天体望遠鏡Vixenを使用いたします
                            <br>※星空鑑賞会は、天候に合わせて開催させていただきます。<br>天候が優れない場合等、鑑賞会が中止となる場合がございます<br>ご了承くださいませ
                        </p>
                        <p>
                            会場　ラウンジバー横テラス<br>費用　無料<br>時間　20:00-22:00
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="section fadein">
                <div class="title">
                    <h2>熊野の星空<br>観光スポット</h2>
                </div>
                <div class="photo_spot">
                    <ul>
                        <li>
                            <img src="<?php bloginfo('template_directory'); ?>/image/stargazing_2-1.png" alt="">
                            <h2>世界遺産　鬼ヶ城</h2>
                            <p>ホテルより車で15分</p>
                        </li>
                        <li>
                            <img src="<?php bloginfo('template_directory'); ?>/image/stargazing_2-2.png" alt="">
                            <h2>世界遺産　獅子岩</h2>
                            <p>ホテルより車で10分</p>
                        </li>
                        <li>
                            <img src="<?php bloginfo('template_directory'); ?>/image/stargazing_2-3.png" alt="">
                            <h2>日本の棚田百選 丸山千枚田</h2>
                            <p>ホテルより車で40分</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="section fadein">
                <div class="title">
                    <h2>星空撮影</h2>
                </div>
                <div class="text_c">
                    <p>紀伊山地の山々に周りを囲まれる熊野は、<br>星空鑑賞や撮影を行うのにとても<br class="sp">適した場所です。
                        <br>四季おりおりの星空を撮影・鑑賞するのに<br class="sp">必要なアイテムに<br class="pc">つきましては<br class="sp">下記リンクページをご参考ください。</p>
                </div>
                <a href="">
                    <div class="star_photo_banner">
                        <h2><span>澄み切った夜空で繰り広げられる星の瞬き…</span>
                            <br>｢世界遺産のまち」熊野で<br class="sp">星空鑑賞・撮影！</h2>
                        <p><span class="arrow"></span>詳しくはこちら</p>
                    </div>
                </a>
            </div>

        </div>
    </div>






<!------------- FOOTER ------------->
<?php get_footer(); ?>