mapboxgl.accessToken = 'pk.eyJ1IjoicGllcnJlcGllcnJlcGllcnJlIiwiYSI6IkdXdE5CRFEifQ.3zLbKVYfHituW8BVU-bl5g';

$( document ).ready(function() {
	var map = new mapboxgl.Map({
			container: 'welcome-map', // container id
			style: 'mapbox://styles/mapbox/streets-v8', //stylesheet location
			center: [19, 38.5], // starting position
			zoom: 3.5 // starting zoom
	});
});