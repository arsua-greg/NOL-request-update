<?php get_header();

/* Template Name: news Page */ ?>
	<div class="top other_top posi_r">
		<div class="main_wrap">
			<img class="sp t_logo" src="<?php echo get_template_directory_uri(); ?>/img/top_logo.svg" alt="日本海オセアンリーグ">
            <br class="sp"><img class="sp logoUd" src="<?php echo get_template_directory_uri(); ?>/renew/img/logoUd.svg" alt="2022">
			<h1 class="main_ttl en">Apply<span>応募画面</span></h1>
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

	<div class="message section w560">
    <div class="appltSec01">
			<p class="applySec01--Text01">
				下記フォームより必要事項を記入し、注意事項・プライバシーポリシーをよく読み、同意の上応募してください。
			</p>
			<div class="applySec01--Text02">
				<a href="<?php echo home_url('/'); ?>privacypolicy/" target="_blank">
                    プライバシーポリシー
                </a>
			</div>
		</div>
    </div>

	<div class="bg_gray02 triangle posi_r">
		<div class="section w500">
            <?php while (have_posts()) : the_post();
            the_content();
            endwhile; ?>
		</div>
	</div>

<script>
jQuery(function($){
 $("select option:nth-child(1)").empty();
    
let parent = $("input.wpcf7c-force-hide").parent();
$(parent).hide();
    
    
});

document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = '<?php echo home_url(); ?>/complate/';
}, false );
    
    
    
</script>

<?php get_footer(); ?>