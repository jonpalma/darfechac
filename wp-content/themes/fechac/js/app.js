$('.navbar-nav li').click(function() {
    $('.navbar-nav li.active').removeClass('active');
    $(this).addClass('active');
});

$(document).ready(function() {
	$(".video-modal").on('hidden.bs.modal', function (e) {
		$(this).find('iframe').attr("src", $(this).find('iframe').attr("src"));
	});
});

/* 
	PAGE LOAD WITH HASH OFFSET 
*/
(function($, window) {
    $navbar_height = $('.navbar').height();
    var adjustAnchor= function() {
        var $anchor = $(':target'),
            fixedElementHeight = $navbar_height;
        if ($anchor.length > 0) {
            $('html, body')
                .stop()
                .animate({
                scrollTop: $anchor.offset().top - fixedElementHeight
            }, 800);
        }
    };
    $(window).on('hashchange load', function() {
        adjustAnchor();
    });
})(jQuery, window)