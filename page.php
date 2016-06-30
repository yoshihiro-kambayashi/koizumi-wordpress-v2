<?php
/*
Template Name: 特集テンプレート
*/
?>
<?php get_header(); ?>

    <div class="content">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="page">
            
            <div class="bredcrumb bgcolor-f5f5f5">
                <div class="container">
                    <ul>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home" aria-hidden="true"></i>HOME</a>
                            <span class="separate"><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </li>
                        <li><a href="#"><?php $title = get_the_title(); if ( mb_strlen($title) > 30 ){ $title = mb_substr( get_the_title(), 0, 30 ).'...'; } echo $title; ?></a></li>
                    </ul>
                </div>
            </div><!-- bredcrumb -->
            
            <div class="single-content">
                <div class="single-container">
                    <article>
                        <?php the_content(); ?>
                    </article>
                </div>
            </div><!-- single-content -->
        </div><!-- single -->
<?php endwhile; endif; ?>

    </div><!-- content -->
    
<?php get_footer(); ?>
