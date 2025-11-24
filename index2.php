

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<link rel="SHORTCUT ICON" href="http://www.360.bg/favicon.ico"> 
	<title>360 градусови панорамни снимки - панорами от България</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<meta name="keywords" Content="360, снимки, България, photos, snimki, панорами, панорамни снимки">
	<meta name="description" Content="360 градусови панорамни снимки от България, София, Варна, Пловдив, Бургас ..., 360 degree panoramic photos from Bulgaria, Sofia, Varna, Plovdiv, Burgas...">
	<link rel="image_src" href="http://www.360.bg/thumb/plaj-mini.jpg">

	 <script type="text/javascript">
	function checkAll(obj)
	{
	var checkBoxes = document.getElementsByTagName('input');
	for (i = 0; i < checkBoxes.length; i++)
	{
	if (obj.checked == true)
	{
	checkBoxes[i].checked = true;
	}
	else
	{
	checkBoxes[i].checked = false;
	}
	}
	}
	</script>

    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAEl7pBECoRbQfZ22NqnnUFhRoyovmHuZzNGgVu8URjBypWrGggBRPQ7jylcLoA_7h7L89YVVRF8BrDA&amp;oe=windows-1251"
      type="text/javascript"></script>
    <script type="text/javascript">
	    //<![CDATA[
	var map = null;
    var geocoder = null;
	var js_fromuser_lat = "42.694169";
	var js_fromuser_lat_scrolled = "42.705169";
	var js_fromuser_lat_scrolled_init = "42.716169";
	var js_fromuser_lon = "23.331977";
	var js_fromuser_mymap = "rl.xml";
	var result_lat = js_fromuser_lat;
	var result_lon = js_fromuser_lon;
	var tempstring1 = null;
	var tempstring2 = null;

