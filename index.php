<?php get_header(); ?>
<div class="top">
    <div class="main_wrap">
        <h1 class="main_ttl">N1honkai OCEAN League <br class="sp">日本海オセアンリーグ</h1>
        <div class="logo_wrap">
            <?php get_template_part('logo'); ?>
        </div>
        <figure class="logo_name"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_name.svg"
                alt="N1honkai OCEAN League 日本海オセアンリーグ"></figure>
        <p class="main_txt pc">求む！ 挑戦者！<br>プロ野球独立リーグ“日本海オセアンリーグ”誕生</p>
        <ul class="team_logo w720 sp_display_f justify-sb f_wrap delay">
            <li class="delayItem fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/img/team03.svg"
                    alt="富山GRNサンダーバーズ"></li>
            <li class="delayItem fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/img/team02.svg"
                    alt="石川ミリオンスターズ"></li>
            <li class="delayItem fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/img/team01.svg"
                    alt="福井ネクサスエレファンツ"></li>
            <li class="delayItem fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/img/team04.svg"
                    alt="滋賀GOブラックス"></li>
        </ul>
        <p class="main_txt sp">求む！ 挑戦者！<br>プロ野球独立リーグ<br>“日本海オセアンリーグ”誕生</p>
    </div>
    <div id="movie-contents">
        <video class="video01 pc" src="<?php echo get_template_directory_uri(); ?>/video/video_bg.mp4" autoplay muted
            loop playsinline></video>
        <video class="video01 sp" src="<?php echo get_template_directory_uri(); ?>/video/sp_video_bg.mp4" autoplay muted
            loop playsinline></video>
        <video class="video02 pc" src="<?php echo get_template_directory_uri(); ?>/video/video_bg_02.mp4" autoplay muted
            loop playsinline></video>
        <video class="video02 sp" src="<?php echo get_template_directory_uri(); ?>/video/sp_video_bg_02.mp4" autoplay
            muted loop playsinline></video>
    </div>
</div>

