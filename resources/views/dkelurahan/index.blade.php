@extends('layouts.panel.master')

@section('content')
    <div class="content-body">


        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Kelurahan</h4>
                            <div class="table-responsive">
                                <a style="float: right;" class="btn mb-1 btn-outline-primary"
                                    href="{{ route('dkelurahan.create') }}"><span class="mr-2"><i
                                            class="fa fa-pencil-square"></i></span>Tambah Data</a>
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Kelurahan</th>
                                            <th>Kelurahan</th>
                                            <th>latitude</th>
                                            <th>Longitude</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($dkelurahan as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->kd_kelurahan}}</td>
                                                <td>{{$item->nama_kelurahan}}</td>
                                                <td>{{$item->latitude}}</td>
                                                <td>{{$item->longitude}}</td>
                                                <td class="text-center">
                                                    <form action="{{ route('dkelurahan.destroy', $item->kd_kelurahan)}}" method="POST">
                                                        <a href="{{ route('dkelurahan.update',$item->kd_kelurahan)}}" class="btn btn-rounded btn-outline-primary">Edit
                                                            Data</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-rounded btn-outline-danger" data-id="{{ $item->kd_kelurahan }}">Hapus
                                                            Data</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>z
@endsection
