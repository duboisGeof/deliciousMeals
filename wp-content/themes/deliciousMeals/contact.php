<?php /* Template Name: Contact */?>
<?php get_header();?>

    <div id="content_news">
        <h1>Contact</h1>
        <div id="hr_food"> &nbsp;</div>
        <div class="news">


            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="contact">
                    <div id="googleMap"></div>
                    <?php  the_content(); ?>


                </div>

            <?php endwhile; else : ?>
                <p>lol</p>
            <?php endif; ?>
        </div>
        <div id="clean"></div>
    </div>

<div id="content_sidebar">


<?php    if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Sidebar horizontal') ) ?>

    <div id="clean"></div>
    </div>

<?php get_footer();?>