<style>
    .wp-block-column:not(:first-child) {
        margin-left: 1em;
    }
    p.news-date {
        font-size:0.8em;
        color:gray;
    }
    a.continue-reading:hover {
        font-size:19px;
        text-decoration: none !important;
    }
    a.news-excerpt {
        text-decoration: none;
        color: #000;
    }
    .grlp-news a.news-title {
        text-decoration: none;
        color: #000;
    }
    .grlp-news a.news-title:hover {
        color: #3C8025;
    }
</style>
<?php if (! empty($news_title)): ?>
<h1 class="has-text-align-center mb-4"><?php echo "Aktuelle Nachrichten"; ?></h1>
<?php endif; ?>
<div class="wp-block-columns grlp-news">
