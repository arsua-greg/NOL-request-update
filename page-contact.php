<?php get_header();

/* Template Name: お問い合わせ */ ?>
	<div class="top other_top posi_r">
		
		<div class="main_wrap">
			<img class="sp t_logo" src="<?php echo get_template_directory_uri(); ?>/img/top_logo.svg" alt="日本海オセアンリーグ">
			<h1 class="main_ttl en">Contact<span>お問い合わせ</span></h1>
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
        <li>お問い合わせ</li>
    </ol>
	<div class="contact section w560">
		<div class="w460">
			<p class="contact_note">
				※メールアドレスは正しくご入力下さい<br>
				※項目は全て必須項目ですので、必ず入力して下さい。
			</p>

			<?php echo do_shortcode('[contact-form-7 id="5" title="コンタクトフォーム 1"]'); ?>

		</div>
	</div>

<?php get_footer(); ?>