function TileToQuadKey ( x, y, zoom){
    var quad = "";
    for (var i = zoom; i > 0; i--){
        var mask = 1 << (i - 1);
        var cell = 0;
        if ((x & mask) != 0)
            cell++;
        if ((y & mask) != 0)
            cell += 2;
        quad += cell;
    }
    return quad;
}


	function load(i) 
	{
     if (GBrowserIsCompatible()) 
	 {
	 	map = new GMap2(document.getElementById("map"));
	 	geocoder = new GClientGeocoder();
	 	geocoder.setBaseCountryCode("bg");
		var begeragusTiles = function (a,b) {			    
			var f = "http://www.360.bg/tileslat/Z" + b + "/" + a.y + "_" + a.x + ".png";
			return f;
		}
		var begeragusBGtiles = function(a,b) {
			var f = "http://www.360.bg/bgtile/bgtile-gray-purple.png";
				return f;

		}
		var begeragusTilesbg  = function(a,b) {
			var f = "http://www.360.bg/tilesbg/Z" + b + "/" + a.y + "_" + a.x + ".png";
			return f;

		}
	map.addMapType(G_SATELLITE_MAP);
 var begeragusHybridLayer = new Array();
 begeragusHybridLayer[0] = new GTileLayer(new GCopyrightCollection('') , 12, 18);
// begeragusHybridLayer[0].getTileUrl = begeragusTiles;
 begeragusHybridLayer[0].getCopyright = function(a,b) {return "<a href='http://www.360.bg' style=\"color: rgb(256,256,256); text-decoration : underline\"> 360.bg<\/a> 2008, <a href='http://www.topomaps.info' style='color: rgb(256,256,256); text-decoration : underline' > BgTopoMaps <\/a> Imagery 2008 DigitalGlobe";};
 begeragusHybridLayer[1] = G_SATELLITE_MAP.getTileLayers()[0];
 begeragusHybridLayer[2] = new GTileLayer(new GCopyrightCollection('') , 12, 18);
 begeragusHybridLayer[2].getTileUrl = begeragusTiles;
// begeragusHybridLayer[2].getCopyright = function(a,b) {return "<a href='http://www.360.bg' style=\"color: rgb(256,256,256); text-decoration : underline\"> 360.bg<\/a> 2008, <a href='http://www.topomaps.info' style='color: rgb(256,256,256); text-decoration : underline' > BgTopoMaps <\/a> Imagery 2008 DigitalGlobe ";};
// begeragusHybridLayer[1].getOpacity = function () {return 0.6;}; //of the non transparent part cave


 var begeragusSatMap = new GMapType(begeragusHybridLayer, G_SATELLITE_MAP.getProjection(), 'Streets/Sat',{errorMessage:"", alt:"Show imagery with BG streets"}); 
 begeragusSatMap.getTextColor = function() {return "#FFFFFF";};


 var begeragusHybridLayerbg = new Array();
 begeragusHybridLayerbg[0] = new GTileLayer(new GCopyrightCollection('') , 12, 18);
// begeragusHybridLayer[0].getTileUrl = begeragusTilesbg;
 begeragusHybridLayerbg[0].getCopyright = function(a,b) {return "<a href='http://www.360.bg' style=\"color: rgb(256,256,256); text-decoration : underline\"> 360.bg<\/a> 2008, <a href='http://www.topomaps.info' style='color: rgb(256,256,256); text-decoration : underline' > BgTopoMaps <\/a> Imagery 2008 DigitalGlobe";};
 begeragusHybridLayerbg[1] = G_SATELLITE_MAP.getTileLayers()[0];
 begeragusHybridLayerbg[2] = new GTileLayer(new GCopyrightCollection('') , 12, 18);
 begeragusHybridLayerbg[2].getTileUrl = begeragusTilesbg;
// begeragusHybridLayer[2].getCopyright = function(a,b) {return "<a href='http://www.360.bg' style=\"color: rgb(256,256,256); text-decoration : underline\"> 360.bg<\/a> 2008, <a href='http://www.topomaps.info' style='color: rgb(256,256,256); text-decoration : underline' > BgTopoMaps <\/a> Imagery 2008 DigitalGlobe ";};
// begeragusHybridLayer[1].getOpacity = function () {return 0.6;}; //of the non transparent part cave


 var begeragusSatMapbg = new GMapType(begeragusHybridLayerbg, G_SATELLITE_MAP.getProjection(), 'Улици/Sat',{errorMessage:"", alt:"Show imagery with BG streets"}); 
 begeragusSatMapbg.getTextColor = function() {return "#FFFFFF";};



var begeragusMapLayer = new Array();
begeragusMapLayer[0] = new GTileLayer(new GCopyrightCollection('') , 5, 18);
 begeragusMapLayer[0].getCopyright = function(a,b) {return "<a href='http://www.360.bg' style=\"color: rgb(256,256,256); text-decoration : underline\"> 360.bg<\/a> 2008";};
begeragusMapLayer[0].getTileUrl = begeragusBGtiles;
begeragusMapLayer[1] = new GTileLayer(new GCopyrightCollection('') , 5, 18);
begeragusMapLayer[1].getTileUrl = begeragusTiles;
var begeragusMap = new GMapType(begeragusMapLayer, G_SATELLITE_MAP.getProjection(), 'BG Streets',{errorMessage:"", alt:"Show BG streets Map"}); 

var begeragusMapLayerbg = new Array();
begeragusMapLayerbg[0] = new GTileLayer(new GCopyrightCollection('') , 5, 18);
 begeragusMapLayerbg[0].getCopyright = function(a,b) {return "<a href='http://www.360.bg' style=\"color: rgb(256,256,256); text-decoration : underline\"> 360.bg<\/a> 2008";};
begeragusMapLayerbg[0].getTileUrl = begeragusBGtiles;
begeragusMapLayerbg[1] = new GTileLayer(new GCopyrightCollection('') , 5, 18);
begeragusMapLayerbg[1].getTileUrl = begeragusTilesbg;
var begeragusMapbg = new GMapType(begeragusMapLayerbg, G_SATELLITE_MAP.getProjection(), 'БГ Улици',{errorMessage:"", alt:"Show BG streets Map"}); 


var copycol = new GCopyrightCollection("");
        var copy = new GCopyright(1, new GLatLngBounds(new GLatLng(-90,-180),new GLatLng(90,180)), 0, "&copy;2007 <a href='http://www.openstreetmap.org>OpenStreetMap<\/a> contributors");
        copycol.addCopyright(copy);
        var tileMapnik = new GTileLayer(copycol,1,18);
        tileMapnik.myBaseURL = "http://tile.openstreetmap.org/";
        tileMapnik.getTileUrl = function (a,b,c) {return "http://tile.openstreetmap.org/" + "/mapnik_tiles/" + b + "/" + a.x + "/" + a.y + ".png";};
        tileMapnik.isPng = function () { return true;}
        tileMapnik.getOpacity = function() {return 1.0;}
        var layer0 = [tileMapnik];
        var mapnikMap = new GMapType(layer0, G_SATELLITE_MAP.getProjection(), "OpenSM", {errorMessage:"", alt:"Show Open Street Map"});

	map.addMapType(begeragusMap);	         
	map.addMapType(begeragusMapbg);	         
	map.addMapType(begeragusSatMap); 
      	map.addMapType(begeragusSatMapbg); 
        map.addMapType(mapnikMap);


 map.addMapType(G_PHYSICAL_MAP);
 var skyVisibleMap = new GMapType(G_SKY_VISIBLE_MAP.getTileLayers(), G_SKY_VISIBLE_MAP.getProjection(), 'Sky Visible', {errorMessage:"", alt:"Show visible sky Map"});
 map.addMapType(skyVisibleMap);
 var moonElevationMap = new GMapType(G_MOON_ELEVATION_MAP.getTileLayers(), G_MOON_ELEVATION_MAP.getProjection(), 'Moon Elevati', {errorMessage:"", alt:"Show Moon Elevation Map"});
 map.addMapType(moonElevationMap);
var moonVisibleMap = new GMapType(G_MOON_VISIBLE_MAP.getTileLayers(), G_MOON_VISIBLE_MAP.getProjection(), 'Moon Visible', {errorMessage:"", alt:"Show Moon Visible Map"});
map.addMapType(moonVisibleMap);
var marsElevationMap = new GMapType(G_MARS_ELEVATION_MAP.getTileLayers(), G_MARS_ELEVATION_MAP.getProjection(), 'Mars Elevati', {errorMessage:"", alt:"Show Mars Elevation Map"});
	 map.addMapType(marsElevationMap);
var marsVisibleMap = new GMapType(G_MARS_VISIBLE_MAP.getTileLayers(), G_MARS_VISIBLE_MAP.getProjection(), 'Mars Visible', {errorMessage:"", alt:"Show Mars Visible Map"});
map.addMapType(marsVisibleMap);
var marsInfraredMap = new GMapType(G_MARS_INFRARED_MAP.getTileLayers(), G_MARS_INFRARED_MAP.getProjection(), 'Mars Infrared', {errorMessage:"", alt:"Show Mars Infrared Map"});

	 map.addMapType(marsInfraredMap);


 var hc = new GMenuMapTypeControl();
 //var hc = new GHierarchicalMapTypeControl();
	//	hc.addRelationship(G_SATELLITE_MAP, begeragusSatMap , "BG Streets");

	
 map.addControl(new GLargeMapControl());
 map.addControl(hc);
 

 map.addControl(new GScaleControl());
 map.getPane(G_MAP_FLOAT_SHADOW_PANE).style.display="none";				
//map.getPane(G_MAP_MARKER_PANE).style.display="none"; 
// map.addControl(new GOverviewMapControl());

map.setCenter(new GLatLng(js_fromuser_lat_scrolled_init, js_fromuser_lon), 13);		new GKeyboardHandler(map);
				map.setMapType(G_NORMAL_MAP);
 
		tempstring2="<a href=\"/index2.php?lat=" + result_lat + "&lon=" + result_lon +"\">| Вземи линк | <\/a>";
		//		document.getElementById("message").innerHTML = tempstring2;
		//


 

//			var icon = new GIcon();
//			icon.image = "icon/0.png";
//			icon.iconSize = new GSize(12, 20);
//			icon.iconAnchor = new GPoint(6, 20);
//			icon.infoWindowAnchor = new GPoint(5, 1);

	
		
		
//		icon.shadow = "http://360.bg/mm_20_shadow.png";
		
//		icon.shadowSize = new GSize(22, 20);

			GEvent.addListener(map, "maptypechanged", function() 
			{
		//  		var center = map.getCenter();
				//  		document.getElementById("message").innerHTML = center.toString();
				if(map.getCurrentMapType() == moonElevationMap 
					|| map.getCurrentMapType() == moonVisibleMap
					|| map.getCurrentMapType() == marsElevationMap
					|| map.getCurrentMapType() == marsVisibleMap
					|| map.getCurrentMapType() == marsInfraredMap
					|| map.getCurrentMapType() == skyVisibleMap

				)
				{
					map.getPane(G_MAP_MARKER_PANE).style.display="none";
				}
				else
				{
				map.getPane(G_MAP_MARKER_PANE).style.display="";
				}
			});

		GEvent.addListener(map,"click", function(overlay,point) 
		{
			if(overlay)
			{
				//document.getElementById("message").innerHTML = overlay.getPoint();
				tempstring1=String(overlay.getPoint());
				whereiscomma=tempstring1.indexOf(",");
				whereisend=tempstring1.indexOf("\)");
				result_lat=tempstring1.slice(1,whereiscomma);
				result_lon=tempstring1.slice(whereiscomma+2, whereisend);
	  			//document.getElementById("message").innerHTML = result_lat;
	  			//document.getElementById("message").innerHTML = result_lon;
				tempstring1="<a href=\"/index2.php?lat=" + result_lat + "&lon=" + result_lon +"\">| Вземи линк | <\/a> <a href=\"upload_get_file.php?lat=" + result_lat + "&lon=" + result_lon +"\"> Качи панорама | <\/a>";
//				document.getElementById("message").innerHTML = tempstring1;
			}
			else if (point)
			{
				
				//document.getElementById("message").innerHTML = point;
				tempstring1=String(point);
				whereiscomma=tempstring1.indexOf(",");
				whereisend=tempstring1.indexOf("\)");
				result_lat=tempstring1.slice(1,whereiscomma);
				result_lon=tempstring1.slice(whereiscomma+2, whereisend);
				map.openInfoWindowHtml(point, "<a href=\"/index2.php?lat=" + result_lat + "&lon=" + result_lon +"\" style=\"color: rgb(33,33,256); text-decoration : underline\">Вземи линк от тази точка<\/a>  <br> 											   <a href=\"upload2d_get_file.php?lat=" + result_lat + "&lon=" + result_lon +"\" style=\"color: rgb(33,33,256); text-decoration : underline\"> Качи снимка тук<\/a> <br>											   <a href=\"upload_get_file.php?lat=" + result_lat + "&lon=" + result_lon +"\" style=\"color: rgb(33,33,256); text-decoration : underline\"> Качи панорама тук<\/a> <br>  <a href=\" upload_tag_get_data.php?lat=" + result_lat + "&lon=" + result_lon +"\" style=\"color: rgb(33,33,256); text-decoration : underline\"> Качи описание тук<\/a> ");
	  		//	document.getElementById("message").innerHTML = result_lat;
	  		//	document.getElementById("message").innerHTML = result_lon;
				tempstring1="<a href=\"/index2.php?lat=" + result_lat + "&lon=" + result_lon +"\">| Вземи линк | <\/a> <a href=\"upload_get_file.php?lat=" + result_lat + "&lon=" + result_lon +"\"> Качи панорама | <\/a>";
//				document.getElementById("message").innerHTML = tempstring1;
				  
			}
		});

        // Creates a marker at the given point with the given number label
        function createMarker(point, number, link, var_icon_num) 
	{
			var micon = new GIcon();
			micon.image = "icon/" + var_icon_num + ".png";
			if (var_icon_num<3) {micon.iconSize = new GSize(12, 20); micon.imageMap = [0,0, 1,19, 11,18, 11,0, 1,1, 0,0];} else {micon.iconSize = new GSize(32, 32); micon.imageMap = [2,3, 2,31, 30,30, 30,1, 0,2, 2,3];}
			micon.iconAnchor = new GPoint(6, 20);
			micon.infoWindowAnchor = new GPoint(5, 1);

          	var marker = new GMarker(point, micon);
          	GEvent.addListener(marker, "click", function() 
			{
				marker.openInfoWindowHtml(
				  "<iframe src=\"" + link + "\"height=\"285\" width=\"579\" frameborder=\"0\" scrolling=\"no\"> Your browser does not understand IFrames. Try another browser<\/iframe>");
	    	} );
        	return marker;
        }

////////////////dddddddddddd/////////////
var point1 = new GLatLng("42.694169","23.331977");
var mlink="/pano/DSCN0232.htm";
map.openInfoWindowHtml(point1, 
	"<iframe src=\"" + mlink + "\"height=\"285\" width=\"579\" frameborder=\"0\" scrolling=\"no\"> Your browser does not understand IFrames. Try another browser<\/iframe>");
///////////////dddddddddddd///////////////

        // Add 10 markers to the map at random locations     
		var bounds = map.getBounds();
        var southWest = bounds.getSouthWest();
        var northEast = bounds.getNorthEast();
		var lngSpan = northEast.lng() - southWest.lng()+4;
		var latSpan = northEast.lat() - southWest.lat();
		var batch = [];
		var batchzl1 = [];
		var batchzl2 = [];
		var batchzl3 = [];
		var batchzl4 = [];
		var batchzl5 = [];
		var batchzl6 = [];
		var batchzl7 = [];
		var batchzl8 = [];
		var batchzl9 = [];
		var batchzl10 = [];
		var batchzl11 = [];
		var batchzl12 = [];
		var batchzl13 = [];
		var batchzl14 = [];
		var batchzl15 = [];
		var batchzl16 = [];
		var batchzl17 = [];
		var batchzl18 = [];
		var batchzl19 = [];
		var batchzl20 = [];
		var batchzl21 = [];
		var batchzl22 = [];
		var batchzl23 = [];

		var mgrOptions = { borderPadding: 0, maxZoom: 18, trackMarkers: false };
		mgr = new GMarkerManager(map, mgrOptions);

		GDownloadUrl(js_fromuser_mymap, function(data, responseCode) 
		{
			var infoopened = 0;
			var pointFU = new GLatLng(js_fromuser_lat, js_fromuser_lon);
			var xml = null;
			xml = GXml.parse(data);
	  		var xmarkers = xml.documentElement.getElementsByTagName("marker");
	  		for (var i = 0; i < xmarkers.length; i++) 
			{
	    		var point = new GLatLng(parseFloat(xmarkers[i].getAttribute("lat")),
			    parseFloat(xmarkers[i].getAttribute("lon")));
		    	var xlink = xmarkers[i].getAttribute("link");  
		       var xid = xmarkers[i].getAttribute("id");
			var xzl = xmarkers[i].getAttribute("zl");
			var xic = xmarkers[i].getAttribute("ic");
			var nmarker = createMarker(point, xid, xlink, xic);
			if (xzl == '1') 
			{
			batchzl1.push(nmarker);
			}
			else if(xzl == '2')
			{
			batchzl2.push(nmarker);
			}
			else if(xzl == '3')
			{
			batchzl3.push(nmarker);
			}
			else if(xzl == '4')
			{
			batchzl4.push(nmarker);
			}
			else if(xzl == '5')
			{
			batchzl5.push(nmarker);
			}
			else if(xzl == '6')
			{
			batchzl6.push(nmarker);
			}
			else if(xzl == '7')
			{
			batchzl7.push(nmarker);
			}
			else if(xzl == '8')
			{
			batchzl8.push(nmarker);
			}
			else if(xzl == '9')
			{
			batchzl9.push(nmarker);
			}
			else if(xzl == '10')
			{
			batchzl10.push(nmarker);
			}
			else if(xzl == '11')
			{
			batchzl11.push(nmarker);
			}
			else if(xzl == '12')
			{
			batchzl12.push(nmarker);
			}
			else if(xzl == '13')
			{
			batchzl13.push(nmarker);
			}
			else if(xzl == '14')
			{
			batchzl14.push(nmarker);
			}
			else if(xzl == '15')
			{
			batchzl15.push(nmarker);
			}
			else if(xzl == '16')
			{
			batchzl16.push(nmarker);
			}
			else if(xzl == '17')
			{
			batchzl17.push(nmarker);
			}
			else if(xzl == '18')
			{
			batchzl18.push(nmarker);
			}
			else if(xzl == '19')
			{
			batchzl19.push(nmarker);
			}
			else if(xzl == '20')
			{
			batchzl20.push(nmarker);
			}
			else if(xzl == '21')
			{
			batchzl21.push(nmarker);
			}
			else if(xzl == '22')
			{
			batchzl22.push(nmarker);
			}
			else if(xzl == '23')
			{
			batchzl23.push(nmarker);
			}
			else
			{
			batch14.push(nmarker);	
			}
			if(js_fromuser_lat) 
			{
			if((point.lat() == js_fromuser_lat) && (point.lng() == js_fromuser_lon))
			{
						}
			else {
				if (infoopened == 0)
				{
					infoopened = 1;
 								}
				}
	
			}
			
		}
		mgr.addMarkers(batchzl1, 1);
		mgr.addMarkers(batchzl2, 2);
		mgr.addMarkers(batchzl3, 3);
		mgr.addMarkers(batchzl4, 4);
		mgr.addMarkers(batchzl5, 5);
		mgr.addMarkers(batchzl6, 6);
		mgr.addMarkers(batchzl7, 7);
		mgr.addMarkers(batchzl8, 8);
		mgr.addMarkers(batchzl9, 9);
		mgr.addMarkers(batchzl10, 10);
		mgr.addMarkers(batchzl11, 11);
		mgr.addMarkers(batchzl12, 12);
		mgr.addMarkers(batchzl13, 13);
		mgr.addMarkers(batchzl14, 14);
		mgr.addMarkers(batchzl15, 15);
		mgr.addMarkers(batchzl16, 16);
		mgr.addMarkers(batchzl17, 17);
		mgr.addMarkers(batchzl18, 18);
		mgr.addMarkers(batchzl19, 19);
		mgr.addMarkers(batchzl20, 20);
		mgr.addMarkers(batchzl21, 21);
		mgr.addMarkers(batchzl22, 22);
		mgr.addMarkers(batchzl23, 23);
	    	mgr.refresh();
			
//marker[0].click
		
			
    	});
}

}
function hideallmarkers()
{

for (var i=0; i<batchzl13.length; i++) {
      batchzl13[i].hide();
    } 


}

    function showAddress(address) {
      if (geocoder) {
        geocoder.getLatLng(
          address,
          function(point) {
            if (!point) {
              alert(address + " not found");
            } else {
              map.setCenter(point, 13);
              //var marker = new GMarker(point);
              //map.addOverlay(marker);
	      map.openInfoWindowHtml(point, address);
            }
          }
        );
      }
    }

    //]]>
    </script>



