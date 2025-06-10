<?php
$tags = wp_get_post_tags(get_the_ID(), array());
$categories = wp_get_post_categories(get_the_ID(), array('fields' => 'all'));
?>

<!-- .archive-loop span.posted-on > time.entry-date -->

<?php if ($view == 'spalten') : ?>
    <div class="wp-block-column p-3 ms-0 ms-sm-3 mt-sm-3 rounded has-white-background-color has-background has-shadow">
    <?php elseif ($view == 'zeilen') : ?>
        <div class="p-3 mb-4 rounded has-white-background-color has-background has-shadow">
        <?php endif; ?>
        <article id="post-<?php the_ID(); ?>" class="post">
            <header class="entry-header pb-2">
                <h2 class="h5 mb-3 p-1"><a class="news-title" href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-meta mb-2">
                    <span class="posted-on">
                        <time datetime="<?php
                                        echo get_the_date('c');
                                        ?>" itemprop="datePublished" class="entry-date published"><?php
                                                                                echo (get_the_date());
                                                                                ?></time>
                    </span>
                </div>
            </header>
            <div class="entry-content">
                <?php if (has_post_thumbnail(get_the_ID())) : ?>
                    <?php if ($view == 'zeilen'): ?>
                        <?php the_post_thumbnail(array(500, null), ['class' => 'float-lg-start float-sm-none me-3 mb-lg-2']); ?>
                    <?php else: ?>
                        <?php the_post_thumbnail('medium_large'); ?>
                    <?php endif; ?>
                    <?php if (! $img_only) : ?>
                        <a href="<?php esc_url(the_permalink()); ?>" rel="bookmark">
                            <p class="mt-3"><?php echo (get_the_excerpt()); ?></p>
                        </a>
                    <?php endif; ?>
                <?php else: ?>
                    <a href="<?php esc_url(the_permalink()); ?>" rel="bookmark"><?php the_excerpt(); ?></a>
                <?php endif; ?>
            </div>
            <?php if ($view == 'zeilen'): ?>
                <div class="clearfix"></div>
            <?php endif; ?>

            <footer class="entry-footer">
                <p <?php echo ($img_only && has_post_thumbnail() ? 'class="mt-3"' : ''); ?>>
                    <?php if ($categories): ?>
                        <?php $num_of_cats = count($categories); ?>
                        <span class="cats-links small">
                            <?php for ($i = 0; $i < $num_of_cats; $i++): ?>
                                <a href="<?php echo get_category_link($categories[$i]->term_id); ?>">
                                    <?php echo $categories[$i]->name; ?>
                                </a><?php if ($i < $num_of_cats - 1) {
                                        echo ',';
                                    } ?>
                            <?php endfor; ?>
                        </span>
                    <?php endif; ?>
                    <?php if ($tags): ?>
                        <br />
                        <span class="tags-links small">
                            <?php foreach ($tags as $tag): ?>
                                <?php $tag_link = get_tag_link($tag->term_id); ?>
                                <a href="<?php echo $tag_link; ?>"><?php echo $tag->name; ?></a>
                            <?php endforeach; ?>
                        </span>
                    <?php endif; ?>
                </p>
            </footer>
        </article>
        <!-- <p class="has-text-align-right"><a href="<?php //esc_url(the_permalink()); 
                                                        ?>" class="continue-reading">weiterlesen</a></p> -->
        </div>
        <?php if ($view == "spalten" && $cur_column % $spalten == 0 && $cur_column < $anzahl): ?>
    </div>
    <div class="wp-block-columns archive archive-loop">
    <?php endif; ?>