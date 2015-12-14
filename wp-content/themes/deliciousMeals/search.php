<?php get_header();?>

    <div id="content_news">
        <h1>Recherche : <?php echo $wp_query->found_posts; ?> Résultat(s) pour <strong>"<?php the_search_query(); ?>"</strong></h1>
        <div id="hr_food"> &nbsp;</div>
        <div class="news">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="details_news">
                    <h2><a href="#" title="parcours"><?php the_title(); ?></a></h2>
                    <?php the_post_thumbnail();?>
                    <?php echo search_excerpt_highlight(); ?>
                    <a class="btn" href="<?php the_permalink();?>">Lire la suite</a>
                </div>

            <?php endwhile; wp_pagenavi(); else : ?>
                <p>Aucun Résultat n'a était trouvé ...</p>
            <?php endif; ?>
        </div>

    </div>

<div id="content_sidebar">


<?php    if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Sidebar horizontal') ) ?>

    <div id="clean"></div>
    </div>

<?php get_footer();?>