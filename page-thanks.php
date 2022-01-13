<?php get_header();

/* Template Name: thanks */ ?>
	<div class="top other_top posi_r">
		
		<div class="main_wrap">
			<img class="sp t_logo" src="img/top_logo.svg" alt="日本海オセアンリーグ">
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

	<div class="contact">
		<div class="w460">
            <h2 class="ttl_en txt_c"><span>c</span><span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span></h2>
			<p class="txt_c">送信完了</p>
			<p class="contact_note">
				お問い合わせありがとうございました。<br>
				お問い合わせを確認次第、折り返し担当者から返信が行きますので、しばらくお待ちください。<br>
				<br>
				<br>
			</p>

			<a href="<?php echo home_url('/'); ?>" class="btn">トップページに戻る</a>
		</div>
	</div>



<?php get_footer(); ?>