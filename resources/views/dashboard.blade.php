<!DOCTYPE html>
<html>
<head>
    <title>Place Autocomplete</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Infinite.Inc</title>
    <script src="{{url('public/jquery-3.1.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{url('public/assets/css/flexslider.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/assets/css/main.css')}}">
    <link href="{{url('public/css/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('public/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css">

    <style>
        #map {
            width: 1280px;
            height: 652px;
            z-index: 20;
        }
    </style>
</head>
<body>
<div id="Ellipse2" style="top: 146px"><img src="{{url('public/images/Ellipse2.png')}}"></div>

<form action="{{url('create')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <input type="text" name="name" placeholder="Name" id="Name" style="margin-top: -81%;height: 5%; width: 15%;margin-left: 0%" required/>
    <input type="text" name="contact" placeholder="Contact Number" id="Contactnumber" style="margin-top: -81%;height: 5%; width: 15%;margin-left: 0%" required/>
    <input type="text" name="help" placeholder="What can we help you for" id="Whatcanwehelpyoufor" style="margin-top: -81%;height: 5%; width: 15%;margin-left: 0%" required/>
    <input type="text" name="location" placeholder="Location" id="Location" style="margin-top: -81%;height: 5%; width: 15%;margin-left: 0%" required/>
    {{--<input type="submit" name="submit"/>--}}
    <div id="Locationicon" style="margin-top: -81%;"><img src="{{url('public/images/Locationicon.png')}}"></div>
    <div id="Shape5" style="
margin-top: -81%;">
        <div style="margin-top: -81%;border-radius: 50%;margin-top: 10%;margin-left: -25%">
            <input type="image" src="{{url('public/images/Shape5.png')}}" alt="submit" />
        </div>
    </div>
</form>
<div id="map"></div>
<div id="infowindow-content">
    <img src="" width="16" height="16" id="place-icon">
    <span id="place-name"  class="title"></span><br>
    <span id="place-address"></span>
</div>

<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 27.7172, lng: 85.3240},
            zoom: 17
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('Location');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
            map: map,
            anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                // User entered the name of a Place that was not suggested and
                // pressed the Enter key, or the Place Details request failed.
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }

            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);  // Why 17? Because it looks good.
            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }

            infowindowContent.children['place-icon'].src = place.icon;
            infowindowContent.children['place-name'].textContent = place.name;
            infowindowContent.children['place-address'].textContent = address;
            infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
            var radioButton = document.getElementById(id);
            radioButton.addEventListener('click', function() {
                autocomplete.setTypes(types);
            });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
                console.log('Checkbox clicked! New state=' + this.checked);
                autocomplete.setOptions({strictBounds: this.checked});
            });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCm9GcFEx_L-1lXQU9rhnpwQVvzlzRmZsQ&libraries=places&callback=initMap"
        async defer></script>
</body>
</html>