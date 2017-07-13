( function($) {
	var $modalContainer = $(".modal-container");
	var $modalController = $(".modal-controller");

	// Open post modal
	$(document).on( 'click', '.post-title a', function( event ) {
		var post = $(this).attr("href");
		var $modal = $("#modal-window");

		event.preventDefault();
		$modal.load(post);

		$modalContainer.delay("500").fadeIn(300);
	});

	//Close post modal
	$modalController.click(function() {
		$modalContainer.fadeOut(300);
	});
;})(jQuery);