<!DOCTYPE html>
<html <?php language_attributes();?>>
<head lang="en">
    <meta charset="<?php bloginfo('charset');?>">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url");?>"/>
    <meta name="viewport" content="initial-scale=1.0">
    <!--[if lte IE11]>
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style_ie.css />
    <![endif]-->

    <?php wp_head();?>
</head>
<body>
<header>
    <div class="bloc_menu">
        <!-- Debut menu-->
       <?php wp_nav_menu(array(
           "theme_location" => "main",
           'container_id'    => 'menu',
       ));?>

        <?php get_search_form();?>

</header>