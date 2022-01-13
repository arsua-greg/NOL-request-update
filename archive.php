<?php get_header(); ?>
	<div class="top other_top posi_r">
		
		<div class="main_wrap">
			<img class="sp t_logo" src="<?php echo get_template_directory_uri(); ?>/img/top_logo.svg" alt="日本海オセアンリーグ">
			<h1 class="main_ttl en">Latest News<span>新着情報</span></h1>
        </div>
		<div id="movie-contents">
			<video class="video01 pc" src="<?php echo get_template_directory_uri(); ?>/video/video_bg.mp4"  autoplay muted loop playsinline></video>
			<video class="video01 sp" src="<?php echo get_template_directory_uri(); ?>/video/sp_video_bg.mp4"  autoplay muted loop playsinline></video>
			<video class="video02 pc" src="<?php echo get_template_directory_uri(); ?>/video/video_bg_02.mp4"  autoplay muted loop playsinline></video>
			<video class="video02 sp" src="<?php echo get_template_directory_uri(); ?>/video/sp_video_bg_02.mp4"  autoplay muted loop playsinline></video>
		</div>
	</div>
	<ol class="bread w1100">
        <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
        <li>新着情報</li>
    </ol>
        
    <div class="sect_news">
        <div class="sect_news__container">

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
            <div class="post_content--details">
                <div class="news_content">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="news_content__item">
                                <div class="news_content__item--cont">
                                    <a href="<?php echo the_permalink(); ?>"><span class="link-spanner"></span></a>
                                    <div class="title">
                                        <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>

                                        <!-- GET POST TAG -->
                                        <div class="tag_div">
                                            <?php
                                            $tags = get_the_tags();
                                            if ($tags) :
                                                foreach ($tags as $tag) : ?>
                                                    <a class="tag" href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" title="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                        <!-- END POST TAG -->

                                        <!-- GET CATEGORY NAME -->
                                        <?php foreach ((get_the_category()) as $cat) {
                                                    echo '<a href="'.get_category_link($cat->term_id).'"  class="'.$cat->slug.'" '.esc_attr($cat->name).'">'.$cat->cat_name.'</a>';
                                                } ?>
                                        <!-- END GET CATEGORY -->
                                    </div>
                                    <h2 class="text">
                                        <?php the_title(); ?>
                                    </h2>
                                    <div class="permalink">
                                        <a href="<?php echo get_permalink(); ?>">
                                            <p>detail</p>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/common/arrow_right_b.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <div class="pagination">
                            <?php echo easy_wp_pagenavigation(); ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>