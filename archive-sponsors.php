<?php get_header(); ?>
	<div class="top other_top posi_r">
		
		<div class="main_wrap">
			<img class="sp t_logo" src="<?php echo get_template_directory_uri(); ?>/img/top_logo.svg" alt="日本海オセアンリーグ">
            <br class="sp"><img class="sp logoUd" src="<?php echo get_template_directory_uri(); ?>/renew/img/logoUd.svg" alt="2022">
			<h1 class="main_ttl en">Sponser & Partner<span>スポンサー＆パートナー</span></h1>
    </div>
		<div id="movie-contents">
			<video class="video01 pc" src="<?php echo get_template_directory_uri(); ?>/video/video_bg.mp4"  autoplay muted loop playsinline></video>
			<video class="video01 sp" src="<?php echo get_template_directory_uri(); ?>/video/sp_video_bg.mp4"  autoplay muted loop playsinline></video>
			<video class="video02 pc" src="<?php echo get_template_directory_uri(); ?>/video/video_bg_02.mp4"  autoplay muted loop playsinline></video>
			<video class="video02 sp" src="<?php echo get_template_directory_uri(); ?>/video/sp_video_bg_02.mp4"  autoplay muted loop playsinline></video>
		</div>
	</div>
	<ol class="bread w1100">
    <li><a href="https://jeengross.sakura.ne.jp/test/nol_cd_top/">TOP</a></li>
    <li>スポンサー＆パートナー</li>
  </ol> 
        
    <div class="section w1100 sponsorsSec">
      <div class="ttl_bg">
        <div class="ttl_wrap">
          <p>
            日本海オセアンリーグを支え、<br>
            応援していただいているスポンサー＆パートナーをご紹介させていただきます。
          </p>
        </div>
      </div>
        
      <ul class="sponsorsList01">    
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = [
        'post_type' => 'sponsors',
        'posts_per_page' => -1,
        'paged' => $paged,
        ];
        $my_query = new WP_Query($args);

        if ($my_query->have_posts()) :
        while ($my_query->have_posts()) : $my_query->the_post();
        ?>

            <?php
              $text_field = get_field('size');
              if ($text_field == 'big'):
              ?>
                      
              <li class="sponsorsList01--Box">
                  <a href="<?php  echo get_field('url'); ?>" style="background-image:url('<?php  the_post_thumbnail_url(); ?>')"></a>
              </li>

            <?php endif; ?> 
          <?php endwhile; else: ?>
          <li style="width: 100%;margin: 50px auto;text-align: center;">Coming soon</li>
          <?php endif;
            wp_reset_postdata();
          ?>   
      </ul> 
      

      <ul class="sponsorsList02">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = [
        'post_type' => 'sponsors',
        'posts_per_page' => -1,
        'paged' => $paged,
        ];
        $my_query = new WP_Query($args);

        if ($my_query->have_posts()) :
        while ($my_query->have_posts()) : $my_query->the_post();
        ?>

          <?php
            $text_field = get_field('size');
            if ($text_field == 'mid'):
            ?>
                    
            <li class="sponsorsList02--Box">
                <a href="<?php  echo get_field('url'); ?>" style="background-image:url('<?php  the_post_thumbnail_url(); ?>')"></a>
            </li>

          <?php
            endif;
            endwhile;
            endif;
            wp_reset_postdata();
          ?>
      </ul>

      <ul class="sponsorsList03">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = [
        'post_type' => 'sponsors',
        'posts_per_page' => -1,
        'paged' => $paged,
        ];
        $my_query = new WP_Query($args);

        if ($my_query->have_posts()) :
        while ($my_query->have_posts()) : $my_query->the_post();
        ?>

          <?php
            $text_field = get_field('size');
            if ($text_field == 'small'):
            ?>
                  
            <li class="sponsorsList03--Box">
                <a href="<?php  echo get_field('url'); ?>" style="background-image:url('<?php  the_post_thumbnail_url(); ?>')"></a>
            </li>

          <?php
            endif;
            endwhile;
            endif;
            wp_reset_postdata();
          ?>
      </ul>
    </div>


<?php get_footer(); ?>