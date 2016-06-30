<?php
/*
Template Name: 特集テンプレート
*/
?>
<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="page">
            
            <div class="bredcrumb bgcolor-f5f5f5">
                <div class="container">
                    <ul>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home" aria-hidden="true"></i>HOME</a>
                            <span class="separate"><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </li>
                        <li><a href="<?php echo get_the_permalink(); ?>"><?php $title = get_the_title(); if ( mb_strlen($title) > 30 ){ $title = mb_substr( get_the_title(), 0, 30 ).'...'; } echo $title; ?></a></li>
                    </ul>
                </div>
            </div><!-- bredcrumb -->
            
            <div class="tokushu">
                
                <div class="container">
                    
                    <div class="main-image">
                        <img src="<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'full' ); echo $img[0]; ?>"></img>
                        <div class="info">
                            <div class="title"><?php echo get_the_title(); ?></div>
                            <div class="description"><?php the_content(); ?></div>
                        </div>
                    </div>
                    
                    <div class="main-list">
                        <ul>
<?php $tokushu_id =  get_post_meta(13 , 'id' , false); foreach($tokushu_id as $id ): ?>
                            <li class="col-4"><a href="<?php echo get_the_permalink($id); ?>">
<?php
// 記事のカテゴリー情報の取得
$this_categories = get_the_category($id);

// 記事のカテゴリースラッグのみ取得
$this_category_slug = array();
foreach ( $this_categories as $cat ){ array_push( $this_category_slug, $cat->slug ); }
?>
                               <div class="thumbnail<?php if( in_array( "book", $this_category_slug ) ){ echo " book"; } ?>" style="background: url(<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($id) , 'full' ); echo $img[0]; ?>) no-repeat">
<?php if( 3 > ( date( 'U', ( date_i18n('U') - get_the_time('U') ) ) / 86400 ) ): ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/new.png" alt="new"></img>
<?php endif; ?>
                                </div>
                                <div class="info">
                                    <div class="text"><?php $title = get_the_title($id); if ( mb_strlen($title) > 25 ){ $title = mb_substr( get_the_title($id), 0, 25 ).'...'; } echo $title; ?></div>
                                    <div class="subinfo">
<?php
// 記事のカテゴリー情報の取得
$this_categories = get_the_category($id);

// 記事のカテゴリー名のみ取得
$this_category_name = array();
foreach ( $this_categories as $cat ){ array_push( $this_category_name, $cat->name ); }
$this_categories = $this_category_name;
?>
                                        <div class="category color-orange"><?php echo implode(", ", $this_categories); ?></div>
                                        <div class="pubdate"><?php echo get_the_time('Y.m.d', $id); ?></div>                                
                                    </div>
                                </div>
                            </a></li>
<?php endforeach; ?>
                        </ul>
                    </div>

                </div>
            </div><!-- tokushu -->

        </div><!-- page -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>
