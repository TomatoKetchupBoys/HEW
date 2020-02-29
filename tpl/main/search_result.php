
<link rel="stylesheet" type="text/css" href="/HEW/css/search_result.css">

<h1>結果</h1>
<div id="map"></div>            <!-- マップの表示場所 -->
<button>条件を変える</button>
<a href=""><p>TIMES梅田東梅田東通り前 大阪市北区梅田1-1-1</p></a>

<script>
    function initMap() {
        var latlng = new google.maps.LatLng( 34.699875,135.4924848,19 );    //中心の緯度, 経度のちに変数に変更
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,         //ズームの調整
          center: latlng    //上で設定した中心
        });
        var marker = new google.maps.Marker({
          position: latlng,
          map: map,
          animation: google.maps.Animation.DROP
        });
      }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmwWle_A_hFmyC3R96-BWsmXlc-I_FeyA&callback=initMap"></script>

