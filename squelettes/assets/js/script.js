L.mapbox.accessToken = 'pk.eyJ1IjoicGllcnJlcGllcnJlcGllcnJlIiwiYSI6IkdXdE5CRFEifQ.3zLbKVYfHituW8BVU-bl5g';

$( document ).ready(function() {


	if ($('#inventaire-tabs').length > 0) {
		var minHeight = parseInt($('#nav-tabs.gauche').css('height')) -14 ;
		$('#inventaire-tabs').css('min-height', minHeight).find('article.tab').each(function(){
			$(this).css('min-height', minHeight);
		});
	};
	
	/* slickers */

	$(".slider").slick({
		dots: true,
		infinite: true,
		speed: 300,
		//slidesToShow: 1,
		//centerMode: true,
		//variableWidth: true,
		prevArrow: '<img class="slider-arrow-left" src="squelettes/assets/images/arrow-left.png">',
		nextArrow: '<img class="slider-arrow-right" src="squelettes/assets/images/arrow-right.png">'
	});
	$(".slick-zoom").on('click', function(e) {
		$(".slider").addClass("slick-fullscreen");
		$(".slider").slick('setPosition');
	});
	$(".slider").on('click', function(e) {
		if( !$(e.target).hasClass('slick-arrow') ) {
			if($(e.target).hasClass('slick-slide')) {
				$(".slider").slick('slickNext');
			} else {
				$(this).removeClass("slick-fullscreen");
				$(".slider").slick('setPosition');
			}
		}
	})
	$(document).keyup(function(e) {
		if (e.keyCode == 27) { // escape key maps to keycode `27`
			$(".slider").removeClass("slick-fullscreen")
			$(".slider").slick('setPosition');
		}
	});

	
	/* Ancres dans les tabs */
	$(".thematique-sommaire a").click(function(e) {
		e.preventDefault();
		var dest = $(this).attr('href'); 
		$('html,body').animate({ scrollTop: $(dest).offset().top }, 'slow');
	})
	
	/* tabs menu sticky */
	$(".tabs-wrapper nav.gauche").stick_in_parent({ offset_top: 12 });
	
	$(".tabs-wrapper nav.gauche li").click(function() {
		$(this).siblings().removeClass('strong');
		$(this).addClass('strong');
	});
	var tab = window.location.hash;
	$(".tabs-wrapper nav.gauche a[href='"+tab+"']").parent('li').addClass('strong');
	
	/* Init Mapbox */
	if($("#welcome-map").length > 0) {
		var map = L.mapbox.map('welcome-map', 'mapbox.streets', {zoomControl: false })
    .setView([37, 16.5], 5);
		map.scrollWheelZoom.disable();
	}
	
	
	
	if($("#inventaire-mapbox").length > 0 && typeof geojson !== 'undefined' && geojson.length > 0) {

		var map = L.mapbox.map('inventaire-mapbox', 'mapbox.streets')
    		.setView([37, 16.5], 5);
	
		map.scrollWheelZoom.disable();

		var markers = L.mapbox.featureLayer()
			.setGeoJSON(geojson)
			.addTo(map);	

		map.fitBounds(markers.getBounds(), { padding: L.point(60, 60), maxZoom: maxZoom });
		
		markers.on('click', function(e) {
			if (!$("#inventaire-carte").hasClass('projet')) {
				window.location = e.layer.feature.properties['url'];
			};
		});
		markers.on('mouseover', function(e) {
			e.layer.openPopup();
		});
		markers.on('mouseout', function(e) {
			e.layer.closePopup();
		});

	} else {
		$('#inventaire-carte').remove();
	}
		

});