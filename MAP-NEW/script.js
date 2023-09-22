// Initialize the map
const map = L.map('map').setView([0, 0], 2);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Function to add a marker to the map
function addMarker(lat, lon, name) {
    L.marker([lat, lon]).addTo(map)
        .bindPopup(name)
        .openPopup();
}

// Function to display nearby E-waste facilities
function displayNearbyEWasteFacilities(searchLocation) {
    // Fetch and parse the JSON data (replace with your JSON file path)
    fetch('ewaste_centers.json')
        .then(response => response.json())
        .then(data => {
            // Clear previous markers
            map.eachLayer(layer => {
                if (layer instanceof L.Marker) {
                    map.removeLayer(layer);
                }
            });

            // Loop through the data and add markers for nearby E-waste facilities
            data.forEach(center => {
                const { lat, lon, name } = center;
                const facilityLocation = L.latLng(lat, lon);
                const distance = searchLocation.distanceTo(facilityLocation);

                if (distance <= 10000) { // Adjust the radius as needed
                    addMarker(lat, lon, name);
                }
            });
        })
        .catch(error => {
            console.error('Error loading E-waste facility data:', error);
        });
}

// Function to geocode and display nearby E-waste facilities
function searchLocation() {
    const locationInput = document.getElementById('location-input').value;
    const encodedLocation = encodeURIComponent(locationInput);
    const nominatimUrl = `https://nominatim.openstreetmap.org/search?format=json&q=${encodedLocation}`;

    fetch(nominatimUrl)
        .then(response => response.json())
        .then(data => {
            if (data.length > 0) {
                const result = data[0];
                const { lat, lon } = result;
                map.setView([lat, lon], 12);
                displayNearbyEWasteFacilities(L.latLng(lat, lon));
            } else {
                console.error('Location not found.');
            }
        })
        .catch(error => {
            console.error('Error geocoding location:', error);
        });
}

// Event listener for the search button
const searchButton = document.getElementById('search-button');
searchButton.addEventListener('click', searchLocation);
