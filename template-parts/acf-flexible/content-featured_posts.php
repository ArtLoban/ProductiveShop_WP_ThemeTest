<?php
//___debug_print($args);
$blog_posts = (isset($args['blog_posts']) && is_array($args['blog_posts']) && count($args['blog_posts'])) ? $args['blog_posts'] : false;

if (!$blog_posts) {
    $post_query = new WP_Query([
        'post_status'		=> 'publish',
        'posts_per_page'    => 3,
        'fields' 			=> 'ids',
    ]);

    $blog_posts = $post_query->posts;
}

?>
<div class="featuredPosts">
    <?php if ($title) { ?>
        <span class="caseStudy_title"><?= esc_html($title) ?></span>
    <?php } ?>

    <?php if (count($blog_posts)) { ?>
        <div class="featuredPosts_items">
            <?php foreach ($blog_posts as $key => $post_id) {
                $title = get_the_title($post_id);
                $permalink = get_permalink($post_id);
                $categories = get_the_category($post_id);
                $category_ids = wp_list_pluck($categories, 'name', 'term_id');
            ?>
                <?php if ($key === 0) { ?>
                    <article class="featuredPosts_itemPrime">
                        <a href="<?= esc_attr($permalink) ?>" class="featuredPosts_thumb">
                            <?= get_the_post_thumbnail($post_id, 'thumb'); ?>
                        </a>
                        <div class="featuredPosts_body">
                            <?php if (count($category_ids)) { ?>
                                <div class="featuredPosts_categories">
                                    <?php foreach ($category_ids as $id => $name) {
                                        echo sprintf('<a href="%s">%s</a>', esc_attr(get_category_link($id)), esc_html($name));
                                    } ?>
                                </div>
                            <?php } ?>
                            <a class="featuredPosts_title" href="<?= esc_attr($permalink) ?>"><?= esc_html($title ) ?></a>
                        </div>
                    </article>
                <?php } else { ?>
                    <article class="featuredPosts_item">
                        <a href="<?= esc_attr($permalink) ?>" class="featuredPosts_thumb">
                            <?= get_the_post_thumbnail($post_id, 'thumb'); ?>
                        </a>
                        <div class="featuredPosts_body">
                            <?php if (count($category_ids)) { ?>
                                <div class="featuredPosts_categories">
                                    <?php foreach ($category_ids as $id => $name) {
                                        echo sprintf('<a href="%s">%s</a>', esc_attr(get_category_link($id)), esc_html($name));
                                    } ?>
                                </div>
                            <?php } ?>
                            <a class="featuredPosts_title" href="<?= esc_attr($permalink) ?>"><?= esc_html($title ) ?></a>
                        </div>
                    </article>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>
</div>
