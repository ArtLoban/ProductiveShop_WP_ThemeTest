<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>
    <!-- Quick dummy home page template -->
    <main>
        <div class="container">
            <h1><?php the_title() ?></h1>
            <?php the_content() ?>
        </div>
    </main>
<?php
get_sidebar();
get_footer();
