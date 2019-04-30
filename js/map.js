$(document).ready(function() {
   var mymap = L.map('mapid').setView([40.7753012, -8.5903603], 16);
   var polygon = L.polygon([
      [40.775716, -8.590192],
      [40.774996, -8.589500],
      [40.774680, -8.590063],
      [40.775402, -8.590762]
   ]).addTo(mymap);
   var marker = L.marker([40.7753012, -8.5903603]).addTo(mymap);
   marker.bindPopup("<b>Sopais - Componentes Metálicos</b><br>Eco-Parque Empresarial Estarreja<br>Rua de Canelas, nº3<br>3860-529 Estarreja, Portugal").openPopup();
   polygon.bindPopup("<b>Sopais - Componentes Metálicos</b><br>Eco-Parque Empresarial Estarreja<br>Rua de Canelas, nº3<br>3860-529 Estarreja, Portugal").openPopup();
   L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 16,
      id: 'mapbox.streets',
      accessToken: 'pk.eyJ1IjoibXVoZG8iLCJhIjoiY2p1dXlhbGFqMGx5eDN5b2c3dTIyaGlkYSJ9.iRKo275Y3ABiBiYrn9ngvw'
   }).addTo(mymap);
});
