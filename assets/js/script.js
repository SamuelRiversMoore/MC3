mapboxgl.accessToken = 'pk.eyJ1IjoicGllcnJlcGllcnJlcGllcnJlIiwiYSI6IkdXdE5CRFEifQ.3zLbKVYfHituW8BVU-bl5g';

$( document ).ready(function() {
	if($("#welcome-map").length) {
		var map = new mapboxgl.Map({
			container: 'welcome-map', // container id
			style: 'mapbox://styles/mapbox/streets-v8', //stylesheet location
			center: [19, 38.5], // starting position
			zoom: 3.5 // starting zoom
		});
	}

	$(".slider").slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		centerMode: true,
		variableWidth: true,
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