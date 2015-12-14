<footer>
    <div id="menu_footer">
        <?php wp_nav_menu(array(
            "theme_location" => "main2",
        ));?>
    </div>
</footer>

    <script src='<?php bloginfo("stylesheet_directory");?>/js/libs/jquery.js'></script>
    <script src="<?php bloginfo("stylesheet_directory");?>/js/libs/modernizr-2.6.2.min.js"></script>

    <script src="<?php bloginfo("stylesheet_directory");?>/js/libs/jquery-migrate-1.2.1.min.js"></script>

    <script src="<?php bloginfo("stylesheet_directory");?>/js/plugins.js"></script>
    <script src="<?php bloginfo("stylesheet_directory");?>/js/script.js"></script>
    <script src="<?php bloginfo("stylesheet_directory");?>/js/animate.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>


    <?php wp_footer();?>
</body>
</html>