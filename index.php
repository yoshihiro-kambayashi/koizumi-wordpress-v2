<?php get_header(); ?>

    <div class="content bgcolor-f5f5f5">
        <div class="container">
            
            <div class="main">

<?php if ( is_home() || is_front_page() ) : ?>
                <div class="main-topix">
                    
                    <div class="image">
                        <ul>
<?php $arg = array( 'posts_per_page' => 5, 'category_name' => 'news2' ); ?>
<?php $posts = get_posts($arg); ?>
<?php foreach( $posts as $post ): setup_postdata( $post ); ?>
                            <li>
                                <a href="<?php echo get_the_permalink(); ?>">
                                    <div class="thumbnail" style="background: url(<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'full' ); echo $img[0]; ?>) no-repeat"></div>
                                </a>
                            </li>
<?php endforeach; wp_reset_postdata(); ?>
                        </ul>
                    </div>

                    <div class="list">
                        <ul>
<?php foreach( $posts as $post ): setup_postdata( $post ); ?>
                            <li>
<?php if( 3 > ( date( 'U', ( date_i18n('U') - get_the_time('U') ) ) / 86400 ) ): ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/new.png" alt="new"></img>
<?php endif; ?>
                                <a href="<?php echo get_the_permalink(); ?>"><?php $title = get_the_title(); if ( mb_strlen($title) > 25 ){ $title = mb_substr( get_the_title(), 0, 25 ).'...'; } echo $title; ?></a>
                            </li>
<?php endforeach; wp_reset_postdata(); ?>
                        </ul>
                    </div>
                    
                </div><!-- main-topix -->
<?php elseif( is_category() ) : ?>
                <h2><span class="emphasize"><?php single_cat_title(); ?></strong></h2>
<?php elseif( is_tag() ) : ?>
                <h2><span class="emphasize"><?php single_tag_title(); ?></strong></h2>
<?php elseif( is_search() ) : ?>
                <h2><span class="emphasize"><?php echo get_search_query(); ?></strong></h2>
<?php endif; ?>

<?php
    // 現在のページ
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 

    // 全記事取得用
    $arg = array( 'posts_per_page' => $posts_per_page, 'paged' => $paged );

    // カテゴリーページ記事取得用
    if( is_category() ){ $category = get_category( get_query_var('cat') ); $arg += array( 'category' => $category->cat_ID ); }

    // タグページ記事取得用
    if( is_tag() ){ $arg += array( 'tag' => str_replace(" ", "-", single_tag_title( '', false ) ) ); }

    // 検索ページ記事表示用
    if( is_search() ){ $arg += array( 's' => $_REQUEST['s'] ); }
?>
                <div class="main-list">
                    <ul>
<?php $posts = get_posts($arg); $i=1; ?>
<?php foreach( $posts as $post ): setup_postdata( $post ); ?>
                        <li class="col-3"><a href="<?php echo get_the_permalink(); ?>">
<?php
// 記事のカテゴリー情報の取得
$this_categories = get_the_category();

// 記事のカテゴリースラッグのみ取得
$this_category_slug = array();
foreach ( $this_categories as $cat ){ array_push( $this_category_slug, $cat->slug ); }
?>
                           <div class="thumbnail<?php if( in_array( "book", $this_category_slug ) ){ echo " book"; } ?>" style="background: url(<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'full' ); echo $img[0]; ?>) no-repeat">
<?php if( 3 > ( date( 'U', ( date_i18n('U') - get_the_time('U') ) ) / 86400 ) ): ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/new.png" alt="new"></img>
<?php endif; ?>
                            </div>
                            <div class="info">
                                <div class="text"><?php $title = get_the_title(); if ( mb_strlen($title) > 28 ){ $title = mb_substr( get_the_title(), 0, 28 ).'...'; } echo $title; ?></div>
                                <div class="subinfo">
<?php
// 記事のカテゴリー情報の取得
$this_categories = get_the_category();

// 記事のカテゴリー名のみ取得
$this_category_name = array();
foreach ( $this_categories as $cat ){ array_push( $this_category_name, $cat->name ); }
$this_categories = $this_category_name;
?>
                                    <div class="category color-orange"><?php echo implode(", ", $this_categories); ?></div>
                                    <div class="pubdate"><?php echo get_the_time('Y.m.d'); ?></div>                                
                                </div>
                            </div>
                        </a></li>
<?php $i++; endforeach; wp_reset_postdata(); ?>
                    </ul>
                </div>
                
                <?php if(function_exists('wp_pagenavi') && !is_category(4)) wp_pagenavi(); ?>

            </div><!-- main -->

<?php get_sidebar(); ?>

        </div><!-- content > container -->
    </div><!-- content -->
    
<?php get_footer(); ?>