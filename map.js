var map;
var marker;
// Assuming the code you provided has already been executed and the map and marker are initialized.



function initMap() {
    map = L.map('map').setView([0, 0], 8);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
    }).addTo(map);

    marker = L.marker([0, 0], {
        draggable: true
    }).addTo(map);

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var latlng = L.latLng(position.coords.latitude, position.coords.longitude);
            marker.setLatLng(latlng);
            map.setView(latlng, 15); 
            updateAddress(latlng);
        });
    }

    map.on("click", function (event) {
        marker.setLatLng(event.latlng);
        updateAddress(event.latlng);
    });

   var locateButton = L.control({ position: 'topright' });

locateButton.onAdd = function (map) {
    var buttonContainer = L.DomUtil.create('div', 'locate-button');
    var button = L.DomUtil.create('button', '', buttonContainer);
    var icon = L.DomUtil.create('i', 'fa-solid fa-location-crosshairs', button);
    button.addEventListener('click', locate);
    return buttonContainer;
};

    locateButton.addTo(map);
}

function locate(event) {
    event.preventDefault(); 
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var latlng = L.latLng(position.coords.latitude, position.coords.longitude);
            marker.setLatLng(latlng);
            map.setView(latlng, 15); 
            updateAddress(latlng);
        });
    }
}
function updateAddress(latlng) {
    
    fetch('https://api.mapbox.com/geocoding/v5/mapbox.places/' + latlng.lng + ',' + latlng.lat + '.json?access_token=pk.eyJ1Ijoic2hpcmVlZjEwIiwiYSI6ImNsanh4dnBzYzAyYmIzZHFjcm9oYXliaGwifQ.Xl0M1m5oy7apBAd5kUimug')

    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      var address = data.features[0].place_name;
      document.getElementById('address').value = address;

      // Set the x (longitude) and y (latitude) values in the input fields
      document.getElementById('longitude').value = latlng.lng;
      document.getElementById('latitude').value = latlng.lat;
    });
}


document.addEventListener("DOMContentLoaded", initMap);
