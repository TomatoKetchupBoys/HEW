
<link rel="stylesheet" type="text/css" href="/HEW/css/search_result.css">

<h1>結果</h1>
<div id="map"></div>
<p>条件を変える</p>

<script>
    function initMap() {
        var latlng = new google.maps.LatLng( 34.699875,135.4924848,19 );//中心の緯度, 経度
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,//ズームの調整
          center: latlng//上で設定した中心
        });
        var marker = new google.maps.Marker({
          position: latlng,
          map: map
        });
      }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmwWle_A_hFmyC3R96-BWsmXlc-I_FeyA&callback=initMap"></script>

