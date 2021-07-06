import L from 'leaflet';

window.renderMap = function (latitude, longitude) {
    const map = L.map('l-map').setView([latitude, longitude], 8);
    L.tileLayer(
        'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}',
        {
            attribution: 'Map data',
            maxZoom: 18,
            id: 'mapbox/navigation-day-v1',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiYW5keXRzOTMiLCJhIjoiY2txcnRpNzlmMTJ4dTMybmI5djg5cWs0dCJ9.3E3Fu451DYTS1IgcnZ2rEw'
        }
    ).addTo(map);
    L.circle([latitude, longitude], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 15000
    }).addTo(map);
}

