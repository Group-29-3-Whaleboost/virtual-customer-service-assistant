<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php base_url(); ?>assets\css\bootstrap.min.css"/>
    <style>
    .custom-map-control-button {
        width: 40px;
        height: 40px;
        margin-right: 10px;
        background: url(https://maps.google.com/mapfiles/kml/pal3/icon28.png) no-repeat;
        background-position: center;

    }
    .btn-success{
        font-size:20px;
        margin-left: 10px;
        margin-bottom: 10px;
    }

    .direction-btn {
        width: 55px;
        height: 55px;
        margin-right: 10px;
        margin-top: 10%;
        background: url(http://earth.google.com/images/kml-icons/track-directional/track-15.png) no-repeat;
        background-position: center;

    }
    </style>
</head>

<body>
    <div id="map" style="width: 100%; height: 100vh;"></div>
    <?php
    //Moratuwa
    $Latitude = 6.791294089286248; 
    $Longitude = 79.88630358871042; 
    // 6.791294089286248, 79.88630358871042
    ?>

    <script>
    function initMap() {

        const myLatLng = {
            lat: <?php echo $Latitude; ?>,
            lng: <?php echo $Longitude; ?>
        };

        const mapDiv = document.getElementById('map');

        const map = new google.maps.Map(mapDiv, {
            center: myLatLng,
            zoom: 15
        });

        new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Moratuwa Branch",
        });

        //get current user location

        let infoWindow;
        infoWindow = new google.maps.InfoWindow();

        // create get loction button
        const locationButton = document.createElement("button");

        // locationButton.innerText = "Pan to Current Location";
        locationButton.classList.add("btn","btn-light","custom-map-control-button");
        map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(locationButton);

        // locationButton event
        locationButton.addEventListener("click", () => {

            // HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude,
                        };

                        infoWindow.setPosition(pos);
                        infoWindow.setContent("You are in here!!.");
                        infoWindow.open(map);
                        map.setCenter(pos);


                        //set current location marker
                        const svgMarker = {
                            path: "M-1.547 12l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM0 0q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
                            fillColor: "blue",
                            fillOpacity: 0.9,
                            strokeWeight: 0,
                            rotation: 0,
                            scale: 2,
                            anchor: new google.maps.Point(0, 0),
                        };

                        new google.maps.Marker({
                            position: pos,
                            icon: svgMarker,
                            map: map,
                            title: "You are in here",
                        });
                        

                    },
                    () => {
                        handleLocationError(true, infoWindow, map.getCenter());
                    },
                );
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        });

        // Get direction path

        // create get loction button
        const directionButton = document.createElement("button");

        directionButton.classList.add("btn", "direction-btn");
        map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(directionButton);

        // directionButton event
        directionButton.addEventListener("click", () => {

            // call function to get direction
            getDirection(myLatLng);
            
        });


        // Go to the Dashboad

        // create get loction button
        const goDashboard = document.createElement("button");

        goDashboard.innerText = "Let's Shop";
        goDashboard.classList.add("btn", "btn-success");
        map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(goDashboard);

        // goDashboard event
        goDashboard.addEventListener("click", () => {

            // .

        });
    }

    
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(
            browserHasGeolocation ?
            "Error: The Geolocation service failed." :
            "Error: Your browser doesn't support geolocation.",
        );
        infoWindow.open(map);
    }

    // Show road path of the target location
    function getDirection(endLocation) {
        try {
            var uri = "https://www.google.com/maps/dir//" +"'"+ endLocation.lat+","+endLocation.lng+"'";
            window.open(uri);

        }catch (e){
            var uri = "https://play.google.com/store/apps/details?id=com.google.android.apps.maps&hl=en&gl=US&pli=1";
            window.open(uri);

        }

    }

    window.initMap = initMap;
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHVZB2xAtY44TxtGmX0pu73bAmcB_TiCc&libraries=places&callback=initMap">
    </script>

</body>

</html>