{
  'use strict';
  console.log("position.js");

  var map;
  var marker;
  var latlng;
  var geocoder; 


    function get_position() {
        
        navigator.geolocation.getCurrentPosition(get_map);
    }
    
    function get_map(position) {
    
        var geo_text = "緯度:" + position.coords.latitude + "\n";
        geo_text += "経度:" + position.coords.longitude + "\n";
        geo_text += "高度:" + position.coords.altitude + "\n";
        geo_text += "位置精度:" + position.coords.accuracy + "\n";
        geo_text += "高度精度:" + position.coords.altitudeAccuracy  + "\n";
        geo_text += "移動方向:" + position.coords.heading + "\n";
        geo_text += "速度:" + position.coords.speed + "\n";
    
        var date = new Date(position.timestamp);
    
        geo_text += "取得時刻:" + date.toLocaleString() + "\n";
        
        //alert(geo_text);
        latlng = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);

        initMap(latlng);

        initMarker(map);
        
        
        initGeocorder(latlng);
    }

    
    function initMap(latlng) {
      map = new google.maps.Map(document.getElementById('map'), {
        center: latlng,
        zoom: 15
      });
      console.log("緯度:%f  経度:%f",latlng.lat(),latlng.lng());
    }

    
    function initMarker(map){
      marker = new google.maps.Marker(
      {
        position: map.getCenter(),
        map: map,
        title: '現在地'
      });
    }

    
      function initGeocorder(latlng){
        console.log("geocoder呼び出し");
        geocoder = new google.maps.Geocoder();
        geocoder.geocode({'location':latlng},function(results,status){
          if (status === 'OK') {
            if (results[0]) {
              var ad = results[0].formatted_address;
              ad = ad.replace("日本、","");
              document.getElementById("address").innerHTML = ad;
              //infowindow.setContent(results[0].formatted_address);
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
      }

    
}