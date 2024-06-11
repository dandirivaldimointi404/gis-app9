@extends('layouts.panel.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Data Pertumbuhan</h4>
                            <a href="{{ route('download-pdf') }}" class="btn mb-1 btn-outline-danger">Cetak PDF</a>
                        </div>
                        
                        <div class="default-tab">

                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Data
                                        Kelahiran</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Data Kematian</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#contact">Data Pindah</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#message">Data
                                        Pendatang</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                {{-- KELAHIRAN --}}
                                <div class="tab-pane fade show active" id="home" role="tabpanel">
                                    <div class="p-t-15">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nik</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tanggal</th>
                                                    <th>Nama Kepala Keluarga</th>
                                                    <th>Alamat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kelahiran as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->nama }}</td>
                                                        <td>{{ $item->nik }}</td>
                                                        <td>{{ $item->jenis_kelamin }}</td>
                                                        <td>{{ $item->tgl_lahir }}</td>
                                                        <td>ahmadclea</td>
                                                        <td>{{ $item->alamat }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                {{-- KEMATIAN --}}
                                <div class="tab-pane fade" id="profile">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Nik</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tanggal</th>
                                                <th>Nama Kepala Keluarga</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kematian as $item)
                                                <tr>
                                                    <td>
                                                        <{{ $loop->iteration }} /td>
                                                    <td>{{ $item->nama_lengkap }}</td>
                                                    <td>{{ $item->nik }}</td>
                                                    <td>{{ $item->jenis_kelamin }}</td>
                                                    <td>{{ $item->tgl_kematian }}</td>
                                                    <td>ahmadclea</td>
                                                    <td>{{ $item->alamat }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                {{-- PINDAH --}}
                                <div class="tab-pane fade" id="contact">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Nik</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tanggal</th>
                                                <th>Nama Kepala Keluarga</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kepindahan as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama_lengkap }}</td>
                                                    <td>{{ $item->nik }}</td>
                                                    <td>{{ $item->jenis_kelamin }}</td>
                                                    <td>{{ $item->tgl_pindah }}</td>
                                                    <td>ahmadclea</td>
                                                    <td>{{ $item->alamat }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                {{-- PENDATANG --}}
                                <div class="tab-pane fade" id="message">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Nik</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tanggal</th>
                                                <th>Nama Kepala Keluarga</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($user as $item) --}}
                                            <tr>
                                                <td>1</td>
                                                <td>ilyas</td>
                                                <td>12345678</td>
                                                <td>Laki-laki</td>
                                                <td>20-11-2001</td>
                                                <td>ilyas</td>
                                                <td>Moodu</td>
                                                {{-- <td>
                                                        <form action="{{ route('dpengguna.destroy', $item->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{ route('dpengguna.edit', $item->id) }}"
                                                                class="btn btn-rounded btn-outline-primary">Edit Data</a>
                                                            <button type="submit"
                                                                class="btn btn-rounded btn-outline-danger">Hapus Data</button>
                                                        </form>
    
                                                    </td> --}}
                                            </tr>
                                            {{-- @endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