<STYLE type="text/css" >A:link {
	TEXT-DECORATION: none
}

A:visited {
	TEXT-DECORATION: none
}
</STYLE>
<div style="position: absolute; top: 0; left: 0; white-space: nowrap;">
<img src="headlogo-300nd.png" alt="logo">
</div>

</head>

<body onload="load()" onunload="GUnload()" style="margin-top: 0px; margin-right: 0px; margin-left: 0px" link="#333333" vlink="#333333" alink="#C0C0C0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td valign="top" bgcolor="#2696B8"><img src="images/L2_top1.gif" width="19" height="2" alt="панорами"></td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" BGCOLOR="silver">
  <tr> 
    <td width="58%">

<div style="position: absolute; top: 0; left: 100; white-space: nowrap;">
	
<h1 style="margin:0px; padding:0px;"> <font  color="#333333"  face="Impact">Панорамни снимки от България</font></h1>


</div>
    </td>
    <td width="35%" valign="top"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
        	<tr valign="top"> 
          		<td width="23%" height="25"> <div align="right"><img src="images/L2_top2.gif" width="27" height="25" alt="панорама"></div></td>
          		<td width="77%" bgcolor="#31404E"><img src="images/L2_top5.gif" width="8" height="23" alt="снимки"></td>
        	</tr>
	</table>
