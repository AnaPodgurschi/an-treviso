export default function streetMap() {
	const coords = [44.10028709263609, 12.193538915361545];
	const marker_url = 'ar-cfp';
	const addressText = 'Sede Operativa: Via Giacomo Brodolini';

	let map = L.map('map').setView(coords, 17);

	let myIcon = L.icon({
		iconUrl: '/wp-content/themes/' + marker_url + '/assets/i/static/map-icon.png',
		iconSize: [38, 38],
		iconAnchor: [38, 38],
		shadowSize: [68, 95],
		shadowAnchor: [22, 94]
	});

	L.marker(coords, {icon: myIcon})
		.bindTooltip(addressText, {
            direction: 'right',
            offset: [-10, -30],
            permanent: false,
        })
		.addTo(map)

	L.tileLayer(
		'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}',
		{
			attribution:
				'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			maxZoom: 24,
			icon: "/wp-content/themes/" + marker_url + "/assets/i/static/marker-icon.png",
			id: 'mapbox/streets-v11',
			tileSize: 512,
			zoomOffset: -1,
			accessToken:
				'pk.eyJ1IjoiYmx1ZGVsZWdvIiwiYSI6ImNrdjJkM3EwZzBiZzkydXMzbTZ1d3I3YnEifQ.UcO5wDKFiFDPQ6M8U7-byg',
		}
	).addTo(map);
}
