function initMap() {
  var locbena = {lat: 38.9804735, lng: -8.8093199};
  var map = new google.maps.Map(
  document.getElementById('map'), {zoom: 18, center: locbena});
  var marker = new google.maps.Marker({position: locbena, map: map});
}
