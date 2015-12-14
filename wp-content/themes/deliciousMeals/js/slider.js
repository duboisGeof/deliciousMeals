jQuery(document).ready(function($) {
    $('#homepage-slider').flexslider({
        animation: "fade",              //String: Select your animation type, "fade" or "slide"
        slideshow: true,                //Boolean: Animate slider automatically
        slideshowSpeed: 8000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
        animationDuration: 500,         //Integer: Set the speed of animations, in milliseconds
        directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
        controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        keyboardNav: true,              //Boolean: Allow slider navigating via keyboard left/right keys
        mousewheel: false,              //Boolean: Allow slider navigating via mousewheel
        prevText: "Previous",           //String: Set the text for the "previous" directionNav item
        nextText: "Next",               //String: Set the text for the "next" directionNav item
        pausePlay: false,               //Boolean: Create pause/play dynamic element
        pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
        playText: 'Play',               //String: Set the text for the "play" pausePlay item
        randomize: false,               //Boolean: Randomize slide order
        slideToStart: 0,                //Integer: The slide that the slider should start on. Array notation (0 = first slide)
        useCSS: true,
        animationLoop: true,            //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
        pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
        pauseOnHover: false            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
    });
});/**
 * Created by biohazard401 on 26/08/2015.
 */
