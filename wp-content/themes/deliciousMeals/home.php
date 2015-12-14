<?php get_header();?>

    <div id="content_news">
        <h1>Notre Actualités</h1>
        <div id="hr_food"> &nbsp;</div>
        <div class="news">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="details_news">
                <h2><a href="#" title="parcours"><?php the_title(); ?></a></h2>
                <div class="meta"><span class="fix">Posté par </span><?php the_author(); ?> <span class="fix">le</span> <?php the_time("j F Y"); ?></div>

                <?php the_post_thumbnail();?>
                <p><?php echo excerpt(300); ?></p>

                <a class="btn" href="<?php the_permalink();?>">Lire la suite</a>
            </div>

            <?php endwhile; wp_pagenavi(); else : ?>
                <p>lol</p>
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