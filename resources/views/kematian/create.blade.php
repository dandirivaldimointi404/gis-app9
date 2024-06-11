@extends('layouts.pwa.masterpwa')

@section('content')
    <div class="content-area">

        <div class="pagehead-bg   primary-bg">
        </div>

        <div class="container has-pagehead is-pagetitle">
            <div class="section">
                <h5 class="pagetitle">Input Data Kematian</h5>
            </div>
        </div>


        <div class="spacer"></div>
        <div class="container over z-depth-1">
            <form action="{{ route('kematian.store') }}" method="post">
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
                            <input id="nama_lengkap" name="nama_lengkap" type="text" class="validate">
                            <label for="nama">Nama</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-circle-edit-outline prefix"></i>
                            <select id="jenis_kelamin" name="jenis_kelamin">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>



                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-calendar prefix"></i>
                            <input type="text" id="tgl_kematian" name="tgl_kematian" class="datepicker datepicker7">
                            <label for="tgl_kematina">Tanggal Kematian</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-account-outline prefix"></i>
                            <input type="text" id="nama_kk" name="nama_kk" class="materialize-textarea">
                            <label for="nama_kk">Nama Kepala Keluarga</label>
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
