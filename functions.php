<?php

//自動整形を無効にする化
// タイトル欄
remove_filter('the_title', 'wpautop');
// 本文欄
function wpautop_filter($content)
{
    if (!is_single()) {
        remove_filter('the_content', 'wpautop');
    }

    return $content;
}
add_filter('the_content', 'wpautop_filter');
// コメント欄
remove_filter('comment_text', 'wpautop');
// 抜粋欄
remove_filter('the_excerpt', 'wpautop');

// 記号などの自動変換を無効化
// タイトル欄
remove_filter('the_title', 'wptexturize');
// 本文欄
function wptexturize_filter($content)
{
    if (!is_single()) {
        remove_filter('the_content', 'wptexturize');
    }

    return $content;
}
add_filter('the_content', 'wptexturize_filter');
// コメント欄
remove_filter('comment_text', 'wptexturize');
// 抜粋欄
remove_filter('the_excerpt', 'wptexturize');

function enqueue_styles()
{
    wp_enqueue_style('font-family', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false);
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

// Remove Default Wordpress Jquery

function add_script()
{
    wp_enqueue_script('first', get_template_directory_uri().'/js/jquery-3.3.1.min.js', [], '', true);
    wp_enqueue_script('two', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', ['first'], '', true);
    wp_enqueue_script('three', 'https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/6.26.0/polyfill.min.js', ['first', 'two'], '', true);
    wp_enqueue_script('four', get_template_directory_uri().'/js/script.js', ['first', 'two', 'three'], '', true);
    wp_enqueue_script('five', get_template_directory_uri().'/js/custom.js', ['first', 'two', 'three', 'four'], '', true);
    wp_enqueue_script('six', 'https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js', ['first', 'two', 'three', 'four', 'five'], '', true);
    wp_enqueue_script('seven', get_template_directory_uri().'js/jquery-numerator.js', ['first', 'two', 'three', 'four', 'five', 'six'], '', true);
}
add_action('wp_enqueue_scripts', 'add_script');

// post pagination
function your_themes_pagination()
{
    global $wp_query;
    echo paginate_links();
}

// Add more-link text to excerpt
function my_theme_excerpt_more($more)
{
    return '&nbsp;…';
}
add_filter('excerpt_more', 'my_theme_excerpt_more');

// Add excerpt length

function new_excerpt_length($length)
{
    return 32;
}
add_filter('excerpt_length', 'new_excerpt_length');

//ADD CUSTOM CLASS ON CATEGORY
add_filter('wp_list_categories', 'add_slug_class_wp_list_categories');
function add_slug_class_wp_list_categories($list)
{
    $cats = get_categories('hide_empty=0');
    foreach ($cats as $cat) {
        $find = 'cat-item-'.$cat->term_id.'"';
        $replace = 'cat-item-'.$cat->slug.' cat-item-'.$cat->term_id.'"';
        $list = str_replace($find, $replace, $list);
        $find = 'cat-item-'.$cat->term_id.' ';
        $replace = 'cat-item-'.$cat->slug.' cat-item-'.$cat->term_id.' ';
        $list = str_replace($find, $replace, $list);
    }

    return $list;
}

//ADD CUSTOM CLASS ON CATEGORY
function ourWidgetsInit()
{
    register_sidebar([
        'name' => 'Blog Category',
        'id' => 'blog-category',
        'before_widget' => '<div class="sect_news__container--tags">',
        'after_widget' => '</div>',
    ]);
}

add_action('widgets_init', 'ourWidgetsInit');

add_theme_support('post-thumbnails');
// add_image_size('small-thumbnail', 100, 100, true);
the_post_thumbnail([100, 100]);

// CUSTOM STYLES

//SVGをアップロード
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = [];
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

function autoblank($text)
{
    $return = str_replace('<a', '<a target="_blank"', $text);

    return $return;
}
add_filter('the_content', 'autoblank');

/* 管理画面での表示項目追加 */
function add_custom_column($defaults)
{
    $defaults['size'] = 'サイズ'; //項目名

    return $defaults;
}
add_filter('manage_sponsors_posts_columns', 'add_custom_column'); //ここでの’blog’はカスタム投稿タイプ

function add_custom_column_id($column_name, $id)
{
    if ($column_name == 'size') {
        $cf_column = get_field('size', $id);
        echo $cf_column;
    }
}
add_action('manage_sponsors_posts_custom_column', 'add_custom_column_id', 10, 2); //ここでの’blog’はカスタム投稿タイプ

//投稿一覧画面でサムネイル表示
function add_posts_columns_thumbnail($columns)
{
    $columns['thumbnail'] = 'アイキャッチ画像';

    return $columns;
}
function add_posts_columns_thumbnail_row($column_name, $post_id)
{
    if ('thumbnail' == $column_name) {
        $thumb = get_the_post_thumbnail($post_id, [100, 100], 'thumbnail');
        echo ($thumb) ? $thumb : '－';
    }
}
add_filter('manage_sponsors_posts_columns', 'add_posts_columns_thumbnail');
add_action('manage_sponsors_posts_custom_column', 'add_posts_columns_thumbnail_row', 10, 2);

function auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
    if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
        $slug = utf8_uri_encode($post_type).'-'.$post_ID;
    }

    return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);

function change_about_page_title($title)
{
    if (is_page('news')) {
        $title = '新着情報';
    }

    return $title;
}
add_filter('aioseo_title', 'change_about_page_title', 100);

add_action('wp_head', 'add_noindex_to_category_single');
function add_noindex_to_category_single()
{
    if (is_singular('recruit')) {
        echo '<meta name="robots" content="noindex,nofollow" />';
    }
}