2264 <b>панорами</b> към 29 юли 2008
	</td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="height: 19px;">
  <tr> 
    <td valign="top" bgcolor="#31404E" height="19"> 
	    <div align="center" style="position: relative;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="bodytxt">&nbsp;<b>
			<a href="http://www.360.bg">						<font color="#FFFFFF" face="Verdana" size="1">Начало</font>		</a><font color="#FFFFFF" face="Verdana" size="1"> | </font>
			<a href="http://www.360.bg/frontp_services_bg.php">	<font color="#FFFFFF" face="Verdana" size="1">Услуги</font>		</a><font color="#FFFFFF" face="Verdana" size="1"> | </font>
			<a href="http://www.360.bg/forum/">					<font color="#FFFFFF" face="Verdana" size="1">Форум</font>		</a><font color="#FFFFFF" face="Verdana" size="1"> | </font>
			<a href="http://www.360.bg/vt/">					<font color="#FFFFFF" face="Verdana" size="1">Виртуални разходки</font>		</a><font color="#FFFFFF" face="Verdana" size="1"> | </font>
			<a href="http://www.360.bg/mymap.php">				<font color="#FFFFFF" face="Verdana" size="1">Моята карта</font>		</a><font color="#FFFFFF" face="Verdana" size="1"> | </font>
			<a href="http://www.360.bg/frontp_help_bg.php">		<font color="#FFFFFF" face="Verdana" size="1">Помощ</font>		</a><font color="#FFFFFF" face="Verdana" size="1"> | </font>
			<a href="http://www.360.bg/frontp_links_bg.php">	<font color="#FFFFFF" face="Verdana" size="1">Връзки</font>		</a><font color="#FFFFFF" face="Verdana" size="1"> | </font>
			<a href="http://www.360.bg/frontp_about_bg.php">	<font color="#FFFFFF" face="Verdana" size="1">За сайта</font>	</a><font color="#FFFFFF" face="Verdana" size="1"> | </font>
			<a href="http://www.360.bg/frontp_contacts_bg.php">	<font color="#FFFFFF" face="Verdana" size="1">Контакти</font>	</a></b></span></div>
    </td>
  </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="height: 1px;">
  <tr>
    <td valign="top" bgcolor="#2696B8"><img src="images/L2_top1.gif" width="19" height="2" alt="360 градуса"></td>
  </tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0" style="height: 488px;" style="position: relative;">
		<tr> 
    		<td width="15%" height="488" valign="top" style="margin:0px; padding:0px;"> 
	      		<table width="100%" border="0" cellspacing="1" cellpadding="0" style="position: relative; margin:0px; padding:0px;">
    		    	<tr> <td> 
			<!--			<td height="22" valign="middle" bgcolor="#2696B8"> <div align="center" class="bodytxt"><strong><font color="#FFFFFF" size="2" face="Verdana">Търсене</font></strong></div></td> -->
				 </td>   </tr>
    	    		<tr> 
        			    <td height="31" valign="top" style="margin:0px; padding:0px;">
							<div align="left" style="margin:0px; padding:0px;">
			                <p align="left" style="margin:0px; padding:0px;">
					   <br><br><br><br><br>
						 
