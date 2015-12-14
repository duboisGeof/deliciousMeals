<?php /* Template Name: menus */?>
<?php get_header();?>

    <div id="foods">
        <h1 class="">Nos Menus</h1>
        <div id="hr_food"> &nbsp;</div>
        <div id="details">
            <h1 class="title">Hamburgers</h1>
            <hr>

            <?php query_posts('post_type=portfolio&domaines=menus');?>
            <?php while (have_posts() ) : the_post();?>
            <div id="food">
                <h2><?php the_field('nom_du_menus')?></h2>
                <div id="price"><?php the_field('prix_du_menus')?> €</div><br><br>
                  <?php the_content();?>
                <hr>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query();?>

        </div>
        <div id="drink">
            <h1 class="title">Boissons</h1>
            <hr>

            <?php query_posts('post_type=portfolio&domaines=boissons');?>
            <?php while (have_posts() ) : the_post();?>
                <div id="food">
                    <h2><?php the_field('nom_de_la_boisson')?></h2>
                    <div id="price"><?php the_field('prix_du_menus')?> €</div><br><br>
                    <?php the_content();?>
                    <hr>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query();?>

        </div>

        <div id="clean"></div>
    </div>

<div id="content_sidebar">


<?php    if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Sidebar horizontal') ) ?>

    <div id="clean"></div>
    </div>

<?php get_footer();?>