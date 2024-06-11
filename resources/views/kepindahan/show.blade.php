@extends('layouts.pwa.masterpwa')

@section('content')
    <div class="content-area">

        <div class="pagehead-bg   primary-bg">
        </div>

        <div class="ui-profile" style="padding-bottom: 0">
          <div class="prinfo card-panel">
              <img alt="image" src="{{ asset('assets_pwa/assets/images/user-icon.png') }}" style="padding-top: 50px; width:60">
                <div class="prname">
                    <h4 class="name">{{$kelahiran->nama}}</h4>
                </div>
            </div>
        </div>


        <div class="container over z-depth-1">
                <div class="section">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-account-outline prefix"></i>
                            <input id="nik" name="nik" type="text" class="validate" value="{{$kelahiran->nik}}">
                            <label for="nik">NIK</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-account-outline prefix"></i>
                            <input id="nama" name="nama" type="text" class="validate" value="{{ $kelahiran->nama}}">
                            <label for="nama">Nama</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-circle-edit-outline prefix"></i>
                            <select id="jenis_kelamin" name="jenis_kelamin">
                                <option value="" disabled {{ old('jenis_kelamin', $kelahiran->jenis_kelamin) == '' ? 'selected' : '' }}>Pilih Jenis Kelamin</option>
                                <option value="laki-laki" {{ old('jenis_kelamin', $kelahiran->jenis_kelamin) == 'laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="perempuan" {{ old('jenis_kelamin', $kelahiran->jenis_kelamin) == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-calendar prefix"></i>
                            <input type="text" id="tgl_lahir" name="tgl_lahir" class="datepicker datepicker7" value="{{ $kelahiran->tgl_lahir}}">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-account-outline prefix"></i>
                            <input type="text" id="nama_kk" name="nama_kk" class="materialize-textarea" value="{{ $kelahiran->nama_kk}}">
                            <label for="nama_kk">Nama Kepala Keluarga</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi mdi-circle-edit-outline prefix"></i>
                            <textarea id="textarea-prefix" name="alamat" class="materialize-textarea">{{$kelahiran->alamat}}</textarea>
                            <label for="alamat">Alamat</label>
                        </div>
                    </div>
                </div>
        </div>


    </div>
@endsection