<span style="background-color: #FFFFFF;" style="margin:0px; padding:0px;">
<a href="http://www.360.bg/forum/viewtopic.php?f=6&amp;t=10006" style="color: rgb(33,33,255); text-decoration : underline; font-size: 0.9em;"> Поискай панорама </a>; 
<a href="http://www.360.bg/forum/viewtopic.php?f=5&amp;t=10008" style="color: rgb(33,33,255); text-decoration : underline; font-size: 0.8em;"> Предстоящо</a> 
<span>
							</div>
						</td>
			        </tr>
				</table>

				<table width="100%" border="0" cellspacing="1" cellpadding="0" style="position: relative;">
			        <tr> 
						<td height="22" valign="middle" bgcolor="#2696B8"> <div align="center" class="bodytxt"><strong><font color="#FFFFFF" face="Verdana" size="2">Панорамни снимки</font></strong></div></td>
			        </tr>
			        <tr> 
			         	<td height="459" valign="top" bgcolor="#f5f5f5"> <div align="center">
							<p align="left"><span class="bodytxt">
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/vt"><b>Ново! Виртуални разходки</b></a></font><br>							&nbsp;<font size="2" face="Verdana"> <font color="#808080" size="2"><a href="http://www.360.bg/pano/"><b>Нови Снимки:</b></a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.493697&amp;lon=27.472258"><b>Бургас</b></a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.15479215876416&amp;lon=23.585500717163086"><b>Околчица</b></a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.992898&amp;lon=22.886277">Видин</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.907777&amp;lon=23.792989">Ботевград</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.204567&amp;lon=23.549281">Враца</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.142839&amp;lon=23.715109">Мездра</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.776684&amp;lon=23.729778">Козлодуй</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.618900&amp;lon=25.393159">Казанлък</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.612128&amp;lon=24.974823">Калофер</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.643419&amp;lon=24.806361">Карлово</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.653777&amp;lon=24.756446">Сопот</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.694012&amp;lon=24.449887">Клисура</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.491392&amp;lon=26.013201">Нова Загора</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.681492&amp;lon=26.316654">Сливен</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.484017&amp;lon=26.508870">Ямбол</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.264580&amp;lon=23.116530">Дупница</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.849020&amp;lon=25.953109">Русе</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.132291&amp;lon=24.716733">Ловеч, покрит мост</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.398609&amp;lon=24.606027">Панорамата в Плевен</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.084170&amp;lon=25.634341">В. Търново, пейзаж</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=41.569470&amp;lon=23.281151">Сандански, парк</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=41.524144&amp;lon=23.396321">Мелник, пейзаж</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=41.530862&amp;lon=23.426884">Роженски манастир</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=41.459346&amp;lon=23.264476">Рупите, храмът на Ванга</a></font><br>
							&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.284694&amp;lon=23.273829">Сапарева Баня от високо</a></font><br>
							&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.424599&amp;lon=25.626034">Стара Загора, Общината</a></font><br>
							&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.280898&amp;lon=22.688286">Кюстендил, Централен Площад</a></font><br>
							&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.034409&amp;lon=23.127584">Благоевград,парк Бачиново</a></font><br>
		  					&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.143817&amp;lon=24.737762">Пловдив от високо</a></font><br>
			  				&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.230240&amp;lon=27.884538">Варна,парк в Младост</a></font><br>
		  					&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.229811&amp;lon=27.889282">Варна от високо</a></font><br>
		  					&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.232321&amp;lon=28.005082">Свети свети Константин и Елена</a></font><br>
						&nbsp; <span id="pos9"><font color="#808080" size="2"><a href="#"><b>Избрано:</b></a></font></span><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.264986&amp;lon=23.117712">Дупница</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.849816&amp;lon=25.947157">Русе</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.133588&amp;lon=23.339691">Рилски манастир</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=41.561937&amp;lon=23.278168">Сандански</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=41.523119&amp;lon=23.394154">Мелник</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=41.530564&amp;lon=23.426871">Рожен</a></font><br>
