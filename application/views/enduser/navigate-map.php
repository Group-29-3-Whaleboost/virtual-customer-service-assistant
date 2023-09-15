<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div id="map" style="width: 100%; height: 100vh;"></div>
    <?php
    $Latitude = 7.8731; 
    $Longitude = 80.7718; 
    ?>

    <script>
        function initMap() {
            const mapDiv = document.getElementById('map'); 

            const map = new google.maps.Map(mapDiv, {
                center: { lat: 0, lng: 0 }, 
                zoom: 10 
            });

            const latitude = <?php echo $Latitude; ?>;
            const longitude = <?php echo $Longitude; ?>;

            if (!isNaN(latitude) && !isNaN(longitude)) {
                const newCenter = new google.maps.LatLng(latitude, longitude);
                map.setCenter(newCenter);
            }
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyG7s6a2_8gVmj8qeinQAhx1ueu1GrR5Q&libraries=places&callback=initMap">
    </script>
</body>
</html>
