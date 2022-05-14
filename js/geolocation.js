const showBtn = document.getElementById('showLocation');
const longitude = document.querySelector('.longitude');
const latitude = document.querySelector('.latitude');

function getLocation() {
  
    try {
        if (navigator.geolocation) {
            navigator.geolocation.watchPosition(showPosition);
          } 
    } catch (error) {
        latitude.innerHTML = "Geolocation is not supported by this browser.";
    }
}
    
function showPosition(position) {
      latitude.innerHTML = "Latitude: " + position.coords.latitude;
      longitude.innerHTML = "Longitude: " + position.coords.longitude;
}

showBtn.addEventListener('click', getLocation);