&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=41.459049&amp;lon=23.263533">Рупите</a></font><br>
							&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.287742&amp;lon=23.257908">Сапарева Баня</a></font><br>
							&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.431447&amp;lon=25.636885">Стара Загора</a></font><br>
							&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.274465&amp;lon=22.691620">Кюстендил</a></font><br>
							&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.021249&amp;lon=23.095474">Благоевград</a></font><br>
							&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.179217&amp;lon=23.585150"><b>в. Мусала по изгрев</b></a></font><br>
							&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.09170711357468&amp;lon=25.614452362060547">В. Търново</a></font><br>
	      					&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.144553&amp;lon=24.749557">Пловдив</a></font><br>
	      					&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.204014&amp;lon=27.910240">Варна</a></font><br>
	      					&nbsp;&raquo; <span id="pos13"><font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=43.360835&amp;lon=28.465828">Калиакра</a></font></span><br>
	      					&nbsp;&raquo; <span id="pos14"><font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.695623&amp;lon=23.328640">София</a></font></span><br>
	      					&nbsp;&raquo; <font color="#808080" size="2"><a href="http://www.360.bg/index.php?lat=42.894774&amp;lon=23.915957">Правец</a></font><br>
	      					&nbsp;&raquo; <span id="pos12"><a href="http://www.360.bg/index.php?lat=43.287083&amp;lon=28.037132"><font size="2">Златни пясъци</font></a></span></font> </span></div>
						</td>
       				</tr>
				</table>
	    	</td>
    		<td width="65%" valign="top">
		    	 <div align="center">
	         	 <center>
	         	 <table border="0" cellpadding="0" width="100%" cellspacing="0"  style="position: relative;">
