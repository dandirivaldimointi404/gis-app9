@extends('layouts.panel.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="alert alert-info"> Selamat Datang {{ Auth::user()->name }}</div>


            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white"><i class="fa fa-university"></i><span class="nav-text ml-2">Data
                                    Kekurahan</span></h3>
                            <div class="d-inline-block">
                                <h2 class="text-white"></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white"><i class="fa fa-building"></i><span class="nav-text ml-2">Data
                                    RT</span></h3>

                            <div class="d-inline-block">
                                <h2 class="text-white"></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card gradient-3">
                        <div class="card-body">
                            <h3 class="card-title text-white"><i class="fa fa-users"></i><span class="nav-text ml-2">Data
                                    User</span></h3>

                            <div class="d-inline-block">
                                <h2 class="text-white"></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
