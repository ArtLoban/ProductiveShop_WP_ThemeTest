<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>
    <!-- Quick dummy home page template -->
    <main style="width: 100%; max-width: 1280px; margin: 0 auto">
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
    </main>
<?php
get_sidebar();
get_footer();
