( function($) {
	var $modalContainer = $(".modal-container");
	var $modalController = $(".modal-controller");
	var $opacityBg = $(".opacity-bg");
	var $body = $("body");

	// open post modal
	$(document).on( 'click', '.post-title a', function( event ) {
		var post = $(this).attr("href");
		var $modal = $("#modal-window");

		event.preventDefault();
		$modal.load(post + " #posts-primary");

		$modalContainer.fadeIn(300);

		$opacityBg.fadeIn(300);

		$body.css("overflow", "hidden");
	});

	// close post modal
	$modalController.click(function() {
		$modalContainer.fadeOut(300).delay("500");

		$opacityBg.fadeOut(300);

		$body.css("overflow", "scroll");
	});
;})(jQuery);