<?php get_header();

/* Template Name: thanks-recruit */ ?>
	<div class="top other_top posi_r">
		
		<div class="main_wrap">
			<img class="sp t_logo" src="<?php echo get_template_directory_uri(); ?>/img/top_logo.svg" alt="日本海オセアンリーグ">
            <br class="sp"><img class="sp logoUd" src="<?php echo get_template_directory_uri(); ?>/renew/img/logoUd.svg" alt="2022">
			<h1 class="main_ttl en">Recruit<span>求人情報</span></h1>
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
        <li><a href="<?php echo home_url('/'); ?>job/operation/">求人情報</a></li>
        <li>応募画面</li>
    </ol>

	<div class="contact">
		<div class="w460">
			<h2 class="ttl_en txt_c ttl_en_min"><span>A</span><span>p</span><span>p</span><span>l</span><span>y</span></h2>
			<p class="txt_c">応募完了</p>
			<p class="contact_note fz14">
				この度は日本海オセアンリーグ　求人募集へのご応募をいただき、ありがとうございました。<br>
                １週間以内に返信が無い場合は、お手数ですが下記にてお問合せ下さい。
				<a class="fwb" href="<?php echo home_url('/'); ?>contact/" style="color:white;">https://no-l.jp/contact/</a>
				数日以内に日本海オセアンリーグ事務局よりメールにてご返答いたします。<br>
				<br>
				<br>
			</p>

			<a href="index.html" class="btn">トップページに戻る</a>
		</div>
	</div>



<?php get_footer(); ?>