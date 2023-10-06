    var map2; // New map variable
    var marker2; // New marker variable

function initMap2() {
    map2 = L.map('map2').setView([0, 0], 8);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
        }).addTo(map2);

        marker2 = L.marker([0, 0], {
            draggable: true
        }).addTo(map2);

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var latlng = L.latLng(position.coords.latitude, position.coords.longitude);
                marker2.setLatLng(latlng);
                map2.setView(latlng, 15);
                updateAddress2(latlng);
            });
        }

        map2.on("click", function (event) {
            marker2.setLatLng(event.latlng);
            updateAddress2(event.latlng);
        });

        var locateButton2 = L.control({ position: 'topright' });

        locateButton2.onAdd = function (map2) {
            var buttonContainer = L.DomUtil.create('div', 'locate-button');
            var button = L.DomUtil.create('button', '', buttonContainer);
            var icon = L.DomUtil.create('i', 'fa-solid fa-location-crosshairs', button);
            button.addEventListener('click', locate2);
            return buttonContainer;
        };

        locateButton2.addTo(map2);
    }

    function locate2(event) {
        event.preventDefault();
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var latlng = L.latLng(position.coords.latitude, position.coords.longitude);
                marker2.setLatLng(latlng);
                map2.setView(latlng, 15);
                updateAddress2(latlng);
            });
        }
    }

    function updateAddress2(latlng) {
        fetch('https://api.mapbox.com/geocoding/v5/mapbox.places/' + latlng.lng + ',' + latlng.lat + '.json?access_token=pk.eyJ1Ijoic2hpcmVlZjEwIiwiYSI6ImNsanh4dnBzYzAyYmIzZHFjcm9oYXliaGwifQ.Xl0M1m5oy7apBAd5kUimug')
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            var address = data.features[0].place_name;
            document.getElementById('address').value = address;

            document.getElementById('long2').value = latlng.lng;
            document.getElementById('lat2').value = latlng.lat;
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        // initMap(); // Initialize the existing map
        initMap2(); // Initialize the new map when the page loads
    });