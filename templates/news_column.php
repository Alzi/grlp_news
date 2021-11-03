<?php
    $tags = wp_get_post_tags(get_the_ID(), array()); 
    $categories = wp_get_post_categories(get_the_ID(), array('fields' => 'all'));
    // $spacing = $is_first_column ? ' ms-0' : ' ms-0 ms-sm-3';
?>

<!-- .archive-loop span.posted-on > time.entry-date -->

<div class="wp-block-column p-3 ms-0 ms-sm-3 rounded has-white-background-color has-background has-shadow">
<article id="post-<?php the_ID(); ?>"class="post">
    <header class="entry-header pb-2">
        <h2 class="h5 mb-3"><a class="news-title" href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h2>
        <div class="entry-meta mb-3"> 
            <span class="posted-on">
                <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="entry-date published"><?php the_date(); ?></time>
            </span>
        </div>
    </header>
    <div class="entry-content">
        <a href="<?php esc_url(the_permalink());?>" rel="bookmark"><?php the_excerpt(); ?></a>
    </div>
    <footer class="entry-footer">
    <p>
    <?php if ($categories): ?>
    <?php $num_of_cats = count($categories); ?>
        <span class="cats-links small">
        <?php for ( $i = 0; $i < $num_of_cats; $i++ ): ?>
        <a href="<?php echo get_category_link( $categories[$i]->term_id ); ?>">
            <?php echo $categories[$i]->name; ?>
        </a><?php if ( $i < $num_of_cats-1 ) { echo ','; } ?>
        <?php endfor; ?>
        </span>
    <?php endif; ?>
    <?php if ($tags): ?>
    <br />
        <span class="tags-links small">
        <?php foreach ( $tags as $tag ): ?>
        <?php $tag_link = get_tag_link( $tag->term_id ); ?>
        <a href="<?php echo $tag_link; ?>"><?php echo $tag->name; ?></a>
        <?php endforeach; ?>
        </span>
    <?php endif; ?>
    </p>
    </footer> 
    </article>
    <!-- <p class="has-text-align-right"><a href="<?php //esc_url(the_permalink()); ?>" class="continue-reading">weiterlesen</a></p> -->
</div>
