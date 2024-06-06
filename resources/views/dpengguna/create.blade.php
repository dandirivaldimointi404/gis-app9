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
                            <h3 class="card-title"><i class="fa fa-pencil-square display-12"></i> Tambah Data Pengguna</h3>
                            <br>
                            <div class="basic-form">
                                <form class="form-valide" method="post" action="{{ route('dpengguna.store') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" id="name" placeholder="Masukan Nama" name="name" value="{{ old('name') }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="level"><b>Pengguna</b></label>
                                            <select class="form-control" name="level" onchange="myFunction()" id="level">
                                                <option value="">Pilih Pengguna</option>
                                                <option value="rt">RT</option>
                                                <option value="rw">RW</option>
                                                <option value="camat">CAMAT</option>
                                                <option value="admin">ADMIN</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row" id="kelurahanSection" style="display: none;">
                                        <div class="form-group col-md-6">
                                            <label for="kelurahan_kd"><b>RT</b></label>
                                            <select class="form-control" name="rt_kd" id="kelurahan_kd">
                                                <option value="">Pilih RT</option>
                                                @foreach ($rt as $item)
                                                    <option value="{{ $item->kd_rt }}">
                                                        {{$item->kelurahan->nama_kelurahan}} - {{ $item->nama_rt }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <button style="float: right;" type="submit" class="btn btn-primary">
                                                <span class="mr-3"><i class="fa fa-floppy-o"></i></span> Simpan Data
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            var level = document.getElementById("level").value;
            var kelurahanSection = document.getElementById("kelurahanSection");

            if (level == "rt") {
                kelurahanSection.style.display = "block";
            } else {
                kelurahanSection.style.display = "none";
            }
        }
    </script>
@endsection
