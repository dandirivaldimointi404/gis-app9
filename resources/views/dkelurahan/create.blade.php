@extends('layouts.panel.master')

@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"><i class="fa fa-pencil-square display-12 "></i>Tambah Data
                                Kelurahan</span></h3>
                            <br>
                            <div class="form-validation">
                                <form action="{{ route('dkelurahan.index') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group row col-md-6 ">
                                            <label class="col-lg-4 col-form-label" for="no_kelurahan">No Kelurahan <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control col-lg-6 @error('no_kelurahan') is-invalid @enderror"
                                                id="no_kelurahan" placeholder="Masukan Kode Kelurahan" name="no_kelurahan"
                                                value="{{ old('no_kelurahan') }}">
                                            @error('no_kelurahan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group row col-md-6 ">
                                            <label class="col-lg-4 col-form-label" for="nama_kelurahan">Nama Kelurahan <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <input type="text"
                                                class="form-control col-lg-6 @error('nama_kelurahan') is-invalid @enderror"
                                                id="nama_kelurahan" placeholder="Masukan Kelurahan" name="nama_kelurahan"
                                                value="{{ old('nama_kelurahan') }}">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group row col-md-6 ">
                                            <label class="col-lg-4 col-form-label" for="kd_kelurahan">Kode Geojson <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control col-lg-6 @error('kd_kelurahan') is-invalid @enderror"
                                                id="kd_kecamatan" placeholder="Masukan Kode Kelurahan" name="kd_kelurahan"
                                                value="{{ old('kd_kelurahan') }}">
                                            @error('kd_kecamatan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group row col-md-6 ">
                                            <label class="col-lg-4 col-form-label" for="geojson">File Geojson <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <input type="file"
                                                class="uploads form-control col-lg-6 @error('geojson') is-invalid @enderror"
                                                id="geojson" placeholder="Pilih File Geojson" name="geojson"
                                                value="{{ old('geojson') }}">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group row col-md-6 ">
                                            <label class="col-lg-4 col-form-label" for="latitude">Latitude <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control col-lg-6 @error('latitude') is-invalid @enderror"
                                                id="latitude" placeholder="LATITUDE" name="latitude"
                                                value="{{ old('latitude') }}">
                                            @error('latitude')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group row col-md-6 ">
                                            <label class="col-lg-4 col-form-label" for="nama">Longitude <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control col-lg-6 @error('longitude') is-invalid @enderror"
                                                id="longitude" placeholder="LONGITUDE" name="longitude"
                                                value="{{ old('longitude') }}">
                                            @error('longitude')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- <div>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target=".bd-example-modal-lg">Pilih Lokasi</button>
                                        </div> --}}

                                    </div>

                                    {{-- <div class="bootstrap-modal">
                                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Tambah Kelurahan</h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div>
                                                            <div id="map" style="height: 450px;"></div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <button style="float: right;" type="submit" class="btn btn-primary"><span
                                                    class="mr-3"><i class="fa fa-floppy-o"></i></span>Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"><i class="fa fa-pencil-square display-12 "></i>Tambah Data
                                Kelurahan</span></h3>
                            <br>
                            <div id="map" style="height: 450px;"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('createkelurahan')
        <script>
            var map = L.map('map').setView([0.5395466, 123.07175], 14);

            L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            $.getJSON("{{ asset('assets_landing/geojson/map.geojson') }}", function(data) {
                L.geoJSON(data, {
                    style: function(feature) {
                        return {
                            fillOpacity: 0.8,
                            weight: 1,
                            color: feature.properties.kd_warna
                        };
                    }
                }).addTo(map);
            });
            $.getJSON("{{ asset('assets_landing/geojson/heledulaa selatan.geojson') }}", function(data) {
                L.geoJSON(data, {
                    style: function(feature) {
                        return {
                            fillOpacity: 0.8,

                            weight: 1,
                            color: feature.properties.kd_warna
                        };
                    }
                }).addTo(map);
            });
            $.getJSON("{{ asset('assets_landing/geojson/heledulaa utara.geojson') }}", function(data) {
                L.geoJSON(data, {
                    style: function(feature) {
                        return {
                            fillOpacity: 0.8,

                            weight: 1,
                            color: feature.properties.kd_warna
                        };
                    }
                }).addTo(map);
            });
            $.getJSON("{{ asset('assets_landing/geojson/ipilo.geojson') }}", function(data) {
                L.geoJSON(data, {
                    style: function(feature) {
                        return {
                            fillOpacity: 0.8,

                            weight: 1,
                            color: feature.properties.kd_warna
                        };
                    }
                }).addTo(map);
            });
            $.getJSON("{{ asset('assets_landing/geojson/padebuolo.geojson') }}", function(data) {
                L.geoJSON(data, {
                    style: function(feature) {
                        return {
                            fillOpacity: 0.8,

                            weight: 1,
                            color: feature.properties.kd_warna
                        };
                    }
                }).addTo(map);
            });
            $.getJSON("{{ asset('assets_landing/geojson/tamalate.geojson') }}", function(data) {
                L.geoJSON(data, {
                    style: function(feature) {
                        return {
                            fillOpacity: 0.8,

                            weight: 1,
                            color: feature.properties.kd_warna
                        };
                    }
                }).addTo(map);
            });

            map.on('click', function(e) {
            var lat = e.latlng.lat.toFixed(6); 
            var lng = e.latlng.lng.toFixed(6); 

            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lng;
        });
        </script>
    @endpush
