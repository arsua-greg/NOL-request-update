<?php get_header(); ?>

    <style>
        .panel{
            display:none;
        }
        .panel.is-show{
            display:block;
        }
    </style>  

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
                日本海オセアンリーグの職員を募集いたします。<br>野球が好きな方、熱い想いを持たれる方の応募をお待ちしております。
            </p>
        </div>

        <div class="recruitSec02">
            <ul class="recruitSec02List">
                <li>
                    <a href="javascript:void(0);" class="tab active">
                    運営スタッフ
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="tab">
                    現場スタッフ
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="section w1100 panel is-show">
        <ul class="recruitSec03List">
            <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = [
                'post_type' => 'recruit',
                'posts_per_page' => -1,
                'paged' => $paged,
                ];
                $my_query = new WP_Query($args);

                if ($my_query->have_posts()) :
                while ($my_query->have_posts()) : $my_query->the_post();

                if ($terms = get_the_terms($post->ID, 'job')) {
                    foreach ($terms as $term) {
                        $term_name = $term->name;
                    }
                }
                if ($term_name == '運営スタッフ'):
            ?>
        
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
            
            <?php endif; ?> 
            <?php endwhile; else: ?>
                <li style="width: 100%;text-align: center;">現在募集中の求人はありません。</li>
            <?php endif;
                wp_reset_postdata();
            ?>

        </ul>
    </div>

    <div class="section w1100 panel">
        <ul class="recruitSec03List">
            <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = [
                'post_type' => 'recruit',
                'posts_per_page' => -1,
                'paged' => $paged,
                ];
                $my_query = new WP_Query($args);

                if ($my_query->have_posts()) :
                while ($my_query->have_posts()) : $my_query->the_post();

                if ($terms = get_the_terms($post->ID, 'job')) {
                    foreach ($terms as $term) {
                        $term_name = $term->name;
                    }
                }
                if ($term_name == '現場スタッフ'):
            ?>
            
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
            

    
            <?php endif; ?> 
            <?php endwhile; else: ?>
                <li style="width: 100%;text-align: center;">現在募集中の求人はありません。</li>
            <?php endif;
                wp_reset_postdata();
            ?>

        </ul>
    </div>


<script>
    document.addEventListener('DOMContentLoaded', function(){
	// タブに対してクリックイベントを適用
	const tabs = document.getElementsByClassName('tab');
	for(let i = 0; i < tabs.length; i++) {
		tabs[i].addEventListener('click', tabSwitch, false);
	}

	// タブをクリックすると実行する関数
	function tabSwitch(){
		// タブのclassの値を変更
		document.getElementsByClassName('active')[0].classList.remove('active');
		this.classList.add('active');
		// コンテンツのclassの値を変更
		document.getElementsByClassName('is-show')[0].classList.remove('is-show');
		const arrayTabs = Array.prototype.slice.call(tabs);
		const index = arrayTabs.indexOf(this);
		document.getElementsByClassName('panel')[index].classList.add('is-show');
	};
}, false);
</script>

        
    <?php get_footer(); ?>