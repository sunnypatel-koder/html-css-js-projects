var count = 0;
jQuery(document).ready(function($) {
    $(".units").hide();
    $(".units_dropper").click(function() {
        count += 1;

        if (count == 1) {
            $(this).parent().children(".units").slideDown();
            $(this).css({
                "background-color": "tomato",
                "color": "white"
            });
        } else if (count == 2) {
            count = 0;
            $(this).parent().children(".units").slideUp();
            $(this).css({
                "background-color": "#E7E9EB",
                "color": "black"
            });
        }

    });
});