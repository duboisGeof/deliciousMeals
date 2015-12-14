<?php /* Template Name: confirm */?>
<?php get_header();?>

    <div id="content_news">
        <h1>Confirmation d'inscription</h1>
        <div id="hr_food"> &nbsp;</div>
        <div class="news">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="details_news">
                   <?php the_content();?>
                </div>

            <?php endwhile; wp_pagenavi(); else : ?>
                <p></p>
            <?php endif; ?>



        </div>

    <?php    if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Sidebar vertical') ) ?>


        <div id="clean"></div>
    </div>

    <div id="content_sidebar">


<?php    if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Sidebar horizontal') ) ?>

    <div id="clean"></div>
    </div>

<?php get_footer();?>