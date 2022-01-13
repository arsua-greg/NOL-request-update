<?php get_header();

/* Template Name: thanks-tryout */ ?>
	<div class="top other_top posi_r">
		
		<div class="main_wrap">
			<img class="sp t_logo" src="img/top_logo.svg" alt="日本海オセアンリーグ">
			<h1 class="main_ttl en">Entry<span>応募フォーム</span></h1>
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
        <li>応募フォーム</li>
    </ol>

	<div class="contact">
		<div class="w460">
            <h2 class="ttl_en txt_c ttl_en_min"><span>E</span><span>n</span><span>t</span><span>r</span><span>y</span><span class="blank"></span><span>f</span><span>o</span><span>r</span><span>m</span></h2>
			<p class="txt_c">応募完了</p>
			<p class="contact_note fz14">
				この度は日本海オセアンリーグ　審判トライアウトへのご応募をいただき、ありがとうございました。<br>
				応募後の審査状況や選考結果に関する個別の問い合わせには応じませんので、ご了承ください。<br>
				<br>
				トライアウトエントリーに関するお問い合わせについては<br>
				<a class="fwb" href="<?php echo home_url('/'); ?>contact/" style="color:white;">https://no-l.jp/contact/</a>
				より、お問い合わせください。<br>
				数日以内に日本海オセアンリーグ事務局よりメールにてご返答いたします。<br>
				<br>
				<br>
			</p>

			<a href="index.html" class="btn">トップページに戻る</a>
		</div>
	</div>



<?php get_footer(); ?>