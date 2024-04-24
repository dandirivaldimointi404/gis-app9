@extends('layouts.pwa.masterpwa')

@section('content')
    <div class="content-area">

        <div class="pagehead-bg   primary-bg">
        </div>

        <div class="container has-pagehead is-pagetitle">
            <div class="section">
                <h5 class="pagetitle">Input Data Kelahiran</h5>
            </div>
        </div>


        <div class="spacer"></div>
        <div class="container over z-depth-1">
            <form action="{{ route('kelahiran.store') }}" method="post">
                @csrf
                <div class="section">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-account-outline prefix"></i>
                            <input id="nik" name="nik" type="text" class="validate">
                            <label for="nik">NIK</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-account-outline prefix"></i>
                            <input id="no_kk" name="no_kk" type="text" class="validate">
                            <label for="no_kk">No KK</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-account-outline prefix"></i>
                            <input id="nama" name="nama" type="text" class="validate">
                            <label for="nama">Nama</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-circle-edit-outline prefix"></i>
                            <input id="jenis_kelamin" name="jenis_kelamin" type="text" class="validate">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-cellphone prefix"></i>
                            <input id="tempat_lahir" name="tempat_lahir" type="text" class="validate">
                            <label for="tempat_lahir">Tempat Lahir</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-calendar prefix"></i>
                            {{-- <input type="text" id="tgl_lahir" name="tgl_lahir" class="datepicker datepicker2"> --}}
                            <input type="text" id="tgl_lahir" name="tgl_lahir" class="datepicker datepicker7">

                            <label for="tgl_lahir">Tanggal Lahir</label>
                        </div>
                    </div>



                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-briefcase-outline prefix"></i>
                            <input id="golongan_darah" name="golongan_darah" type="text" class="validate">
                            <label for="golongan_darah">Golongan Darah</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-briefcase-outline prefix"></i>
                            <input id="agama" name="agama" type="text" class="validate">
                            <label for="agama">Agama</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-briefcase-outline prefix"></i>
                            <input id="status" name="status" type="text" class="validate">
                            <label for="status">Status</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-briefcase-outline prefix"></i>
                            <input id="pendidikan" name="pendidikan" type="text" class="validate">
                            <label for="pendidikan">Pendidikan</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-circle-edit-outline prefix"></i>
                            <textarea id="textarea-prefix" name="alamat" class="materialize-textarea"></textarea>
                            <label for="alamat">Alamat</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col s12">
                            <div class="right-align">
                                <button type="submit" class="waves-effect waves-light btn-large bg-primary">Simpan
                                    Data</button>
                            </div>
                        </div>
                    </div>


                </div>
            </form>
        </div

    </div>
@endsection