<!--          			<tr>
                		<td bgcolor="#2696B8" height="22">
							<p align="center"><b><font face="Verdana" size="2" color="#FFFFFF">Карта</font></b>
						</td> 
			</tr>
-->
          			<tr>
                		<td height="11">
                  			<div align="center">
				<table border="0" cellpadding="0" width="100%" style="position: relative;">
					
							 <tr>
								<td>
	<script type="text/javascript"><!--
google_ad_client = "pub-2862362051096576";
google_ad_width = 728;
google_ad_height = 90;
google_ad_format = "728x90_as";
google_ad_type = "text_image";
//2007-09-09: www.360.bg
google_ad_channel = "5054968447";
google_ui_features = "rc:10";
//-->

								</script>
<center>
								<script type="text/javascript"
								  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
								</script>
</center>
							<div id="map" style="width: 100%; height: 450px" style="position: relative;"></div>
<div style="width: 160px; position: relative; top: -445; left: 0">
<form action="#" onsubmit="showAddress(this.address.value); return false">
				        		<input type="text" size="10" name="address" value="Варна">
	        					<input type="submit" value="Търси!">
<br><span  style="background-color: #FFFFFF;">(може и <b>адреси</b>)</span>
							</form>
<div>
								</td>
					             </tr>
		           	             <tr>
						     <td valign="top"> <p align="left"><font size="1" face="Verdana">Този сайт е посветен на 360 градусови панорамни снимки от София, Варна, Пловдив и всички останали градове, села, курорти и забележителности в България и в света. Сайта ще разчита на всички свои ползватели за да се обогатява. Нека покажем България!<br><br>
