( function($) {
	$(document).on( 'click', '.post-title a', function( event ) {
		var post = $(this).attr("href");
		var $modal = $("#modal-window");
		var $modalContainer = $(".modal-container");
		var $modalController = $(".modal-controller");

		event.preventDefault();
		$modal.load(post);

		$modalContainer.delay("500").slideDown("slow");
	})
;})(jQuery);