<div class="sect_topics">
    <div class="sect_topics__container">
        <div class="sect_topics__container--row_1">
            <div class="sect_topics__container--row_1--content">
                <h2>Topics</h2>
                <div class="slider arrows">
                    <?php
                    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                    $args = [
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'meta_query' => [
                            [
                                'key' => 'post_on_topics',
                                'value' => '1',
                                'compare' => 'LIKE',
                            ],
                        ],
                        'paged' => $paged,
                    ];

                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="post_content">
                        <a href="<?php echo the_permalink(); ?>"><span class="link-spanner"></span></a>
                        <div class="img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="title_cont">
                            <p class="ttl"><?php echo get_the_date('Y/m/d'); ?></p>
                            <div class="category">
                                <!-- TAGS -->
                                <?php
                                        $tags = get_the_tags();
                                        if ($tags) :
                                            foreach ($tags as $tag) : ?>
                                <a class="cat" href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                                    title="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a>
                                <?php endforeach; ?>
                                <?php endif; ?>

                                <!-- CATEGORY -->
                                <?php foreach ((get_the_category()) as $cat) {
                                                echo '<a href="'.get_category_link($cat->term_id).'"  class="'.$cat->slug.'">'.$cat->cat_name.'</a>';
                                            } ?>


                            </div>
                        </div>
                        <p class="content">
                            <?php
                                        if (mb_strlen($post->post_title, 'UTF-8') > 32) {
                                            $title = str_replace('\n', '', mb_substr(strip_tags($post->post_title), 0, 32, 'UTF-8'));
                                            echo $title.'……';
                                        } else {
                                            echo str_replace('\n', '', strip_tags($post->post_title));
                                        }
                                    ?>
                        </p>
                        <div class="view_all">
                            <div class="btn">
                                <a href="<?php echo the_permalink(); ?>">
                                    <p>view more</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/arrow_right.svg"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="sect_topics__container--row_2">
            <div class="sect_topics__container--row_2--content">
                <div class="sect_topics__container--row_2--content--title">
                    <h2>News</h2>
                    <div class="view_all">
                        <div class="btn">
                            <a href="<?php echo get_permalink(get_page_by_path('NEWS')); ?>">
                                <p>view all</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/common/arrow_right.svg"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                $args = [
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'paged' => $paged,
                ];

                $the_query = new WP_Query($args);
                ?>

                <?php if ($the_query->have_posts()) : ?>

                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="news_cont click">
                    <a href="<?php echo the_permalink(); ?>"><span class="link-spanner"></span></a>
                    <div class="news_cont__title_cont">
                        <p class="ttl"><?php echo get_the_date('Y/m/d'); ?></p>
                        <div class="category">
                            <!-- TAGS -->
                            <?php
                                    $tags = get_the_tags();
                                    if ($tags) :
                                        foreach ($tags as $tag) : ?>
                            <a class="cat" href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                                title="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a>
                            <?php endforeach; ?>
                            <?php endif; ?>

                            <!-- CATEGORY -->
                            <?php foreach ((get_the_category()) as $cat) {
                                            echo '<a href="'.get_category_link($cat->term_id).'"  class="'.$cat->slug.'" '.esc_attr($cat->name).'">'.$cat->cat_name.'</a>';
                                        } ?>
                        </div>
                    </div>
                    <p class="content">
                        <?php
                                    if (mb_strlen($post->post_title, 'UTF-8') > 32) {
                                        $title = str_replace('\n', '', mb_substr(strip_tags($post->post_title), 0, 32, 'UTF-8'));
                                        echo $title.'……';
                                    } else {
                                        echo str_replace('\n', '', strip_tags($post->post_title));
                                    }
                                ?>
                    </p>
                    <div class="permalink">
                        <a href="<?php the_permalink(); ?>">
                            <p class="detail">detail</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/common/arrow_right.svg" alt="">
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!--
	<div class="message section w560">
		<div class="ttl_bg">
			<div class="ttl_wrap">
				<h2 class="ttl_en sp_ttl_en_block"><span>U</span><span>m</span><span>p</span><span>i</span><span>r</span><span>e</span><span style="margin:0 0 0 1rem;" class="sp_block"></span><span>T</span><span>r</span><span>y</span><span>o</span><span>u</span><span>t</span></h2>
				<p>審判トライアウト</p>
			</div>
		</div>
		<p class="section_txt  padding_b40">
			野球が大好きで、野球に携わった仕事をしたいと考えている皆様、日本海オセアンリーグで審判員を目指してみませんか？<br>
			日本海オセアンリーグは、経験者未経験者問わず、審判員の募集を行っております。NPBの審判員を目指している方や、現時点で審判をしておりさらにスキルを磨きたい方、これから審判員になりたいと思っている方のご応募をお待ちしております。
		</p>
		<a href="<?php echo home_url('/'); ?>tryout_umpire/" class="btn"><p>審判トライアウト応募ページ<span class="arrow"></span></p></a>
	</div>
	-->

<div class="schedule section">
    <div class="ttl_bg">
        <div class="ttl_wrap">
            <h2 class="ttl_en">
                <span>S</span><span>c</span><span>h</span><span>e</span><span>d</span><span>u</span><span>l</span><span>e</span>
            </h2>
            <p>今後のスケジュール</p>
        </div>
    </div>
    <div class="schedule_wrap posi_r setAnime w600">
        <div class="date_wrap min_date_wrap">
            <p class="en date">
                9/<span>16</span>
            </p>
            <p class="date_txt fz20 fwb">リーグ名正式発表</p>
        </div>
        <div class="date_wrap min_date_wrap">
            <p class="en date">
                11/<span>3</span>
            </p>
            <p class="date_txt fz20 fwb">トライアウト</p>
        </div>
        <div class="date_wrap min_date_wrap">
            <p class="en date">
                11/<span>4</span>
            </p>
            <p class="date_txt fz20 fwb">ドラフト会議</p>
        </div>
        <div class="date_wrap min_date_wrap">
            <p class="en date">
                11/<span>12</span>
            </p>
            <p class="date_txt fz20 fwb">審判トライアウト<br>応募受付開始</p>
        </div>
        <div class="date_wrap min_date_wrap border_none">
            <p class="en date year">
                2022<span>年</span>
            </p>
            <p class="date_txt fz20 fwb">春開幕</p>
        </div>
        <!--<a href="<?php echo home_url('/'); ?>tryout_umpire" class="btn"><p>審判トライアウト応募ページ<span class="arrow"></span></p></a>-->
    </div>
</div>

<!--
	<div class="thoughts section w785">
		<div class="ttl_bg">
			<div class="ttl_wrap">
				<h2 class="ttl_en"><span>P</span><span>r</span><span>o</span><span>f</span><span>i</span><span>l</span><span>e</span></h2>
				<p>NOLについて</p>
			</div>
		</div>
		<div class="display_f justify-sb thoughts_wrap">
			<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="日本海オセアンリーグ">
			<p class="section_txt">
				NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。NOLについてご紹介します。
			</p>
			<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="日本海オセアンリーグ">
		</div>
	</div>
	-->

