@extends('dashboard.template.app')
@section('content')
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Row-->
                    <div class="row g-2 g-lg-10">
                        <div class="col-xl-12 mb-5 mb-lg-10">
                            <!--begin::Table Widget 6-->
                            <div class="card h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-2">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold fs-3 mb-1">نقشه آنلاین</span>
                                    </h3>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-0">


                                    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
                                    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
                                    <script src="https://cdn.tiny.cloud/1/mmeunpua0i9aqsv2ec85dtd2fot4wr3eebzastw4kq8bqul8/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

                                    <!-- Add CSS for map container -->
                                    <style>
                                        #mapid { height: 500px; }
                                    </style>
                                    <!-- Create map container -->
                                    <div id="mapid"></div>
                                    <!-- Add form to submit selected location -->
                                    <!-- Add button to find user's location -->
                                    <button onclick="findMyLocation()">Find My Location</button>
                                    <!-- Add script to initialize map and handle click event -->
                                    <script>
                                        var map = L.map('mapid').setView([29.4963, 60.8629], 13);
                                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                            attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors'
                                        }).addTo(map);
                                        var marker = L.marker([29.4963, 60.8629]).addTo(map);
                                        function onMapClick(e) {
                                            marker.setLatLng(e.latlng);
                                            document.getElementById('lat').value = e.latlng.lat;
                                            document.getElementById('lng').value = e.latlng.lng;
                                        }
                                        map.on('click', onMapClick);
                                        // Function to find user's location and update map
                                        function findMyLocation() {
                                            map.locate({setView: true, maxZoom: 16});
                                            function onLocationFound(e) {
                                                var radius = e.accuracy / 2;
                                                L.marker(e.latlng).addTo(map)
                                                    .bindPopup("You are within " + radius + " meters from this point").openPopup();
                                                L.circle(e.latlng, radius).addTo(map);
                                                marker.setLatLng(e.latlng);
                                                document.getElementById('lat').value = e.latlng.lat;
                                                document.getElementById('lng').value = e.latlng.lng;
                                            }
                                            map.on('locationfound', onLocationFound);
                                            function onLocationError(e) {
                                                alert(e.message);
                                            }
                                            map.on('locationerror', onLocationError);
                                        }
                                    </script>



                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::جداول Widget 6-->
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Post-->
            </div>
@endsection

