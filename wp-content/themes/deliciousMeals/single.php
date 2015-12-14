<?php get_header();?>


    <div id="content_news">
        <h1>Article : <?php the_title(); ?></h1>
        <div id="hr_food"> &nbsp;</div>
        <div class="news">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="details_news">
                    <h2><a href="#" title="parcours"><?php the_title(); ?></a></h2>
                    <div class="meta"><span class="fix">Posté par </span><?php the_author(); ?> <span class="fix">le</span> <?php the_time("j F Y"); ?></div>

                    <?php
                        if(in_category('7')){
                            the_content();
                        }
                        else{
                            the_post_thumbnail("img_news");
                            the_content();
                        }
                    ?>


                </div>

            <?php endwhile; else : ?>
                <p>lol</p>
            <?php endif; ?>


            <div id="nav-left" class="nav-single"><?php previous_post_link( "%link", "&larr; Article Precédent ", $in_same_term = true); ?></div>
            <div id="nav-right" class="nav-single"><?php next_post_link( "%link", "Article Suivant &rarr;", $in_same_term = true); ?></div>
            <div id="clean"></div>

        </div>
        <?php get_sidebar();?>

        <div id="clean"></div>
    </div>

<?php get_footer();?>