<?php get_header(); ?>
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
        <li><a href="<?php echo home_url('/'); ?>nol_cd_top/">TOP</a></li>
        <li>求人情報</li>
    </ol>

	<div class="section w560">
		<div class="ttl_bg">
			<div class="ttl_wrap">
				<p class="ttl_en"><span>R</span><span>e</span><span>c</span><span>r</span><span>u</span><span>i</span><span>t</span></p>
				<p>求人情報</p>
			</div>
		</div>
        
        
        <div class="recruitSec01">
            <p class="recruitSec01--Text01">
                日本海オセアンリーグの職員を募集いたします。<br>
                野球が好きな方、熱い想いを持たれる方の応募をお待ちしております。
            </p>
        </div>

        <div class="recruitSec02">
            <ul class="recruitSec02List">
                <li>
                    <a href="<?php echo home_url(); ?>/job/operation/" class="active">
                    運営スタッフ
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/job/local/">
                    現場スタッフ
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="section w1100">
        <ul class="recruitSec03List">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li class="recruitSec03List--Box"  id="<?php the_ID(); ?>">
                <table>
                    <tr>
                        <th>
                        募集職種
                        </th>
                        <td>
                        <h2><?php echo nl2br(get_field('job01')); ?></h2>
                        </td>
                    </tr>
                    <tr>
                        <th>
                        雇用形態
                        </th>
                        <td>
                        <?php echo nl2br(get_field('job02')); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                        仕事内容
                        </th>
                        <td>
                        <?php echo nl2br(get_field('job03')); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                        勤務地
                        </th>
                        <td>
                        <?php echo nl2br(get_field('job04')); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                        勤務時間
                        </th>
                        <td>
                        <?php echo nl2br(get_field('job05')); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                        休日・休暇
                        </th>
                        <td>
                    <?php echo nl2br(get_field('job06')); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                        応募方法
                        </th>
                        <td>
                        <?php echo nl2br(get_field('job07')); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                        備考
                        </th>
                        <td>
                        <?php echo nl2br(get_field('job08')); ?>
                        </td>
                    </tr>
                </table>
                <?php if (!get_field('use_form')): ?>
                    <div class="rexuruitSec03--Btn">
                        <a href="<?php echo home_url(); ?>/apply/?referertitle=<?php echo nl2br(get_field('job01')); ?>">
                            この求人に応募する
                        </a>
                    </div>
                <?php else: ?>
                    <div class="rexuruitSec03--Btn">
                        <?php
                            $form = get_post_meta($post->ID, 'use_form_contents', true);
                            if ($form == '審判応募画面'):
                        ?>
                            <a href="<?php echo home_url(); ?>/umpire_apply">
                        <?php else: ?>
                        <?php endif; ?>
                            この求人に応募する
                        </a>
                    </div>
                <?php endif; ?>
            </li>
            
            <?php endwhile; else:?>
                <li style="width: 100%;text-align: center;">現在募集中の求人はありません。</li>
            <?php endif; ?>
        </ul>
    </div>

<?php get_footer(); ?>