<div class="hr_arrow sp"></div>

<div class="section w1100">
    <div class="ttl_bg">
        <div class="ttl_wrap">
            <h2 class="ttl_en"><span>T</span><span>e</span><span>a</span><span>m</span><span>s</span></h2>
            <p>NOLに所属する球団について</p>
        </div>
    </div>
    <ul class="teams sp_display_f justify-sb f_wrap">
        <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/img/team03.svg" alt="富山GRNサンダーバーズ"></figure>
            <h3>富山GRNサンダーバーズ<span>Toyama GRN Thunderbirds</span></h3>
            <p class="foundation">設立　平成18年11月2日</p>
            <a href="https://tbirds.jp/" class="btn" target="_blank">
                <p>https://tbirds.jp/<img class="icon_link"
                        src="<?php echo get_template_directory_uri(); ?>/img/icon_link.svg"></p>
            </a>
        </li>
        <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/img/team02.svg" alt="石川ミリオンスターズ"></figure>
            <h3>石川ミリオンスターズ<span>Ishikawa Million Stars</span></h3>
            <p class="foundation">設立　平成18年10月11日</p>
            <a href="http://www.m-stars.jp/" class="btn" target="_blank">
                <p>http://www.m-stars.jp/<img class="icon_link"
                        src="<?php echo get_template_directory_uri(); ?>/img/icon_link.svg"></p>
            </a>
        </li>
        <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/img/team01.svg" alt="福井ネクサスエレファンツ"></figure>
            <h3>福井ネクサスエレファンツ<span>FUKUI NEXUS ELEPHANTS</span></h3>
            <p class="foundation">設立　令和3年10月25日</p>
            <a href="https://f-ne.com/" class="btn" target="_blank">
                <p>https://f-ne.com/<img class="icon_link"
                        src="<?php echo get_template_directory_uri(); ?>/img/icon_link.svg"></p>
            </a>
        </li>
        <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/img/team04_black.svg" alt="滋賀GOブラックス">
            </figure>
            <h3>滋賀GOブラックス<span>SHIGA GO BLACKS</span></h3>
            <p class="foundation">設立　平成27年12月21日</p>
            <a href="https://ocean-shiga.com/" class="btn" target="_blank">
                <p>https://ocean-shiga.com/<img class="icon_link"
                        src="<?php echo get_template_directory_uri(); ?>/img/icon_link.svg"></p>
            </a>
        </li>
    </ul>
</div>

<div class="hr_arrow sp"></div>

<div class="section padding_rl30 padding_b120">
    <div class="ttl_bg">
        <div class="ttl_wrap">
            <h2 class="ttl_en">
                <span>S</span><span>p</span><span>o</span><span>n</span><span>s</span><span>o</span><span>r</span><br
                    class="sp"><span>&</span><br
                    class="sp"><span>P</span><span>a</span><span>r</span><span>t</span><span>n</span><span>e</span><span>r</span>
            </h2>
            <p>スポンサー＆パートナー</p>
        </div>
    </div>
    <div class="setAnime w600">
        <p class="padding_b40">日本海オセアンリーグの運営を支え、応援していただいている方々をご紹介させていただきます。</p>
        <a href="<?php echo home_url('/'); ?>sponsors/" class="btn">
            <p>スポンサー＆パートナー紹介<span class="arrow"></span></p>
        </a>
    </div>
</div>

<div class="hr_arrow sp"></div>

<div class="section margin_b170 padding_rl30">
    <div class="ttl_bg">
        <div class="ttl_wrap">
            <h2 class="ttl_en">
                <span>R</span><span>e</span><span>c</span><span>r</span><span>u</span><span>i</span><span>t</span>
            </h2>
            <p>採用情報</p>
        </div>
    </div>
    <div class="setAnime w600">
        <p class="padding_b40">NOLは、正職員を募集します。何事にも前向きで責任感のある、野球好き、スポーツ好きな方のご応募をお待ちしております。</p>
        <a href="<?php echo home_url('/'); ?>job/operation/" class="btn">
            <p>採用情報ページ<span class="arrow"></span></p>
        </a>
    </div>
</div>



</main>
<?php get_footer(); ?>