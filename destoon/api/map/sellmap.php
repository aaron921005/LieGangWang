<?php ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo DT_CHARSET;?>" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;}
* {font-size:12px;}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=1a9c001b5696345a8a35d25f577a877b"></script>
<title>地址解析</title>
</head>
<body>
<div id="allmap"></div>
</body>
</html>
<script type="text/javascript">
   var opts = {  
   width : 250,     // 信息窗口宽度  
   height: 50,     // 信息窗口高度  
   title : "<b><? echo $_GET['comname']; ?></b>"  // 信息窗口标题  
    }
//创建信息窗口对象
var infoWindow = new BMap.InfoWindow('(<? echo $_GET['address']; ?>)', opts);  // 创建信息窗口对象       
// 百度地图API功能
var map = new BMap.Map("allmap");
var point = new BMap.Point(116.331398,39.897445);
map.centerAndZoom(point,15);
// 创建地址解析器实例
map.enableScrollWheelZoom();                  //启用滚轮放大缩小。
map.enableDoubleClickZoom();                  //启用双击放大。
var myGeo = new BMap.Geocoder();

// 将地址解析结果显示在地图上,并调整地图视野
myGeo.getPoint("<? echo $_GET['address']; ?>", function(point){
  if (point) {
    map.centerAndZoom(point, 15);
    var marker = new BMap.Marker(point);        // 创建标注 
    map.clearOverlays();
    map.addOverlay(marker);
    marker.openInfoWindow(infoWindow);      // 打开信息窗口
    map.addOverlay(new BMap.Marker(point));
  }
}, "<? echo $_GET['chengshi']; ?>");

            function showinfo(zb) {
                var mapobj = mapArray[zb];
                var point = new BMap.Point(mapobj.x, mapobj.y);
                map.centerAndZoom(point, 14);
                var infoWindow = new BMap.InfoWindow(mapobj.newstext, opts);  // 创建信息窗口对象
                var marker = new BMap.Marker(point);        // 创建标注
                map.clearOverlays();
                map.addOverlay(marker);
                marker.openInfoWindow(infoWindow);      // 打开信息窗口
                marker.addEventListener("dragend", function(e){
                    this.openInfoWindow(infoWindow);
                    infoWindow.redraw();
                })
                marker.addEventListener("click", function(e){
                    this.openInfoWindow(infoWindow);
                    infoWindow.redraw();
                })
            }
</script>