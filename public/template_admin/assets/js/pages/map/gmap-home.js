/**
 *  Document   : google-maps-data.js
 *  Author     : Redstartheme
 *  Description: Google map data script
 *
 **/

var map,
desktopScreen = Modernizr.mq( "only screen and (min-width:1024px)" ),
zoom = desktopScreen ? 14 : 15,
		scrollable = draggable = !Modernizr.hiddenscroll || desktopScreen,
		isIE11 = !!(navigator.userAgent.match(/Trident/) && navigator.userAgent.match(/rv[ :]11/));

function initMap() {
	var myLatLng = {lat: -6.144039, lng: 106.875071};
	map = new google.maps.Map(document.getElementById('map'), {
		zoom: zoom,
		center: myLatLng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: scrollable,
		draggable: draggable,
		styles: [{"stylers": [{ "saturation": -100 }]}],
	});

	var locations = [
         {
        	 title: 'Qnesys Office',
        	 position: {lat: -6.144039, lng: 106.875071},
        	 icon: {
        		 url: "../../assets/img/vehicle/Qnesys.png",
        		 size: new google.maps.Size(30, 30),

        	 }

         },
         {
        	 title: 'Hotel - GreenLake',
        	 position: {lat: -6.147000, lng: 106.879554},
        	 icon: {
        		 url: "../../assets/img/vehicle/Qnesys.png",
        		 size: new google.maps.Size(30, 30),

        	 }

         },
         {
        	 title: 'HKY-Home',
        	 position: {lat: -6.149276, lng: 106.868458},
        	 icon: {
        		 url: "../../assets/img/vehicle/Qnesys.png",
        		 size: new google.maps.Size(30, 30),

        	 }

         },
         {
        	 title: 'RS.Hermina',
        	 position: {lat: -6.145684, lng: 106.861369},
        	 icon: {
        		 url: "../../assets/img/vehicle/Qnesys.png",
        		 size: new google.maps.Size(30, 30),

        	 }

         },
         {
        	 title: 'RS.Mitra',
        	 position: {lat: -6.152213, lng: 106.858538},
        	 icon: {
        		 url: "../../assets/img/vehicle/Qnesys.png",
        		 size: new google.maps.Size(30, 30),

        	 }

         },
         {
        	 title: 'Kiddie Planet',
        	 position: {lat: -6.143082, lng: 106.877710},
        	 icon: {
        		 url: "../../assets/img/vehicle/Qnesys.png",
        		 size: new google.maps.Size(30, 30),

        	 }

         },
         {
        	 title: 'Indomaret Point ',
        	 position: {lat: -6.145258, lng: 106.876981},
        	 icon: {
        		 url: "../../assets/img/vehicle/Qnesys.png",
        		 size: new google.maps.Size(30, 30),

        	 }
         }					
         ];

	locations.forEach( function( element, index ){	
		var marker = new google.maps.Marker({
			position: element.position,
			map: map,
			title: element.title,
			icon: element.icon,
		});
	});
}