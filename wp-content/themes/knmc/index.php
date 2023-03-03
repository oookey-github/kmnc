<?php get_header(); ?>

<body>

    <!-- フィックスメニュー -->
    <?php get_sidebar('flex_menu'); ?>

    <div class="toppage">
        <div class="body_inner">

            <div class="mv">
                <div class="mv_inner">
                    <div class="front_blur"></div>
                    
                    <!-- メインメニュー -->
                    <?php get_sidebar('main_menu'); ?>

                    <div class="mv_front">
                        <div class="logo_white"><img src="<?php bloginfo('template_directory'); ?>/image/logo_white.svg" alt=""></div>
                        <h2 class="front_title">伊勢神宮と<br>熊野古道をつなぐ<br>隠れ家リゾート</h2>
                    </div>
                    <a href="<?php bloginfo('url'); ?>/news/news_list.html" class="mv_news">
                        <h2>お知らせ：</h2>
                        <dl>
                            <dt>2022/11/12</dt>
                            <dd>熊野倶楽部ウェブサイトをリニューアルしました。</dd>
                        </dl>
                    </a>
                </div>
            </div>

            <div class="content_inner">
                <div class="content_section fadein">
                    <div class="banner">

                        <?php
                        query_posts('post_type=top_banner&posts_per_page=1');
                        while (have_posts()) : the_post();
                        ?>

                        <a href="<?php the_field('top_banner_url'); ?>" target="<?php the_field('top_banner_blank'); ?>" class="banner_img">
                            <?php if( get_field('top_banner_pc') ) { ?>
                                <img src="<?php the_field('top_banner_pc'); ?>" alt="<?php the_title(); ?>" class="pc">
                            <?php } ?>
                            <?php if( get_field('top_banner_sp') ) { ?>
                                <img src="<?php the_field('top_banner_sp'); ?>" alt="<?php the_title(); ?>" class="sp">
                            <?php } ?>
                        </a>

                        <?php endwhile; ?>        
                        <?php
                        wp_reset_query();
                        ?>

                    </div>
                </div>

                <div class="content_section cs_mc">
                    <div class="main_content mc_1 fadein">
                        <div class="mc_item_1">
                            <a href="<?php bloginfo('url'); ?>/experience/"><div class="mc_img_1 parallax"><img src="<?php bloginfo('template_directory'); ?>/image/mc_1.png" alt=""></div></a>
                        </div>
                        <div class="mc_text">
                            <div class="vertical_text">
                                <span class="text_line_v"></span>
                                <p class="vertical">理想の日常が心地よい。</p>
                            </div>
                            <h2 class="mc_title">熊野の隠れ家<br class="sp">リゾートで<br>癒しの時間を。</h2>
                            <p>世界遺産リゾート 熊野倶楽部は伊勢から<br class="sp">熊野へむかう路にあり<br>山・海・里に抱かれた熊野の自然に佇む<br class="sp">大人のリゾート。<br><br>峻厳な山々に降り注ぐ雨が大地に染み込み<br>清流として恵みをもたらします。</p>
                            <a href="<?php bloginfo('url'); ?>/experience/" class="circle_btn_top">
                                <img src="<?php bloginfo('template_directory'); ?>/image/circle_btn_b.svg" alt="">
                                <p class="circle_btn_text"><span class="arrow"></span>特別な体験一覧へ</p>
                            </a>
                        </div>
                    </div>
                    <div class="main_content mc_2">
                        <div class="mc_item_2 fadein">
                            <a href="<?php bloginfo('url'); ?>/guest_room/"><div class="mc_img_2 parallax"><img src="<?php bloginfo('template_directory'); ?>/image/mc_2.png" alt=""></div></a>
                        </div>
                        <div class="mc_text fadein">
                            <div class="mc_2_inner">
                                <div class="horiz_text">
                                    <span class="text_line_h"></span>
                                    <p class="">客室はオールスイート</p>
                                </div>
                                <h2 class="mc_title">熊野杉が香る<br class="sp">癒しの客室で<br>上質の寛ぎを。</h2>
                                <p>恵まれた自然を五感で感じ、癒されるよう<br>熊野杉などを用いて造られた客室は、<br class="sp">日常を忘れる<br class="pc">ひとときの癒やし空間</p>
                                <a href="<?php bloginfo('url'); ?>/guest_room/guest_room.html"  class="circle_btn_top">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/circle_btn_b.svg" alt="">
                                    <p class="circle_btn_text"><span class="arrow"></span>客室のご案内</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="main_content mc_3 fadein">
                        <div class="mc_item_3">
                            <a href="<?php bloginfo('url'); ?>/restaurant/"><div class="mc_img_3 parallax"><img src="<?php bloginfo('template_directory'); ?>/image/mc_3.png" alt=""></div></a>
                        </div>
                        <div class="mc_text">
                            <div class="vertical_text">
                                <span class="text_line_v"></span>
                                <p class="vertical">美しご馳走</p>
                            </div>
                            <h2 class="mc_title">自然讃美<br>様式にとらわれない､<br>滋味の探究。</h2>
                            <p>いずれのお食事にも、一品一品に熊野の恵み<br>をふんだんに取り入れ心の感性を呼び覚ます、<br>五味自在の逸品をご提供いたします。</p>
                            <a href="<?php bloginfo('url'); ?>/restaurant/" class="circle_btn_top">
                                <img src="<?php bloginfo('template_directory'); ?>/image/circle_btn_b.svg" alt="">
                                <p class="circle_btn_text"><span class="arrow"></span>お食事一覧へ</p>
                            </a>
                        </div>
                    </div>
                    <div class="main_content mc_2 mc_4">
                        <div class="mc_item_2 fadein">
                            <a href=""><div class="mc_img_4 parallax"><img src="<?php bloginfo('template_directory'); ?>/image/mc_4-1.png" alt=""></div></a>
                        </div>
                        <div class="mc_text fadein">
                            <div class="mc_4_inner">
                                <div class="horiz_text">
                                    <span class="text_line_h"></span>
                                    <p class="">静謐に心洗われる</p>
                                </div>
                                <h2 class="mc_title">天仰ぐ湯処</h2>
                                <p>何も考えず、流れゆく雲を眺め、<br class="sp">かすかに聞こえる<br class="pc">風の音を聴きただひたすら<br class="sp">湯につかるひととき。</p>
                                <a href=""  class="circle_btn_top">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/circle_btn_b.svg" alt="">
                                    <p class="circle_btn_text"><span class="arrow"></span>露天風呂のご紹介</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content_section fadein">
                    <div class="loccitane_banner">
                        <h2 class="bold">Premium <br class="sp">Collaboration<br>Stay Plan</h2>
                        <p>L'OCCITANEと熊野倶楽部の<br class="sp">スペシャルコラボレーションプラン。<br>特別なご滞在をお愉しみください</p>
                        <a href="<?php bloginfo('url'); ?>/PremiumCollaborationStayplan/">
                            <img src="<?php bloginfo('template_directory'); ?>/image/loccitane_banner_pc.png" alt="" class="pc">
                            <img src="<?php bloginfo('template_directory'); ?>/image/loccitane_banner_sp.png" alt="" class="sp">
                        </a>
                    </div>
                </div>

                <div class="content_section fadein">
                    <div class="plan_list">
                        <h2>特別プラン</h2>
                        <ul class="slick">
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/plan_banner_1.png" alt="">
                                    <p>伊勢神宮と熊野古道をつなぐ隠れ家リゾート隠れ家リゾートで癒しの時間を</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/plan_banner_2.png" alt="">
                                    <p>【三重を食す 御食国会席】松阪牛・伊勢海老・山海の幸を堪能 ―美食オールインクルーシブー</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/plan_banner_3.png" alt="">
                                    <p>【秋満喫／みかん狩り】＜ハーフブッフェ＞五感で味わう未体験なご旅行を ー美食オールインクルーシブー</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/plan_banner_4.png" alt="">
                                    <p>【LOCCITANE×世界遺産リゾート熊野倶楽部】ラグジュアリー美食オールインクルーシブステイを堪能（先着100組様限定）</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/plan_banner_5.png" alt="">
                                    <p>【休日は格別の癒しを】＜味覚＞充実の３食付、土地の旬を華やかに味わう ―美食オールインクルーシブ―</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="content_section fadein">   
                    <div class="news">
                        <div class="news_inner">
                            <h2 class="vertical">お知らせ</h2>
                            <dl>

                            <?php
                                if (have_posts()) : query_posts('post_type=news&posts_per_page=999&paged='.$paged);
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
                            <?php wp_reset_query(); ?>

                            </dl>
                        </div>
                        <a href="<?php bloginfo('url'); ?>/news/" class="btn">
                            <span class="arrow"></span>全てのお知らせはこちら
                        </a>
                    </div>
                </div>

                <div class="content_section fadein">
                    <div class="hospitality_list">
                        <h2>潤いの歓待</h2>
                        <ul>
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/hos_1.png" alt="">
                                    <div>
                                        <h2>客室のおもてなし</h2>
                                        <p>五感を愉しませる、<br>客室のおもてなし</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/hos_2.png" alt="">
                                    <div>
                                        <h2>アフタヌーンティー</h2>
                                        <p>熊野の開放感を存分に味わいながら<br>心躍る華やかな時間を</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/hos_3.png" alt="">
                                    <div>
                                        <h2>クラブラウンジ</h2>
                                        <p>星降る夜空とお好きなお酒を愉しむ<br>大人時間をお愉しみいただけます</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/hos_4.png" alt="">
                                    <div>
                                        <h2>湯処のおもてなし</h2>
                                        <p>至福のときを「5つのおもてなし」で<br>演出いたします</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="content_section fadein">
                    <div class="experience_list">
                        <h2>熊野を五感で感じる<br>心揺さぶる体験</h2>
                        <ul class="slick_exp">
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/exp_1.png" alt="">
                                    <p class="txt">熊野の真髄に迫るプレミアムツアー　〈ご宿泊者限定〉<br>丸山千枚田をはじめとした、熊野の見処を巡ります。</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/exp_2.png" alt="">
                                    <p>熊野の真髄に迫るプレミアムツアー　〈ご宿泊者限定〉<br>丸山千枚田をはじめとした、熊野の見処を巡ります。</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/exp_3.png" alt="">
                                    <p>星空鑑賞会<br>見上げれば、満天の星。静寂の中、澄み切った夜空をお愉しみください。</p>
                                </a>
                            </li>
                        </ul>
                    
                        <!-- <div class="text-slider">
                            <p class="txt">
                                熊野の真髄に迫るプレミアムツアー　〈ご宿泊者限定〉<br>丸山千枚田をはじめとした、熊野の見処を巡ります。
                            </p>
                            <p class="txt">
                                熊野の真髄に迫るプレミアムツアー　〈ご宿泊者限定〉<br>丸山千枚田をはじめとした、熊野の見処を巡ります。
                            </p>
                            <p class="txt">
                                星空鑑賞会<br>見上げれば、満天の星。静寂の中、澄み切った夜空をお愉しみください。
                            </p>
                        </div> -->
                    </div>
                </div>

                <div class="content_section fadein">
                    <div class="kumano_circle">
                        <div class="title">
                            <img src="<?php bloginfo('template_directory'); ?>/image/logo_brown.svg" alt="">
                            <h2>熊野観光の<br class="sp">ご案内</h2>
                            <p>人はなぜ熊野に惹かれるのか。<br class="sp">心の故郷が、ここにある</p>
                        </div>
                        <div class="circle_img">
                            <img class="parallax" src="<?php bloginfo('template_directory'); ?>/image/circle.png" alt="">
                        </div>
                        <div>
                            <p>
                                険しい山々を超え詣でる長き道のり、<br>それ自体が修行の道とされました<br><br>
                                見渡す限りの自然に抱かれた<br>熊野の雄大な景色は、<br>今もなお昔の原型をとどめ、<br>訪れる人々の心を惹きつけています
                            </p>
                        </div>
                        <a href="./tourism/tourism.html"  class="circle_btn_top">
                            <img src="<?php bloginfo('template_directory'); ?>/image/circle_btn_b.svg" alt="">
                            <p class="circle_btn_text"><span class="arrow"></span>熊野観光のご案内</p>
                        </a>
                    </div>
                </div>
                
                <div class="content_section fadein">
                    <div class="kumano_banner">
                        <a href="<?php bloginfo('url'); ?>/tourism/tourism.html">
                        <img class="parallax kumano_banner" src="<?php bloginfo('template_directory'); ?>/image/kumano_banner.png" alt="">
                            <div class="inner">
                                <!-- <div class="multiply"></div> -->
                                <div class="left">
                                    <div class="vertical_text">
                                        <span class="text_line_v"></span>
                                        <p class="vertical">熊野の自然に佇む</p>
                                    </div>
                                    <h2 class="vertical">日本書紀に遡る<br><span>創生の歴史</span></h2>
                                </div>
                                <div class="right">
                                    <p>熊野の伝承は<br class="sp">日本書紀の時代まで遡ります<br>花窟神社には神世七代である<br class="sp">伊奘冉尊（いざなみ）、<br>火の神、軻遇突智（かぐつち）が<br class="sp">祀られています</p>
                                    <img src="<?php bloginfo('template_directory'); ?>/image/logo_white.svg" alt="" class="pc">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="content_section fadein">
                    <div class="photo_spot">
                        <h2>熊野倶楽部周辺の<br class="sp">フォトスポット</h2>
                        <ul>
                            <li>
                                <img src="<?php bloginfo('template_directory'); ?>/image/spot_1.png" alt="">
                                <p>日本の棚田百選<br>丸山千枚田の星空</p>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_directory'); ?>/image/spot_2.png" alt="">
                                <p>世界遺産<br>熊野古道</p>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_directory'); ?>/image/spot_3.png" alt="">
                                <p>荒滝</p>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_directory'); ?>/image/spot_4.png" alt="">
                                <p>世界遺産鬼ヶ城<br>の星空</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="content_section fadein">
                    <div class="instagram">
                        <h2>Instagram<br><span>#熊野日和</span></h2>
                        <ul>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/insta_1.png" alt=""></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/insta_2.png" alt=""></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/insta_3.png" alt=""></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/insta_4.png" alt=""></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/insta_5.png" alt=""></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/insta_6.png" alt=""></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/insta_7.png" alt=""></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/insta_8.png" alt=""></li>
                            <li><img src="<?php bloginfo('template_directory'); ?>/image/insta_9.png" alt=""></li>
                        </ul>
                    </div>
                </div>

                <div class="content_section fadein" id="access">
                    <div class="access_map">
                        <h2>アクセスマップ</h2>
                        <div class="googlemap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207.0643937686256!2d136.06071344403577!3d33.86310997980474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f160!3m3!1m2!1s0x6006702b572bec5f%3A0x232f8ea7f5e02382!2z5LiW55WM6YG655Sj44Oq44K-44O844OIIOeGiumHjuWAtualvemDqA!5e0!3m2!1sja!2sjp!4v1676616790772!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <p>
                            世界遺産リゾート熊野倶楽部<br>〒519-4326<br>三重県熊野市久生屋町1430<br><br>
                            TEL : 0597-88-2045<br>FAX : 0597-88-2046<br>MAIL: info_kumanoclub@oyadonet.com
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>





<?php get_footer(); ?>