<b>Легенда:</b><br>
<img src="icon/0.png" alt="Панорама"> Маркер по подразбиране / Пълна 360 градусова панорама <br>
<img src="icon/1.png" alt="Панорама"> Частична панорама (по-малко от 360 градуса, напр. 180) <br>
<br>
<script type='text/javascript'>
svejo_url='http://www.360.bg';
svejo_skin='compact';
svejo_theme='blue';
</script>
<script src='http://svejo.net/javascripts/svejo_button.js' type='text/javascript'></script>
&nbsp;&nbsp;
<!-- nachalo na 
lubimi.com koda !-->
<a href="javascript:x=document;a=encodeURIComponent(x.location.href);t=encodeURIComponent(x.title);location.href='http://lubimi.com/bookmarks.php/user?action=add&amp;address='+a+'&amp;title='+t+'&amp;description=';void 0;"><img 
src="http://lubimi.com/button.gif" alt="+добави в любими.ком" border="0"></a>
<!-- krai na lubimi.com koda !--> &nbsp;&nbsp;
<a href="http://bgtop.net/in.php/1203987675" target="_blank" style="color: rgb(33,33,255); text-decoration : underline;"> Гласувай за нас в BGtop.net</a> &nbsp;&nbsp;
 <a href="http://bgchart.net/in/6618" target="_blank"  style="color: rgb(33,33,255); text-decoration : underline;">Гласувай за нас в БГ чарт</a>
						</font>
		            		     </td>
								 </tr>
                  			 </table>
                  			 </div>
            			</td>
        			</tr>
				 </table>

        </center>

      </div>



<!--
    <td width="20%" align="right" valign="top"> 
      <div align="center">
        <center>
        <table border="0" cellpadding="2" cellspacing="1" width="100%">
          <tr>
            <td width="100%" bgcolor="#2696B8" height="22">
              <p align="center"><strong><font color="#FFFFFF" size="2" face="Verdana">Реклама</font></strong></td>	      
          </tr>
          <tr>
            <td width="100%" bgcolor="#F5F5F5" height="540" valign="top">
              <p align="center">&nbsp;</td>
          </tr>
        </table>
        </center>
      </div>
    </td>
  </tr>
</table>
-->
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="height: 21px;">
  <tr> 
    <td bgcolor="#31404E" height="21">
	    <p align="center"><font face="Arial" size="1"color="#C0C0C0"><span id="pos7">360 градусови панорамни снимки от България. 360 degree panoramic photos from Bulgaria. Pictures. Panoramas. <a href="http://bgtop.net/in.php/1203987675" target="_blank" style="color: rgb(255,255,255); text-decoration : underline;"> Гласувай за нас в BGtop.net</a> <a href="http://bgchart.net/in/6618" target="_blank"  style="color: rgb(255,255,255); text-decoration : underline;">или в БГ чарт</a>
	</span>
      </font>
    </td>
  </tr>
</table>
<!--
<form name="f" method="post" action="#">
В процес на разработка:
<input type="checkbox" name="checkAllMessages" value="yes" onclick="checkAll(this)"/> Виж всичко <br />
<input type="checkbox" name="checkMessage1" value="1"/> Виж 360<br />
<input type="checkbox" name="checkMessage2" value="2"/> Виж 2D <br />
<input type="checkbox" name="checkMessage3" value="3"/> Виж качени от потребители<br />
</form>
-->

<div style="font-size: 0.8em; text-align: center; margin-top: 1.0em; margin-bottom: 1.0em;">
<a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-html401"
        alt="Valid HTML 4.01 Transitional" height="31" width="88"></a>

<a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!">
    </a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	360.bg - content rights reserved
    
<br><!-- Web Counter code start -->
<font size=1><script type="text/javascript" language="javascript"><!--
_d=document; _n=navigator; _t=new Date(); function t() { _d.write(
"<img src=\"http://counter.search.bg/cgi-bin/c?_id=360bg&_z=0&_r="+
_r+"&_c="+_c+"&_j="+_j+"&_t="+(_t.getTimezoneOffset())+"&_k="+_k+
"&_l="+escape(parent.document.referrer)+"\" width=70 height=15 "+
"border=0>");} _c="0"; _r="0"; _j="U"; _k="U"; _d.cookie="_c=y";
_d.cookie.length>0?_k="Y":_k="N";//--></script>
<script type="text/javascript" language="javascript1.2"><!--
_b=screen; _r=_b.width; _n.appName!="Netscape"?_c=_b.colorDepth : _c=_b.pixelDepth;
_n.javaEnabled()?_j="Y":_j="N";//--></script>
<a href="http://counter.search.bg/cgi-bin/s?_id=360bg"
target="_top"><script type="text/javascript" language="javascript"><!--
t(); //--></script></a></font>
<!-- Web Counter code end -->
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-119224-2");
pageTracker._trackPageview();
</script>
</body></html>
