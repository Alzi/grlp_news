<?php
$tags = wp_get_post_tags(get_the_ID(), array()); 
$categories = wp_get_post_categories(get_the_ID(), array('fields' => 'all'));
?>

<div class="wp-block-column p-3 rounded has-white-background-color has-background">
    <a class="news-title" href="<?php esc_url(the_permalink()); ?>"><h5><?php the_title(); ?></h5></a>
    <p class="news-date"><?php the_date(); ?></p>
    <a class="news-excerpt" href="<?php esc_url(the_permalink());?>" rel="bookmark"><?php the_excerpt(); ?></a>
    <?php if ($categories): ?>
    <?php $num_of_cats = count($categories); ?>
    <p>
        <span class="cats-links small">
        <?php for ($i=0; $i < $num_of_cats; $i++ ): ?>
        <a href="<?php echo get_category_link( $categories[$i]->term_id ); ?>">
            <?php echo $categories[$i]->name; ?>
        </a><?php if ($i < $num_of_cats-1) {echo ',';} ?>
        <?php endfor; ?>
        </span>
    </p>
    <?php endif; ?>
    <?php if ($tags): ?>
    <p>
        <span class="tags-links small">
        <?php foreach ( $tags as $tag ): ?>
        <?php $tag_link = get_tag_link( $tag->term_id ); ?>
        <a href="<?php echo $tag_link; ?>"><?php echo $tag->name; ?></a>
        <?php endforeach; ?>
        </span>
    </p>
    <?php endif; ?>
    <!-- <p class="has-text-align-right"><a href="<?php //esc_url(the_permalink()); ?>" class="continue-reading">weiterlesen</a></p> -->
</div>
