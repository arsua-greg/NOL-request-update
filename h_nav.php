	<div class="pc_gnav_wrap display_f pc">
		<a class="h_logo" href="https://no-l.jp/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/h_logo.svg" alt="日本海オセアンリーグ"></a>
	
		<?php
            if (!is_home() && !is_front_page()) : ?>
				<nav class="pc_gnav">
					<ul class="display_f">
						<li><a href="<?php echo home_url('/'); ?>news">Latest news<span>新着情報</span></a></li>
						<li><a href="<?php echo home_url('/'); ?>job/operation/">Recruit<span>求人情報</span></a></li>
						<li><a href="<?php echo home_url('/'); ?>sponsors/">Sponsors<span>スポンサー紹介</span></a></li>
						<li><a href="<?php echo home_url('/'); ?>company/">Company<span>会社情報</span></a></li>
						<li><a href="<?php echo home_url('/'); ?>contact">Contact<span>お問い合わせ</span></a></li>
					</ul>
				</nav>
		<?php endif; ?>

		<!--
		<div class="tryout_icon">
			<a href="<?php echo home_url('/'); ?>tryout_umpire/">
				<img src="<?php echo get_template_directory_uri(); ?>/img/tryout/tryout.svg" alt="日本海オセアンリーグ トライアウト">
			</a>
		</div>
			-->
	</div>

	<div class="sp_gnav_wrap sp">
		<div id="navArea" class="front_nav">
			<nav class="pc_gnav posi_r">
				<div class="sp_gnav_inner posi_a">
					<a class="h_logo" href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/h_logo.svg" alt="日本海オセアンリーグ"></a>
					<ul class="sp_display_f f_wrap justify-c">
						<li><a href="<?php echo home_url('/'); ?>news">Latest news<span>新着情報</span></a></li>
						<li><a href="<?php echo home_url('/'); ?>job/operation/">Recruit<span>求人情報</span></a></li>
						<li><a href="<?php echo home_url('/'); ?>sponsors/">Sponsors<span>スポンサー紹介</span></a></li>
						<li><a href="<?php echo home_url('/'); ?>company/">Company<span>会社情報</span></a></li>
						<li><a href="<?php echo home_url('/'); ?>contact">Contact<span>お問い合わせ</span></a></li>
					</ul>
				</div>
			</nav>
            <div class="toggle_btn">
                <span></span>
                <span></span>
            </div>
		
			<!--<div id="mask"></div>-->
		</div>
		<!--
		<div class="h_ico_wrap">
			<a href="https://twitter.com/NOL_indyball" target="_blank"><svg class="twitter" data-name="Logo — FIXED" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400"><path class="cls-2" d="M153.62,301.59c94.34,0,145.94-78.16,145.94-145.94,0-2.22,0-4.43-.15-6.63A104.36,104.36,0,0,0,325,122.47a102.38,102.38,0,0,1-29.46,8.07,51.47,51.47,0,0,0,22.55-28.37,102.79,102.79,0,0,1-32.57,12.45,51.34,51.34,0,0,0-87.41,46.78A145.62,145.62,0,0,1,92.4,107.81a51.33,51.33,0,0,0,15.88,68.47A50.91,50.91,0,0,1,85,169.86c0,.21,0,.43,0,.65a51.31,51.31,0,0,0,41.15,50.28,51.21,51.21,0,0,1-23.16.88,51.35,51.35,0,0,0,47.92,35.62,102.92,102.92,0,0,1-63.7,22A104.41,104.41,0,0,1,75,278.55a145.21,145.21,0,0,0,78.62,23"/></svg></a>
		</div>
		<div class="tryout_icon">
			<a href="<?php echo home_url('/'); ?>tryout_umpire/">
				<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/tryout/tryout.svg" alt="日本海オセアンリーグ トライアウト"> <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/tryout/sp_tryout.svg" alt="日本海オセアンリーグ トライアウト">
			</a>
		</div>
		-->
	</div>