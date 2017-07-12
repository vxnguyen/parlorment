( function($) {
	var $modalContainer = $(".modal-container");
	var $modalController = $(".modal-controller");

	$(document).on( 'click', '.post-title a', function( event ) {
		var post = $(this).attr("href");
		var $modal = $("#modal-window");

		event.preventDefault();
		$modal.load(post);

		$modalContainer.delay("500").fadeIn(1500);
	});

	$modalController.click(function() {
		$modalContainer.fadeOut(900);
	});
;})(jQuery);