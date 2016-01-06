/*$(document).ready(function(){
	$(".body-container").hide().fadeIn(1000);
});*/

$(document).ready(function(){

    /*
    Add this code to every page.

    We start by hiding the body, and then fading it in.
    */
    $('.body-container').hide().fadeIn(500);
    $('footer').hide().fadeIn(500);

    /*
    Now we deal with all 'a' tags...
    */
    $('a').click(function(){
        /*
        Get the url from this anchors href
        */
        var link = $(this).attr('href');
        /*
        Fade out the whole page
        */
        $('footer').hide().fadeOut(600);
        $('.body-container').fadeOut(600, function(){

            /*
            When that's done (on the 'callback') send the browser to the link.
            */
            window.location.href = link;
        });
        return false;
    });

});