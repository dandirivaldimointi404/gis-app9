@extends('layouts.panel.master')

@section('content')
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Pengguna</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><i class="fa fa-pencil-square display-12 "></i>Edit Data Pengguna</h3>
                        <br>
                        <div class="basic-form">
                            <form class="form-valide" method="POST" action="{{ route('dpengguna.update', $dpengguna->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $dpengguna->name) }}" placeholder="Masukan Nama">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password (Kosongkan jika tidak ingin mengubah)">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $dpengguna->username) }}" placeholder="Masukan Username">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="level"><b>Pengguna</b></label>
                                        <select class="form-control" name="level" onchange="myFunction()" id="level">
                                            <option value="">Pilih Pengguna</option>
                                            <option value="rt" {{ $dpengguna->level == 'rt' ? 'selected' : '' }}>RT</option>
                                            <option value="rw" {{ $dpengguna->level == 'rw' ? 'selected' : '' }}>RW</option>
                                            <option value="camat" {{ $dpengguna->level == 'camat' ? 'selected' : '' }}>CAMAT</option>
                                            <option value="admin" {{ $dpengguna->level == 'admin' ? 'selected' : '' }}>ADMIN</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row" id="kelurahanSection" style="{{ $dpengguna->level == 'rt' ? 'display: block;' : 'display: none;' }}">
                                    <div class="form-group col-md-6">
                                        <label for="rt_kd"><b>RT</b></label>
                                        <select class="form-control" name="rt_kd" id="rt_kd">
                                            <option value="">Pilih RT</option>
                                            @foreach ($rt as $item)
                                                <option value="{{ $item->kd_rt }}" {{ $dpengguna->rt_kd == $item->kd_rt ? 'selected' : '' }}>
                                                    {{ $item->kelurahan->nama_kelurahan }} - {{ $item->nama_rt }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary" style="float: right;">
                                            <span class="mr-3"><i class="fa fa-floppy-o"></i></span>Simpan Data
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
