var map, draggable;
$(document).ready(function () {
    google.maps.event.addDomListener(window, 'load', initialize);
});

function initialize() {
    if( $('#googleMap').attr('position') == 'fechac' ) {
        var $lat = 28.604013,
            $long = -106.120451,
            $title = 'Fechac Chihuahua';
    }

    var map_canvas = document.getElementById('googleMap');

    var map_options = {
        center: new google.maps.LatLng($lat, $long),
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        streetViewControl: false,
        //draggable: !("ontouchend" in document)
    };

    map = new google.maps.Map(map_canvas, map_options);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng($lat, $long),
        map: map,
        title: $title,
        url: 'http://maps.google.com/maps?q=loc:'+String($lat)+','+String($long)
    });

    google.maps.event.addListener(marker, 'click', function() {
        /*window.location.href = this.url;*/
        window.open(this.url,'_blank');
    });

    var markerJuarez = new google.maps.Marker({
        position: new google.maps.LatLng(31.743581, -106.443754),
        map: map,
        title: 'Fechac Juárez',
        url: 'http://maps.google.com/maps?q=loc:'+String(31.743581)+','+String(-106.443754)
    });
    
    google.maps.event.addListener(markerJuarez, 'click', function() {
        window.open(this.url,'_blank');
    });
}

function moveToChihuahua() {
	map.panTo(new google.maps.LatLng(28.604013, -106.120451));
}

function moveToJuarez() {
	map.panTo(new google.maps.LatLng(31.743581, -106.443754));
}