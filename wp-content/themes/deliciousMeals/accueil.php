<?php /* Template Name: Accueil */?>
<?php get_header();?>

    <div class="flexslider" id="homepage-slider">
        <?php
            echo do_shortcode("[metaslider id=132]");
        ?>
    </div>
    <div id="page-title-divider"></div>
    </div>


    <div id="main">
        <div class="bloc_welcome">
            <h2>Dernier article</h2>

            <?php query_posts("category_name=News&showposts=1");?>
            <?php while (have_posts() ) : the_post();?>

                <?php the_post_thumbnail();?>
                <p><?php echo excerpt(20); ?></p>

                <a class="btn" href="<?php the_permalink();?>">En savoir plus</a><hr>

            <?php endwhile;?>
            <?php wp_reset_query();?>
        </div>
        <div class="bloc_welcome">
            <h2>Dernier menus</h2>

            <?php query_posts("category_name=Nos menus&showposts=1");?>
            <?php while (have_posts() ) : the_post();?>

                <?php the_post_thumbnail();?>
                <p><?php echo excerpt(20); ?></p>

                <a class="btn" href="<?php the_permalink();?>">En savoir plus</a><hr>

            <?php endwhile;?>
            <?php wp_reset_query();?>
        </div>
    <div class="bloc_welcome">
        <h2>Dernier Rendez vous</h2>

        <?php query_posts("category_name=Rendez-vous&showposts=1");?>
        <?php while (have_posts() ) : the_post();?>

            <?php the_post_thumbnail();?>
            <p><?php echo excerpt(20); ?></p>

            <a class="btn" href="<?php the_permalink();?>">En savoir plus</a>

        <?php endwhile;?>
        <?php wp_reset_query();?>
    </div>

    <div id="content_sidebar">


        <?php    if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Sidebar horizontal') ) ?>

        <div id="clean"></div>
    </div>

<?php get_footer();?>