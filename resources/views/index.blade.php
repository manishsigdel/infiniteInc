<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Infinite.Inc</title>
		<script src="{{url('public/jquery-3.1.1.min.js')}}"></script>
		<link rel="stylesheet" href="{{url('public/assets/css/flexslider.css')}}" type="text/css">
		<link rel="stylesheet" href="{{url('public/assets/css/main.css')}}">
		<link href="{{url('public/css/styles.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('public/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
		<style>
			#map {
				margin-top: 15%;
				margin-left: 3.1%;
				width: 1280px;
				height: 652px;
				z-index: 20;
			}
		</style>
	</head>
	<body>
	@if(Session::has('Success'))
		<div style="position: absolute;z-index: 50; width: 94.5%; margin-top: 1%;margin-left: 3.1%; background-color: darkcyan" class="alert alert-sucess {{Session::has('Succcess_important') ? 'alert-important': ''}}">
			@if(Session::has('Success_important'))
			@endif
			{{session('Success')}}
		</div>
	@endif

			{{--<div id="header">--}}
				<div class="flexslider" style="background-image: url('public/images/Layer2.png');margin-left: 3.1%; margin-right: 2.5%">
					<ul class="slides">
						<li class="slider-item" style="background-image: url('public/images/Layer1.png')">
							<div class="intro container">
								<div class="inner-intro">
									<h1 class="header-title" style="font-size: 400%">
										<span>TECHNOLOGY</span> TO TAKE YOU BEYOND
									</h1>
									<button class="btn custom-btn" style="font-size: 200%">
										READ MORE
									</button>
								</div>
							</div>
						</li> <!-- /.slider-item -->
						<li class="slider-item" style="background-image: url('public/images/Layer3.png')">
							<div class="intro">
								<div class="inner-intro">
									<h1 class="header-title" style="font-size: 400%;color: black">
										<span>TECHNOLOGY</span> TO TAKE YOU BEYOND
									</h1>
									<button class="btn custom-btn" style="font-size: 200%;color: black">
										READ MORE
									</button>
								</div>
							</div>
						</li> <!-- /.slider-item -->
						<li class="slider-item" style="background-image: url('public/images/Layer4.png')">
							<div class="intro">
								<div class="inner-intro">
									<h1 class="header-title" style="font-size: 400%;color: white">
										<span>TECHNOLOGY</span> TO TAKE YOU BEYOND
									</h1>
									<button class="btn custom-btn" style="font-size: 200%;">
										READ MORE
									</button>
								</div>
							</div>
						</li> <!-- /.slider-item -->
					</ul> <!-- /.slides -->
				</div> <!-- /.flexslider -->
		</div><!-- /#header -->

			<div id="Shape1" style="
    margin-left: 3.1%;
"><img src="{{url('public/images/Shape1.png')}}"style="
    width: 94.5%;
"></div>

			<div id="Infiniteinc"><a href="{{url('home')}}"><img src="{{url('public/images/Infiniteinc.png')}}"></a></div>
			<div id="HomeAboutUs">
				<div style="margin-top: 0%">
					<a href="#" style="color: whitesmoke; font-size: 210%;font-weight: bold;">Home </a>
					<a href="#" style="color: whitesmoke; font-size: 210%;font-weight: bold"> Aboutus </a>
					<a href="#" style="color: whitesmoke; font-size: 210%;font-weight: bold"> Contact</a>
				</div>
			</div>


			<div id="Rectangle1" style="
    margin-top: -10%;
"><img src="{{url('public/images/Rectangle1.png')}}"></div>
			<div id="Atthesametimethatwea"><img src="{{url('public/images/Atthesametimethatwea.png')}}"></div>
			<div id="Infiniteincissimplya"><img src="{{url('public/images/Infiniteincissimplya.png')}}"></div>
			<div id="Coding"><img src="{{url('public/images/Coding.png')}}"></div>
			<div id="Electronics"><img src="{{url('public/images/Electronics.png')}}"></div>
			<div id="DataRecovery"><img src="{{url('public/images/DataRecovery.png')}}"></div>
			{{--<div id="Layer8" style="--}}
    {{--margin-left: 3.1%;--}}
{{--"><img src="{{url('public/images/Layer8.png')}}"></div>--}}
			{{--<div id="Ellipse2"><img src="{{url('public/images/Ellipse2.png')}}"></div>--}}
			<div id="Rectangle2"><img src="{{url('public/images/Rectangle2.png')}}"></div>
			<div id="Rectangle2copy"><img src="{{url('public/images/Rectangle2copy.png')}}"></div>
			<div id="Rectangle2copy2"><img src="{{url('public/images/Rectangle2copy2.png')}}"></div>
			<div id="Rectangle5"><img src="{{url('public/images/Rectangle5.png')}}"></div>
			<div id="Rectangle3" style="
       margin-left: 3%;
"><img src="{{url('public/images/Rectangle3.png')}}" style="
    width: 94.7%;
"></div>
			<div id="Copyright2016Infinit"><img src="{{url('public/images/Copyright2016Infinit.png')}}"></div>

	<div id="Ellipse2" style="top: 1100px"><img src="{{url('public/images/Ellipse2.png')}}"></div>

	<form action="{{url('create')}}" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		<input type="text" name="name" placeholder="Name" id="Name" style="margin-top: -12%; height: 5%; width: 15%;margin-left: 1%" required/>
		<input type="text" name="contact" placeholder="Contact Number" id="Contactnumber" style="margin-top: -12%;margin-top: -12%;height: 5%; width: 15%;margin-left: 1%" required/>
		<input type="text" name="help" placeholder="What can we help you for" id="Whatcanwehelpyoufor" style="margin-top: -12%;height: 5%; width: 15%;margin-left: 1%" required/>
		<input type="text" name="location" placeholder="Location" id="Location" style="margin-top: -12%;height: 5%; width: 15%;margin-left: 1%" required/>
		{{--<input type="submit" name="submit"/>--}}
		<div id="Locationicon" style="margin-top: -12%;"><img src="{{url('public/images/Locationicon.png')}}"></div>
		<div id="Shape5" style="margin-top: -12%;">
			<div style="border-radius: 50%;margin-top: 10%;margin-left: -25%">
				<input type="image" src="{{url('public/images/Shape5.png')}}" alt="submit" />
			</div>
		</div>
	</form>
	<div id="map"></div>

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
	<script>
        $('div.alert').not('.alert-important').delay(1500).slideUp(300);
	</script>
	<script src="{{url('public/assets/js/jquery-1.11.2.min.js')}}"></script>
	<script src="{{url('public/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{url('public/assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{url('public/assets/js/contact.js')}}"></script>
	<script src="{{url('public/assets/js/jquery.flexslider.js')}}"></script>
	<script src="{{url('public/assets/js/script.js')}}"></script>
 </body>
 </html>