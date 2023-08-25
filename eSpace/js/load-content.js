$(document).ready(function() {

    $('.sub-container .units li a').click(function() {
        event.preventDefault();
        get = $(this).attr('href');
        // alert(get);
        $(".main .main_notes .notes").load(get);
        // $(".main .main_notes").load("chapter-ribbon.php");

    });

});