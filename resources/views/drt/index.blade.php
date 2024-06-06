@extends('layouts.panel.master')

@section('content')
    <div class="content-body">


        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data RT</h4>
                            <div class="table-responsive">
                                <a style="float: right;" class="btn mb-1 btn-outline-primary"
                                    href="{{ route('drt.create') }}"><span class="mr-2"><i
                                            class="fa fa-pencil-square"></i></span>Tambah Data</a>
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode RT</th>
                                            <th>RT</th>
                                            <th>Kelurahan</th>
                                            <th>latitude</th>
                                            <th>Longitude</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($drt as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->kd_rt}}</td>
                                                <td>{{$item->nama_rt}}</td>
                                                <td>{{$item->kelurahan_kd}}</td>
                                                <td>{{$item->latitude}}</td>
                                                <td>{{$item->longitude}}</td>
                                                <td class="text-center">
                                                    <form action="{{ route('drt.destroy', $item->kd_rt)}}" method="POST">
                                                        <a href="{{ route('drt.edit',$item->kd_rt)}}" class="btn btn-rounded btn-outline-primary">Edit
                                                            Data</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-rounded btn-outline-danger" data-id="{{ $item->kd_rt }}">Hapus
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
