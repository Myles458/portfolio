"use strict";!function(){var m={colors:{black:[0,0,0,1],blue:[0,0,255,1],brown:[165,42,42,1],cyan:[0,255,255,1],fuchsia:[255,0,255,1],gold:[255,215,0,1],green:[0,128,0,1],indigo:[75,0,130,1],khaki:[240,230,140,1],lime:[0,255,0,1],magenta:[255,0,255,1],maroon:[128,0,0,1],navy:[0,0,128,1],olive:[128,128,0,1],orange:[255,165,0,1],pink:[255,192,203,1],purple:[128,0,128,1],violet:[128,0,128,1],red:[255,0,0,1],silver:[192,192,192,1],white:[255,255,255,1],yellow:[255,255,0,1],transparent:[255,255,255,0]},getSVG:function(t,e){return t=this.parseColor(t||"#E65857"),'<?xml version="1.0" encoding="utf-8"?>            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"             width="22px" height="34px" viewBox="0 0 22 34" enable-background="new 0 0 22 34" xml:space="preserve">             <circle id="circle" fill="'+(e=this.parseColor(e||"rgba(255,255,255,0)"))+'" cx="11" cy="11" r="6.5"/>            <path id="path" d="M11,0C4.94,0,0,4.876,0,10.9C0,19.458,11,34,11,34s11-14.581,11-23.1C22,4.876,17.061,0,11,0z M11,16.5             c-3.038,0-5.5-2.463-5.5-5.5c0-3.038,2.462-5.5,5.5-5.5c3.037,0,5.5,2.462,5.5,5.5C16.5,14.037,14.037,16.5,11,16.5z" fill="'+t+'"/>            </svg>'},parseColor:function(t){var e,r;return"rgba("+(r=(e=/#([0-9a-fA-F]{2})([0-9a-fA-F]{2})([0-9a-fA-F]{2})/.exec(t))?[parseInt(e[1],16),parseInt(e[2],16),parseInt(e[3],16),1]:(e=/#([0-9a-fA-F])([0-9a-fA-F])([0-9a-fA-F])/.exec(t))?[17*parseInt(e[1],16),17*parseInt(e[2],16),17*parseInt(e[3],16),1]:(e=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(t))?[parseInt(e[1]),parseInt(e[2]),parseInt(e[3]),1]:(e=/rgba\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9.]*)\s*\)/.exec(t))?[parseInt(e[1],10),parseInt(e[2],10),parseInt(e[3],10),parseFloat(e[4])]:this.colors[t]||[230,88,87,1])[0]+", "+r[1]+", "+r[2]+", "+r[3]+")"},setIcon:function(t,e){function r(){t.setIcon({url:s,anchor:i})}var s,i=new google.maps.Point(11,40);if(!e.trim())return s="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png",r();if(-1!==e.indexOf("/")){var o=new Image;o.onload=function(){s=o.src,i=new google.maps.Point(Math.ceil(o.width/2),o.height),r()},o.onerror=function(){return s="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png",r()},o.src=e}else s="data:image/svg+xml;base64,"+btoa(this.getSVG.apply(this,e.split(" "))),i=new google.maps.Point(11,34),r()}};function f(t,e,r){this.extend(f,google.maps.OverlayView),this.map_=t,this.markers_=[],this.clusters_=[],this.sizes=[53,56,66,78,90],this.styles_=[],this.ready_=!1;var s=r||{};this.gridSize_=s.gridSize||60,this.minClusterSize_=s.minimumClusterSize||2,this.maxZoom_=s.maxZoom||null,this.styles_=s.styles||[],this.imagePath_=s.imagePath||this.MARKER_CLUSTER_IMAGE_PATH_,this.imageExtension_=s.imageExtension||this.MARKER_CLUSTER_IMAGE_EXTENSION_,this.zoomOnClick_=!0,null!=s.zoomOnClick&&(this.zoomOnClick_=s.zoomOnClick),this.averageCenter_=!1,null!=s.averageCenter&&(this.averageCenter_=s.averageCenter),this.setupStyles_(),this.setMap(t),this.prevZoom_=this.map_.getZoom();var i=this;google.maps.event.addListener(this.map_,"zoom_changed",function(){var t=i.map_.getZoom();i.prevZoom_!=t&&(i.prevZoom_=t,i.resetViewport())}),google.maps.event.addListener(this.map_,"idle",function(){i.redraw()}),e&&e.length&&this.addMarkers(e,!1)}function h(t){this.markerClusterer_=t,this.map_=t.getMap(),this.gridSize_=t.getGridSize(),this.minClusterSize_=t.getMinClusterSize(),this.averageCenter_=t.isAverageCenter(),this.center_=null,this.markers_=[],this.bounds_=null,this.clusterIcon_=new s(this,t.getStyles(),t.getGridSize())}function s(t,e,r){t.getMarkerClusterer().extend(s,google.maps.OverlayView),this.styles_=e,this.padding_=r||0,this.cluster_=t,this.center_=null,this.map_=t.getMap(),this.div_=null,this.sums_=null,this.visible_=!1,this.setMap(this.map_)}f.prototype.MARKER_CLUSTER_IMAGE_PATH_="https://raw.githubusercontent.com/googlemaps/js-marker-clusterer/gh-pages/images/m",f.prototype.MARKER_CLUSTER_IMAGE_EXTENSION_="png",f.prototype.extend=function(t,e){return function(t){for(var e in t.prototype)this.prototype[e]=t.prototype[e];return this}.apply(t,[e])},f.prototype.onAdd=function(){this.setReady_(!0)},f.prototype.draw=function(){},f.prototype.setupStyles_=function(){if(!this.styles_.length)for(var t,e=0;t=this.sizes[e];e++)this.styles_.push({url:this.imagePath_+(e+1)+"."+this.imageExtension_,height:t,width:t})},f.prototype.fitMapToMarkers=function(){for(var t,e=this.getMarkers(),r=new google.maps.LatLngBounds,s=0;t=e[s];s++)r.extend(t.getPosition());this.map_.fitBounds(r)},f.prototype.setStyles=function(t){this.styles_=t},f.prototype.getStyles=function(){return this.styles_},f.prototype.isZoomOnClick=function(){return this.zoomOnClick_},f.prototype.isAverageCenter=function(){return this.averageCenter_},f.prototype.getMarkers=function(){return this.markers_},f.prototype.getTotalMarkers=function(){return this.markers_.length},f.prototype.setMaxZoom=function(t){this.maxZoom_=t},f.prototype.getMaxZoom=function(){return this.maxZoom_},f.prototype.calculator_=function(t,e){for(var r=0,s=t.length,i=s;0!==i;)i=parseInt(i/10,10),r++;return{text:s,index:r=Math.min(r,e)}},f.prototype.setCalculator=function(t){this.calculator_=t},f.prototype.getCalculator=function(){return this.calculator_},f.prototype.addMarkers=function(t,e){for(var r,s=0;r=t[s];s++)this.pushMarkerTo_(r);e||this.redraw()},f.prototype.pushMarkerTo_=function(t){if(t.isAdded=!1,t.draggable){var e=this;google.maps.event.addListener(t,"dragend",function(){t.isAdded=!1,e.repaint()})}this.markers_.push(t)},f.prototype.addMarker=function(t,e){this.pushMarkerTo_(t),e||this.redraw()},f.prototype.removeMarker_=function(t){var e=-1;if(this.markers_.indexOf)e=this.markers_.indexOf(t);else for(var r,s=0;r=this.markers_[s];s++)if(r==t){e=s;break}return-1!=e&&(t.setMap(null),this.markers_.splice(e,1),!0)},f.prototype.removeMarker=function(t,e){var r=this.removeMarker_(t);return!(e||!r)&&(this.resetViewport(),this.redraw(),!0)},f.prototype.removeMarkers=function(t,e){for(var r,s=!1,i=0;r=t[i];i++){var o=this.removeMarker_(r);s=s||o}if(!e&&s)return this.resetViewport(),this.redraw(),!0},f.prototype.setReady_=function(t){this.ready_||(this.ready_=t,this.createClusters_())},f.prototype.getTotalClusters=function(){return this.clusters_.length},f.prototype.getMap=function(){return this.map_},f.prototype.setMap=function(t){this.map_=t},f.prototype.getGridSize=function(){return this.gridSize_},f.prototype.setGridSize=function(t){this.gridSize_=t},f.prototype.getMinClusterSize=function(){return this.minClusterSize_},f.prototype.setMinClusterSize=function(t){this.minClusterSize_=t},f.prototype.getExtendedBounds=function(t){var e=this.getProjection(),r=new google.maps.LatLng(t.getNorthEast().lat(),t.getNorthEast().lng()),s=new google.maps.LatLng(t.getSouthWest().lat(),t.getSouthWest().lng()),i=e.fromLatLngToDivPixel(r);i.x+=this.gridSize_,i.y-=this.gridSize_;var o=e.fromLatLngToDivPixel(s);o.x-=this.gridSize_,o.y+=this.gridSize_;var n=e.fromDivPixelToLatLng(i),a=e.fromDivPixelToLatLng(o);return t.extend(n),t.extend(a),t},f.prototype.isMarkerInBounds_=function(t,e){return e.contains(t.getPosition())},f.prototype.clearMarkers=function(){this.resetViewport(!0),this.markers_=[]},f.prototype.resetViewport=function(t){for(var e,r,s=0;r=this.clusters_[s];s++)r.remove();for(;e=this.markers_[s];s++)e.isAdded=!1,t&&e.setMap(null);this.clusters_=[]},f.prototype.repaint=function(){var r=this.clusters_.slice();this.clusters_.length=0,this.resetViewport(),this.redraw(),window.setTimeout(function(){for(var t,e=0;t=r[e];e++)t.remove()},0)},f.prototype.redraw=function(){this.createClusters_()},f.prototype.distanceBetweenPoints_=function(t,e){if(!t||!e)return 0;var r=(e.lat()-t.lat())*Math.PI/180,s=(e.lng()-t.lng())*Math.PI/180,i=Math.sin(r/2)*Math.sin(r/2)+Math.cos(t.lat()*Math.PI/180)*Math.cos(e.lat()*Math.PI/180)*Math.sin(s/2)*Math.sin(s/2);return 6371*(2*Math.atan2(Math.sqrt(i),Math.sqrt(1-i)))},f.prototype.addToClosestCluster_=function(t){for(var e,r=4e4,s=null,i=0;e=this.clusters_[i];i++){var o=e.getCenter();if(o){var n=this.distanceBetweenPoints_(o,t.getPosition());n<r&&(r=n,s=e)}}if(s&&s.isMarkerInClusterBounds(t))s.addMarker(t);else{var a=new h(this);a.addMarker(t),this.clusters_.push(a)}},f.prototype.createClusters_=function(){if(this.ready_)for(var t,e=new google.maps.LatLngBounds(this.map_.getBounds().getSouthWest(),this.map_.getBounds().getNorthEast()),r=this.getExtendedBounds(e),s=0;t=this.markers_[s];s++)!t.isAdded&&this.isMarkerInBounds_(t,r)&&this.addToClosestCluster_(t)},h.prototype.isMarkerAlreadyAdded=function(t){if(this.markers_.indexOf)return-1!=this.markers_.indexOf(t);for(var e,r=0;e=this.markers_[r];r++)if(e==t)return!0;return!1},h.prototype.addMarker=function(t){if(this.isMarkerAlreadyAdded(t))return!1;if(this.center_){if(this.averageCenter_){var e=this.markers_.length+1,r=(this.center_.lat()*(e-1)+t.getPosition().lat())/e,s=(this.center_.lng()*(e-1)+t.getPosition().lng())/e;this.center_=new google.maps.LatLng(r,s),this.calculateBounds_()}}else this.center_=t.getPosition(),this.calculateBounds_();t.isAdded=!0,this.markers_.push(t);var i=this.markers_.length;if(i<this.minClusterSize_&&t.getMap()!=this.map_&&t.setMap(this.map_),i==this.minClusterSize_)for(var o=0;o<i;o++)this.markers_[o].setMap(null);return i>=this.minClusterSize_&&t.setMap(null),this.updateIcon(),!0},h.prototype.getMarkerClusterer=function(){return this.markerClusterer_},h.prototype.getBounds=function(){for(var t,e=new google.maps.LatLngBounds(this.center_,this.center_),r=this.getMarkers(),s=0;t=r[s];s++)e.extend(t.getPosition());return e},h.prototype.remove=function(){this.clusterIcon_.remove(),this.markers_.length=0,delete this.markers_},h.prototype.getSize=function(){return this.markers_.length},h.prototype.getMarkers=function(){return this.markers_},h.prototype.getCenter=function(){return this.center_},h.prototype.calculateBounds_=function(){var t=new google.maps.LatLngBounds(this.center_,this.center_);this.bounds_=this.markerClusterer_.getExtendedBounds(t)},h.prototype.isMarkerInClusterBounds=function(t){return this.bounds_.contains(t.getPosition())},h.prototype.getMap=function(){return this.map_},h.prototype.updateIcon=function(){var t=this.map_.getZoom(),e=this.markerClusterer_.getMaxZoom();if(e&&e<t)for(var r,s=0;r=this.markers_[s];s++)r.setMap(this.map_);else if(this.markers_.length<this.minClusterSize_)this.clusterIcon_.hide();else{var i=this.markerClusterer_.getStyles().length,o=this.markerClusterer_.getCalculator()(this.markers_,i);this.clusterIcon_.setCenter(this.center_),this.clusterIcon_.setSums(o),this.clusterIcon_.show()}},s.prototype.triggerClusterClick=function(){var t=this.cluster_.getMarkerClusterer();google.maps.event.trigger(t,"clusterclick",this.cluster_),t.isZoomOnClick()&&this.map_.fitBounds(this.cluster_.getBounds())},s.prototype.onAdd=function(){if(this.div_=document.createElement("DIV"),this.visible_){var t=this.getPosFromLatLng_(this.center_);this.div_.style.cssText=this.createCss(t),this.div_.innerHTML=this.sums_.text}this.getPanes().overlayMouseTarget.appendChild(this.div_);var e=this;google.maps.event.addDomListener(this.div_,"click",function(){e.triggerClusterClick()})},s.prototype.getPosFromLatLng_=function(t){var e=this.getProjection().fromLatLngToDivPixel(t);return e.x-=parseInt(this.width_/2,10),e.y-=parseInt(this.height_/2,10),e},s.prototype.draw=function(){if(this.visible_){var t=this.getPosFromLatLng_(this.center_);this.div_.style.top=t.y+"px",this.div_.style.left=t.x+"px"}},s.prototype.hide=function(){this.div_&&(this.div_.style.display="none"),this.visible_=!1},s.prototype.show=function(){if(this.div_){var t=this.getPosFromLatLng_(this.center_);this.div_.style.cssText=this.createCss(t),this.div_.style.display=""}this.visible_=!0},s.prototype.remove=function(){this.setMap(null)},s.prototype.onRemove=function(){this.div_&&this.div_.parentNode&&(this.hide(),this.div_.parentNode.removeChild(this.div_),this.div_=null)},s.prototype.setSums=function(t){this.sums_=t,this.text_=t.text,this.index_=t.index,this.div_&&(this.div_.innerHTML=t.text),this.useStyle()},s.prototype.useStyle=function(){var t=Math.max(0,this.sums_.index-1);t=Math.min(this.styles_.length-1,t);var e=this.styles_[t];this.url_=e.url,this.height_=e.height,this.width_=e.width,this.textColor_=e.textColor,this.anchor_=e.anchor,this.textSize_=e.textSize,this.backgroundPosition_=e.backgroundPosition},s.prototype.setCenter=function(t){this.center_=t},s.prototype.createCss=function(t){var e=[];e.push("background-image:url("+this.url_+");");var r=this.backgroundPosition_?this.backgroundPosition_:"0 0";e.push("background-position:"+r+";"),"object"==typeof this.anchor_?("number"==typeof this.anchor_[0]&&0<this.anchor_[0]&&this.anchor_[0]<this.height_?e.push("height:"+(this.height_-this.anchor_[0])+"px; padding-top:"+this.anchor_[0]+"px;"):e.push("height:"+this.height_+"px; line-height:"+this.height_+"px;"),"number"==typeof this.anchor_[1]&&0<this.anchor_[1]&&this.anchor_[1]<this.width_?e.push("width:"+(this.width_-this.anchor_[1])+"px; padding-left:"+this.anchor_[1]+"px;"):e.push("width:"+this.width_+"px; text-align:center;")):e.push("height:"+this.height_+"px; line-height:"+this.height_+"px; width:"+this.width_+"px; text-align:center;");var s=this.textColor_?this.textColor_:"black",i=this.textSize_?this.textSize_:11;return e.push("cursor:pointer; top:"+t.y+"px; left:"+t.x+"px; color:"+s+"; position:absolute; font-size:"+i+"px; font-family:Arial,sans-serif; font-weight:bold"),e.join("")};var r,i=window.UIkitwk||window.UIkit;null!=i&&i.util.ready(function(){var t=i.util,u=t.$,e=t.$$,g=t.append,c=t.attr,_=t.css,d=t.html;e('script[type="widgetkit/map"]').forEach(function(t){var p=u("<div>");c(p,t.dataset);var l=JSON.parse(t.innerHTML);t.parentNode.replaceChild(p,t),function(){r=r||function(s){return new i.util.Promise(function(t,e){var r=document.createElement("script");r.src=s,r.onload=function(){return t(s)},r.onerror=function(){return e(s)},document.head.appendChild(r)})}("https://maps.google.com/maps/api/js?key="+(window.GOOGLE_MAPS_API_KEY||""));return r}().then(function(){var i,t,e,o,r,s=l.markers,n=[],a=m;Object.keys(l).forEach(function(t){isNaN(l[t])||(l[t]=Number(l[t]))}),e=s.length?new google.maps.LatLng(s[0].lat,s[0].lng):new google.maps.LatLng(-34.397,150.644),t={zoom:parseInt(l.zoom,10),center:e,streetViewControl:l.mapctrl,navigationControl:l.mapctrl,scrollwheel:l.zoomwheel,draggable:l.draggable,mapTypeId:google.maps.MapTypeId[l.maptypeid.toUpperCase()],mapTypeControl:l.maptypecontrol,zoomControl:l.zoomcontrol,disableDefaultUI:l.disabledefaultui,mapTypeControlOptions:{style:google.maps.MapTypeControlStyle.DROPDOWN_MENU,mapTypeIds:["styled_map",google.maps.MapTypeId.ROADMAP,google.maps.MapTypeId.SATELLITE]},zoomControlOptions:{style:l.mapctrl?google.maps.ZoomControlStyle.DEFAULT:google.maps.ZoomControlStyle.SMALL}},i=new google.maps.Map(p,t),s.length&&l.directions&&(o=_(u('<a target="_blank"></a>'),{padding:"5px 1px","text-decoration":"none"}),r=_(u("<div></div>"),{"-webkit-background-clip":"padding-box",padding:"1px 4px",backgroundColor:"white",borderColor:"rgba(0, 0, 0, 0.14902)",borderStyle:"solid",borderWidth:"1px",cursor:"pointer",textAlign:"center",fontFamily:"Roboto, Arial, sans-serif",fontWeight:500,boxShadow:"rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px",index:1}),d(r,'<span style="color:#000;"><span style="color:blue;">&#8627;</span>'+(l.directionsText||"Get Directions")+"</span>"),g(o,r),o.setHref=function(t,e){c(this,"href","https://maps.google.com/?daddr="+t+","+e)},i.controls[google.maps.ControlPosition.TOP_RIGHT].push(o)),s.length&&l.marker&&(s.forEach(function(t,e){var r,s=new google.maps.Marker({position:new google.maps.LatLng(t.lat,t.lng),map:i,title:t.title});(a&&t.icon||l.marker_icon)&&a.setIcon(s,t.icon||l.marker_icon),n.push(s),1<=l.marker&&(r=new google.maps.InfoWindow({content:t.content,maxWidth:l.popup_max_width?parseInt(l.popup_max_width,10):300}),google.maps.event.addListener(s,"click",function(){2<=l.marker&&t.content&&r.open(i,s),o&&(o.setHref(t.lat,t.lng),_(o,"display","block"))}),0===e&&(3===l.marker&&t.content&&r.open(i,s),o&&(o.setHref(t.lat,t.lng),_(o,"display","block"))))}),i.panTo(new google.maps.LatLng(s[0].lat,s[0].lng))),l.markercluster&&new f(i,n);var h=new google.maps.StyledMapType([{featureType:"all",elementType:"all",stylers:[{invert_lightness:l.styler_invert_lightness},{hue:l.styler_hue},{saturation:l.styler_saturation},{lightness:l.styler_lightness},{gamma:l.styler_gamma}]}],{name:"Styled"});i.mapTypes.set("styled_map",h),"ROADMAP"===l.maptypeid.toUpperCase()&&i.setMapTypeId("styled_map")})})})}();