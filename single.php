<?php get_header();

/* Template Name: Single Page */ ?>
<div class="top other_top posi_r">

    <div class="main_wrap">
        <img class="sp t_logo" src="<?php echo get_template_directory_uri(); ?>/img/top_logo.svg" alt="日本海オセアンリーグ">
        <img class="sp t_2020" src="<?php echo get_template_directory_uri();?>/img/logo_name.svg" alt="">
        <p class="main_ttl en">News</p>
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
<div id="news_nav" class="news_nav-toggle">
    <div class="nav_single sp">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri();?>/img/common/single_logo.svg" alt="">
        </div>
        <div class="news_toggle_btn">
            <span></span>
            <span></span>
        </div>
        <div class="tryout_icon">
            <a href="<?php echo home_url('/'); ?>tryout_umpire/">
                <img src="<?php echo get_template_directory_uri();?>/img/common/try-out-icon.svg" alt="">
            </a>
        </div>
    </div>
    <nav class="pc_gnav posi_r">
        <div class="sp_gnav_inner posi_a">
            <a class="h_logo" href="<?php echo home_url('/'); ?>"><img
                    src="<?php echo get_template_directory_uri(); ?>/img/common/h_logo.svg" alt="日本海オセアンリーグ"></a>
            <ul class="sp_display_f f_wrap justify-c">
                <li><a href="<?php echo home_url('/'); ?>news">Latest news<span>新着情報</span></a></li>
                <li><a href="<?php echo home_url('/'); ?>company/">Company<span>会社情報</span></a></li>
                <li><a href="<?php echo home_url('/'); ?>sponsors/">Sponsors<span>スポンサー紹介</span></a></li>
                <li><a href="<?php echo home_url('/'); ?>job/operation/">Recruit<span>求人情報</span></a></li>
            </ul>
        </div>
    </nav>
</div>

<ol class="bread w1100">
    <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
    <li><a href="<?php echo get_permalink(get_page_by_path('NEWS')); ?>">新着情報</a></li>
    <li><?php the_title(); ?></li>
</ol>
<div class="sect_news">
    <div class="sect_news__container">
        <div class="sect_news__container--pc">
            <?php dynamic_sidebar('blog-category'); ?>

            <div class="sect_news__container--categories">
                <?php
                    $tags = get_tags();
                    if ($tags) :
                        foreach ($tags as $tag) : ?>
                <div class="items">
                    <?php
                                echo '<a href="'.get_tag_link($tag->term_id).'" rel="tag">'.$tag->name.'  </a>';
                                ?>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="post_details">
            <div class="line"></div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post_content">
                <div class="post_content--details">
                    <div class="category_image">
                        <?php
                                $term = false;
                                $terms = get_the_terms($post->ID, 'category');
                                // $terms is an array of term object
                                // use the first term found
                                if ($terms) {
                                    $term = $terms[0];
                                    if ($term->child) {
                                        // term is not at the top level
                                        $ancestors = get_ancestors($term_taxonomy, 'category', 'taxonomy');
                                        $top_term_id = array_pop($ancestors);
                                        $term = get_term($top_term_id, 'category', 'taxonomy');
                                    }
                                }
                                if ($term) {
                                    echo "<img src='".get_field('cat_image', $term)."'/>";
                                }
                                ?>
                    </div>
                    <div class="post_ttl">
                        <p class="sing_date"><?php echo get_the_date('Y/m/d'); ?></p>
                        <div class="tags">
                            <div class="tag_div">
                                <?php
                                            $tags = get_the_tags();
                                            if ($tags) :
                                                foreach ($tags as $tag) : ?>
                                <a class="tag" href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                                    title="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <?php foreach ((get_the_category()) as $cat) {
                                                    echo '<a href="'.get_category_link($cat->term_id).'"  class="'.$cat->slug.'" '.esc_attr($cat->name).'">'.$cat->cat_name.'</a>';
                                                } ?>
                        </div>
                    </div>
                    <h1 class="sing_ttl"><?php the_title(); ?></h1>
                </div>
                <div class="a-post-img-cont">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="post_content--details">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; ?>
            <div class="line"></div>
            <div class="p-pagination">
                <div class="p-pagination-width post-left post-pad-left">
                    <?php previous_post_link('%link', '<svg xmlns="http://www.w3.org/2000/svg" width="15px" viewBox="0 0 15 5.77"><defs><style>.cls-1{fill:none;stroke:#000;stroke-miterlimit:10;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" x1="15" y1="2.89" x2="5" y2="2.89"/><polygon points="0 2.89 5 5.77 5 0 0 2.89"/></g></g></svg> prev'); ?>
                </div>

                <div class="p-pagination-width post-right post-pad-right">
                    <?php next_post_link('%link', 'next <svg xmlns="http://www.w3.org/2000/svg" width="15px" viewBox="0 0 15 5.77"><defs><style>.cls-1{fill:none;stroke:#000;stroke-miterlimit:10;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" y1="2.89" x2="10" y2="2.89"/><polygon points="15 2.89 10 0 10 5.77 15 2.89"/></g></g></svg>'); ?>
                </div>
            </div>
            <a class="article_back" href="<?php echo get_permalink(get_page_by_path('NEWS')); ?>">記事一覧に戻る</a>

            <?php else : endif; ?>
        </div>
        <div class="sect_news__container--sp">
            <?php dynamic_sidebar('blog-category'); ?>
            <div class="sect_news__container--categories">
                <?php
                    $tags = get_tags();
                    if ($tags) :
                        foreach ($tags as $tag) : ?>
                <div class="items">
                    <?php
                                echo '<a href="'.get_tag_link($tag->term_id).'" rel="tag">'.$tag->name.'  </a>';
                                ?>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>