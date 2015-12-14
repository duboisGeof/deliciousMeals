<?php
// Ajouter menu
add_theme_support("nav_menus");
register_nav_menu("main","Navigation Principale");
register_nav_menu("main2","Navigation Secondaire");

/*
function filter_ptags_on_images($content){
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');*/



//Modifier excerpt
function custom_excerpt_more($more){
    return '...';
}
add_filter("excerpt_more", "custom_excerpt_more");


//Taille de excerpt
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}


//Mettre en avant les mots de la recherche
function search_excerpt_highlight() {
    $excerpt = get_the_excerpt();
    $keys = implode('|', explode(' ', get_search_query()));
    $excerpt = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $excerpt);

    echo '<p>' . $excerpt . '</p>';
}

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Sidebar vertical',
        'before_widget' => '<div class="sidebar">',
        'after_widget' => '</div><div id="clean"></div>',
        'before_title' => '<h2>',
        'after_title' => '</h2> <hr>',
        'id'           => 'sidebar',
    ));

    register_sidebar(array(
        'name' => 'Sidebar horizontal',
        'before_widget' => '<div class="bloc_info"><hr class="hr">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));

//Post type carte des menus
add_action('init', 'portfolio_init');

function portfolio_init(){
    $labels = array(
        'name' => 'Projets',
        'singular_name' => 'Portfolio',
        'add_new' => 'Ajouter un projet',
        'add_new_item' => 'Ajouter un nouveau projet',
        'edit_item' => 'Modifier un nouveau projet',
        'new_item' => 'Nouveau Projet',
        'view_item' => 'Voir un projet',
        'search_item' => 'Rechercher un projet',
        'not_found' => 'Aucun projet trouvé',
        'not_found_in_trash' => 'Aucun projet dans la poubelle',
        'parent_item_colon' => '',
        'menu_item' => 'Portfolio'
);

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 3,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')

);
    register_post_type('portfolio', $args);
}

add_action('init', 'create_taxonomy');

function create_taxonomy(){
    $labels = array(
        'name' => 'Domaines',
        'singular_name' => 'Domaine',
        'search_items' => 'Rechercher un domaine',
        'all_items' => 'Tout les domaines',
        'edit_item' => 'Editer un domaine',
        'update_item' => 'Modifier un domaine',
        'add_new_item' => 'Ajouter un domaine',
        'new_item_name' => 'Nouveau domaine',
        'menu_name' => 'Domaines'
    );

    register_taxonomy('domaines', array('portfolio'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'domaines')
    ));
}

}
?>