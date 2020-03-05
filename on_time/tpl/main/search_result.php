
<!-- <link rel="stylesheet" type="text/css" href="/HEW/garage/css/search_result.css"> -->
<div class="search-container">
<h1>結果</h1>
<div id="map_canvas"></div>           <!-- マップの表示場所 -->
  <button>条件を変える</button>
  <ul>
    <?php for($i=0;$i<10;$i++):?>
    <li class="">
      <div class="result-view">
      <a href="#modal" class="modal">
        <h2>TIMES梅田東梅田東通り前</h2>
        <p>大阪市北区梅田1-1-1</p>
      </a>
      </div>
    </li>
    <?php endfor;?>
  </ul>
</div>

<div id="modal" style="display:none;">
	<p>これはサンプルです。</p>
</div>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>
<script type="text/javascript">
  var map;
  var marker = [];
  var infoWindow = [];
  // マーカーに設定するタイトル・緯度・経度・内容
  var markerData = [ {
      title: 'ステーションシティ西梅田駐車場 駐輪場',
      lat: 34.700376,
      lng: 135.493436,
      content: 'ステーションシティ西梅田駐車場 駐輪場 <br> 〒530-0001 大阪府大阪市北区梅田３丁目２−１８'

}, {
      title: '大和ハウス大阪ビル地下パーキング',
      lat: 34.699429,
      lng: 135.492616,
      content: '大和ハウス大阪ビル地下パーキング <br> 〒530-0001 大阪府大阪市北区梅田３丁目３−５'
    },{
      title: 'ハービスOSAKA駐車場',
      lat: 34.698841,
      lng: 135.492794,
      content: 'ハービスOSAKA駐車場 <br> 〒530-0001 大阪府大阪市北区梅田２丁目５−２５'
    },{
      title: 'THE PARKing 明治安田生命大阪梅田ビル',
      lat: 34.698613,
      lng: 135.491198,
      content: 'THE PARKing 明治安田生命大阪梅田ビル <br> 〒530-0001 大阪府大阪市北区北区梅田３丁目３−２０'
    },{
      title: '大阪ステーションシティ駐車場',
      lat: 34.701679,
      lng: 135.490233,
      content: '大阪ステーションシティ駐車場 <br> 〒530-0001 大阪府大阪市北区梅田３丁目２'
    },{
      title: '第二吉本ビル駐車場（屋内駐車場）',
      lat: 34.699768,
      lng: 135.495264,
      content: '第二吉本ビル駐車場（屋内駐車場） <br> 〒530-0001 大阪府大阪市北区梅田２丁目２−２ B3F'
    },{
      title: 'Dパーキング大阪マルビル（屋内駐車場）',
      lat: 34.699784,
      lng: 135.496677,
      content: 'Dパーキング大阪マルビル（屋内駐車場） <br> 〒530-0001 大阪府大阪市北区梅田１丁目９'
    },{
      title: '大阪駅前駐車場',
      lat: 34.699362,
      lng: 135.497678,
      content: '大阪駅前駐車場 <br> 〒530-0001 大阪府大阪市北区梅田１丁目２'
    }];

 // 地図の作成
  function initMap() {
    // 緯度経度のデータ作成
    var mapLatLng = new google.maps.LatLng({lat: 34.699875, lng: 135.493032});
    // 地図の基本設定
    map = new google.maps.Map(document.getElementById('map_canvas'), {
      center: mapLatLng, // 地図の中心座標を指定
      zoom: 17, // 地図のデフォルトのズーム指定
      mapTypeId: google.maps.MapTypeId.ROADMAP // マップの表示種別選択 (ROADMAP・SATELLITE・TERRAIN・HYBRIDから選択)
    });
    
    // マーカー毎の処理
    for (var i = 0; i < markerData.length; i++) {
      // 緯度経度のデータを作成
      markerLatLng = new google.maps.LatLng({lat: markerData[i]['lat'], lng: markerData[i]['lng']});
      marker[i] = new google.maps.Marker({
        position: markerLatLng, // マーカーを立てる位置を指定
        map: map, // マーカーを立てる地図を指定
        title: markerData[i]['title'] // ツールヒント
      });
      
      // 吹き出しの設定
      infoWindow[i] = new google.maps.InfoWindow({
        // 吹き出しに表示する内容を設定する
        content: markerData[i]['content']
      });
      
      // マーカーにクリックイベントを追加
      markerEvent(i);
    }
  }
   
  // マーカーにクリックイベントを追加
  function markerEvent(i) {
      marker[i].addListener('click', function() {
        // 吹き出しの表示
        infoWindow[i].open(map, marker[i]);
    });
  }
</script>

