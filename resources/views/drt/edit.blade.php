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
                            <h3 class="card-title"><i class="fa fa-pencil-square display-12 "></i>Edit Data
                                RT</span></h3>
                            <br>
                            <div class="form-validation">
                                <form action="{{ route('drt.index') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group row col-md-6 ">
                                            <label class="col-lg-4 col-form-label" for="kd_rt">Kode Rt <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control col-lg-6 @error('kd_rt') is-invalid @enderror"
                                                id="nama_rt" placeholder="Masukan Kode Rt" name="kd_rt"
                                                value="{{ $drt->kd_rt}}">
                                            @error('kd_rt')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group row col-md-6 ">
                                            <label class="col-lg-4 col-form-label" for="nama_rt">Nama Rt <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <input type="text"
                                                class="form-control col-lg-6 @error('nama_rt') is-invalid @enderror"
                                                id="nama_rt" placeholder="Masukan Nama Rt" name="nama_rt"
                                                value="{{ $drt->nama_rt}}">
                                        </div>
                                    </div>

                                   
                                    <div class="form-row">
                                        <div class="form-group row col-md-6 ">
                                            <label class="col-lg-4 col-form-label" for="latitude">Latitude <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control col-lg-6 @error('latitude') is-invalid @enderror"
                                                id="latitude" placeholder="LATITUDE" name="latitude"
                                                value="{{ $drt->latitude}}">
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
                                                value="{{ $drt->longitude}}">
                                            @error('longitude')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group row col-md-6">
                                            <label class="col-lg-4 col-form-label" for="kelurahan_kd">Nama Kelurahan <span class="text-danger">*</span></label>
                                            <select class="form-control col-lg-6" name="kelurahan_kd" id="kelurahan_kd">
                                                <option value="">Pilih Kelurahan</option>
                                                @foreach ($kelurahan as $item)
                                                    <option value="{{ $item->kd_kelurahan }}" {{ $item->kd_kelurahan == $drt->kelurahan_kd ? 'selected' : '' }}>
                                                        {{ $item->nama_kelurahan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    


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

    @push('creatert')
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
