<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">SafeFit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php echo site_url("Welcome/About")?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php echo site_url("Welcome/dashboard_class") ?>">Login</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="<?php echo site_url("Welcome/dashboard_School") ?>">NewComp</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="bg-primary text-white">
    <div class="container text-center">
        <h1>Welcome to Scrolling Nav</h1>
        <p class="lead">Automated tool to connect your children</p>
    </div>
</header>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div id="map-canvas"></div>

                <script>
                    function initMap() {
                        var map;
                        var bounds = new google.maps.LatLngBounds();
                        var mapOptions = {
                            mapTypeId: 'roadmap'
                        };

                        // Display a map on the web page
                        map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
                        map.setTilt(50);

                        // Multiple markers location, latitude, and longitude
                        var markers = [
                            ['Brooklyn Museum, NY', 40.671531, -73.963588],
                            ['Brooklyn Public Library, NY', 40.672587, -73.968146],
                            ['Prospect Park Zoo, NY', 40.665588, -73.965336]
                        ];

                        // Info window content
                        var infoWindowContent = [
                            ['<div class="info_content">' +
                                        '<h3>Brooklyn Museum</h3>' +
                                        '<p>The Brooklyn Museum is an art museum located in the New York City borough of Brooklyn.</p>' + '</div>'],
                            ['<div class="info_content">' +
                                        '<h3>Brooklyn Public Library</h3>' +
                                        '<p>The Brooklyn Public Library (BPL) is the public library system of the borough of Brooklyn, in New York City.</p>' +
                                        '</div>'],
                            ['<div class="info_content">' +
                                        '<h3>Prospect Park Zoo</h3>' +
                                        '<p>The Prospect Park Zoo is a 12-acre (4.9 ha) zoo located off Flatbush Avenue on the eastern side of Prospect Park, Brooklyn, New York City.</p>' +
                                        '</div>']
                        ];

                        // Add multiple markers to map
                        var infoWindow = new google.maps.InfoWindow(), marker, i;

                        // Place each marker on the map  
                        for (i = 0; i < markers.length; i++) {
                            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                            bounds.extend(position);
                            marker = new google.maps.Marker({
                                position: position,
                                map: map,
                                title: markers[i][0]
                            });

                            // Add info window to marker    
                            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                                return function () {
                                    infoWindow.setContent(infoWindowContent[i][0]);
                                    infoWindow.open(map, marker);
                                }
                            })(marker, i));

                            // Center the map to fit all markers on the screen
                            map.fitBounds(bounds);
                        }

                        // Set zoom level
                        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
                            this.setZoom(14);
                            google.maps.event.removeListener(boundsListener);
                        });

                    }
                    // Load initialize function
                    google.maps.event.addDomListener(window, 'load', initMap);
                </script>

            </div>
        </div>
    </div>
</section>


<div class="container-fluid">
    <div class="row">

        <div class="col-lg-6">
           
            
            
            
        </div>
        <div class="col-lg-6">
            <div class="jumbotron">
                <form action="">
                    <div>
                    
                        <?php echo $this->lang->line('Name');?>
                        <input type="text" value="" class="form-control" id="name" name="name" required="true">
                    </div>
                    <div>
                        Phone:
                        <input type="text" value="" class="form-control" id="phone" name="phone" required="true">
                    </div>
                    <div>
                        Password
                        <input type="text" value="" class="form-control" id="password" name="password" required="true">
                    </div>
                    <div>
                        Confirm
                        <input type="text" value="" class="form-control" id="confrmpass" name="confrmpass" required="true">
                    </div>
                    
                    <div>
                        <input type="submit" value="Register" class="btn btn-success" id="submit" name="submit">
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>



<a href="<?php echo site_url("Welcome/search") ?>">search</a>
