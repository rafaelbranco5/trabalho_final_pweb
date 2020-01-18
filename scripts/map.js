function initMap() {
  var camposol = {lat: 38.9765247, lng: -8.811222};
  var campocam = {lat: 38.9789635, lng: -8.8352418};
  var mapsol = new google.maps.Map(document.getElementById('camposol'), {zoom: 14, center: camposol});
  var markercampo = new google.maps.Marker({position: camposol, map: mapsol});
  var smarkercampo = new google.maps.Marker({position: campocam, map: mapsol});
}
