<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.jpg">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-precomposed.png" />

<?php if( !is_single() ): //共通OGP ?>
  <!-- OGP -->
  <meta property="og:type" content="website">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <meta property="og:url" content="<?php bloginfo('url'); ?>">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/og_img.png">
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <meta property="og:locale" content="ja_JP" />
  <meta property="fb:app_id" content="1196733627033608">
  
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
  <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
  <meta name="twitter:url" content="<?php bloginfo('url'); ?>">
  <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/og_img.png">
  <meta name="twitter:domain" content="koizumipress.com">
  <meta name="twitter:creator" content="@KOIZUMIMAGAZINE">
  <meta name="twitter:site" content="@KOIZUMIMAGAZINE">
  
<?php else: //各記事OGP ?>
  <!-- OGP -->
  <meta property="og:type" content="article">
  <meta property="og:description" content="<?php //echo get_post_meta($post->ID, _aioseop_description, true); ?>">
  <meta property="og:title" content="<?php echo the_title(); ?>">
  <meta property="og:url" content="<?php echo the_permalink(); ?>">
  <meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <meta property="og:locale" content="ja_JP" />
  <meta property="fb:app_id" content="1196733627033608">
  
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:description" content="<?php //echo get_post_meta($post->ID, _aioseop_description, true); ?>">
  <meta name="twitter:title" content="<?php echo the_title(); ?>">
  <meta name="twitter:url" content="<?php echo the_permalink(); ?>">
  <meta name="twitter:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
  <meta name="twitter:domain" content="koizumipress.com">
  <meta name="twitter:creator" content="@KOIZUMIMAGAZINE">
  <meta name="twitter:site" content="@KOIZUMIMAGAZINE">

<?php endif; ?>
<?php wp_head(); ?>
</head>
<body>
    
<!--
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-64919291-1', 'auto');
    ga('send', 'pageview');
    </script>
-->
 
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6&appId=1196733627033608";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
