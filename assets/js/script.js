mapboxgl.accessToken = 'pk.eyJ1IjoicGllcnJlcGllcnJlcGllcnJlIiwiYSI6IkdXdE5CRFEifQ.3zLbKVYfHituW8BVU-bl5g';

$( document ).ready(function() {

/* Init Mapbox */

	if($("#welcome-map").length) {
		var map = new mapboxgl.Map({
			container: 'welcome-map', // container id
			style: 'mapbox://styles/mapbox/streets-v8', //stylesheet location
			center: [19, 38.5], // starting position
			zoom: 3.5, // starting zoom
			interactive: false
		});
	}
	
	if($("#inventaire-mapbox").length) {
		var map = new mapboxgl.Map({
			container: 'inventaire-mapbox', // container id
			style: 'mapbox://styles/mapbox/streets-v8', //stylesheet location
			center: [19, 38.5], // starting position
			zoom: 3.5 // starting zoom
		});
	}

console.log(geojson);


map.on('style.load', function () {
    map.addSource("markers", geojson );

    map.addLayer({
        "id": "markers",
        "type": "symbol",
        "source": "markers",
        "interactive": true,
        "layout": {
            "icon-image": "{marker-symbol}-15",
            "text-field": "{title}",
            "text-font": ["Open Sans Semibold", "Arial Unicode MS Bold"],
            "text-offset": [0, 0.6],
            "text-anchor": "top"
        },
        "paint": {
            "text-size": 12
        }
    });
});

map.on('click', function(e) {
    map.featuresAt(e.point, {layer: 'markers', radius: 10, includeGeometry: true}, function (err, features) {
        if (err) throw err;
        // if there are features within the given radius of the click event,
        // fly to the location of the click event
        if (features.length) {
            markerUrl = features[0]['properties']['url'];
            window.location.href = markerUrl;
        }
    });
});
map.on('mousemove', function (e) {
    map.featuresAt(e.point, {layer: 'markers', radius: 10}, function (err, features) {
        if (err) throw err;
        map.getCanvas().style.cursor = features.length ? "pointer" : "";
    });
});


/* slickers */

	$(".slider").slick({
		dots: true,
		infinite: true,
		speed: 300,
		//slidesToShow: 1,
		//centerMode: true,
		//variableWidth: true,
		prevArrow: '<img class="slider-arrow-left" src="assets/images/arrow-left.png">',
		nextArrow: '<img class="slider-arrow-right" src="assets/images/arrow-right.png">'
	});
	
	if($("#inventaire-tabs").length) {
		$('#inventaire-tabs>ul>li>a').click(function(){
			var selectTab = $(this).attr('href');
			$('#inventaire-tabs>ul>li').removeClass('selected');
			$(this).parent('li').addClass('selected');
			$('#inventaire-tabs>div').hide();
			$('#inventaire-tabs>div'+selectTab).show();
		})
		if(window.location.hash.substring(0, 5) == "#tab-") {
			var tabNum = parseInt(window.location.hash.substring(5)) - 1;
			$("#inventaire-tabs>ul>li").eq(tabNum).children('a').click();
			console.log($("#inventaire-tabs>ul>li").eq(tabNum).children('a'))
		} else {
			$("#inventaire-tabs>ul>li").first().children('a').click();
		}
	}
});