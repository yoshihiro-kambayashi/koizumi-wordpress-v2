<?php get_template_part('meta'); ?>
    
    <header>
        <div class="container">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" width="400" alt="丸ごと小泉武夫マガジン"></img></h1></a>
            </div>
            <div class="search">
                <form method="get" action="" class="searchform" style="background: url(<?php echo get_template_directory_uri(); ?>/images/searchbox.png) no-repeat;">
                    <input type="search" class="searchform-text" name="s">
                    <input type="image" value="検索" src="<?php echo get_template_directory_uri(); ?>/images/search.png" class="searchform-icon">
                </form>
            </div>
        </div><!-- header > container -->
    </header>
    
    <nav>
        <div class="container">
            <ul class="menu">
<?php

// 全登録カテゴリーの取得
$categorys = get_terms( "category", "fields=all&get=all" );

// 対象カテゴリーの初期化
$this_categories = array();

if (is_single()):
    
    // 記事のカテゴリー情報の取得
    $this_categories = get_the_category();
    
    // 記事のカテゴリースラッグのみ取得
    $this_category = array();
    foreach ( $this_categories as $cat ){ array_push( $this_category, $cat->slug ); }
    $this_categories = $this_category;

else:
 
    // 表示しているページのカテゴリー情報の取得
    $cat = get_category( get_query_var('cat') );
    
    // 表示しているページのカテゴリースラッグのみ取得
    array_push($this_categories, $cat->slug);

endif;

// カテゴリー一覧の表示とカレントカテゴリーのデコレーション
foreach ( $categorys as $category ):
    if ( $category->term_id == 1 || $category->slug == "pr" ){ continue; }
?>
                <li><a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"<?php if (in_array( $category->slug, $this_categories)){ ?> class="current" <?php } ?>><?php echo $category->name; ?></a></li>
<?php endforeach; ?>
            </ul>
        </div><!-- nav > container -->
    </nav>
