//<![CDATA[
function load() {
    var map = new google.maps.Map(document.getElementById("map-canvas"), {
        center: new google.maps.LatLng(13.059078, 80.224743),
        disableDefaultUI: true,

        scrollwheel: false,
        zoom: 13,
        mapTypeId: 'terrain'
    });
    var infoWindow = new google.maps.InfoWindow;
    //Translation to jQuery

    $.post('restaurants-location', {
        city: "chennai",
        limit: 20
    }, function (restaurants) {
        for (var i = 0; i < restaurants.length; i++) {
            var name = restaurants[i].name;
            var address = restaurants[i].address;
            var website = restaurants[i].website;
            var point = new google.maps.LatLng(
                parseFloat(restaurants[i].lat),
                parseFloat(restaurants[i].lng));
            var html = "<b>" + name + "</b> <br/>" + address + "<br/>" + /*"<a href='" + website + "'>" + website + "</a>" + */"<a href='" + 'restaurant/'+(i+1)+ "'>" + name + "</a>";
            var icon = 'img/pin5.png';
            var marker = new google.maps.Marker({
                title: restaurants[i].name,
                map: map,
                position: point,
                icon: icon
                /*shadow: icon.shadow*/
            });
            bindInfoWindow(marker, map, infoWindow, html);
        }
    });
}

function bindInfoWindow(marker, map, infoWindow, html) {
    google.maps.event.addListener(marker, 'click', function () {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
    });
}
//]]>

jQuery(document).ready(function () {
    load();
});
   