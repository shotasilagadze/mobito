$(".more_details").click(function() {
		$(".mor_details").toggleClass('make_bigger');
});

$(".inside_page_carousel").hover(function() {
		$(".carousel-control").toggleClass('opacity');
});



$('#registration a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

$(document).ready(function() {
  $('.search_test').SumoSelect({search: true, searchText: 'Enter here.'});
});





jQuery(document).ready(function($) {

			$('#myCarousel').carousel({
							interval: 5000
			});

			//Handles the carousel thumbnails
			$('[id^=carousel-selector-]').hover(function () {
			var id_selector = $(this).attr("id");
			try {
					var id = /-(\d+)$/.exec(id_selector)[1];
					console.log(id_selector, id);
					jQuery('#myCarousel').carousel(parseInt(id));
			} catch (e) {
					console.log('Regex failed!', e);
			}
	});
			// When the carousel slides, auto update the text
			$('#myCarousel').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});
