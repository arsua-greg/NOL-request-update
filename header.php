
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-SS6FNDT1SF"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-SS6FNDT1SF');
	</script>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="Keywords" content="野球,独立リーグ,球団,日本海,NOL,日本海オセアンリーグ">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.jpg" sizes="180x180">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

		
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/commons/commons.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front/front.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front/topics.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front/news.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tryout/tryout.css" type="text/css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/renew/css/style.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/renew/css/style_sp.css" type="text/css" media="screen and (max-width:768px)">
	
    <?php wp_head(); ?>	
</head>

<?php
    if (is_home() && !is_front_page()) : ?>
		<body id="front">
		<header>
			<?php get_template_part('h_nav'); ?>
		</header>
		<main id="main">
	<?php else: ?>


	<body <?php body_class(); ?>>

	<header>
		<?php get_template_part('h_nav'); ?>
	</header>

	<?php if (is_page('tryout') || is_page('tryout_umpire')) : ?>
		<main id="tryout">
	<?php else: ?>
		<main>
	<?php endif; ?>

<?php endif; ?>
