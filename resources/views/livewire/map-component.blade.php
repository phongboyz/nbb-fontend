<div>
    <div class="ne_recent_news_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="ne_recent_left_side_wrapper">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                                <div class="container mt-5 text-center items-center">
                                    <h2 class="py-5"> <i class="fa fa-map-signs text-success" ></i> ທີ່ຕັ້ງ ທະນາຄານ ນະໂຍບາຍ</h2> <br>
                                    <div id="map"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
        function initMap() {
            const myLatLng = { lat: 17.9919200000, lng: 102.6384830000 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 5,
                center: myLatLng,
            });
  
            var locations = {{ Js::from($locations) }};
  
            var infowindow = new google.maps.InfoWindow();
  
            var marker, i;
              
            for (i = 0; i < locations.length; i++) {  
                  marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map
                  });
                    
                  google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                      infowindow.setContent(locations[i][0]);
                      infowindow.open(map, marker);
                    }
                  })(marker, i));
  
            }
        }
  
        window.initMap = initMap;
    </script>
  
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
@endpush