<?php

// アイキャッチ画像を有効にする
add_theme_support( 'post-thumbnails');

//wp_headで出力されるいらない子を消す
remove_action( 'wp_head' , 'index_rel_link');
remove_action( 'wp_head' , 'wp_generator');
remove_action( 'wp_head' , 'wp_shortlink_wp_head');
remove_action( 'wp_head' , 'start_post_rel_link');
remove_action( 'wp_head' , 'wlwmanifest_link');
remove_action( 'wp_head' , 'rsd_link');
remove_action( 'wp_head' , 'adjacent_posts_rel_link_wp_head');

//SmartNews用RSS
add_action( 'do_feed_smartnews', 'do_feed_smartnews' );
function do_feed_smartnews() {
$feed_template = get_template_directory() . '/smartnews.php';
load_template( $feed_template );
}
