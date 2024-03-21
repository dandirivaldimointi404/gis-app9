@extends('layouts.pwa.masterpwa')

@section('content')
    <div class="content-area">
        <div class="pagehead-bg primary-bg"> </div>

        <div class="container has-pagehead is-pagetitle">
            <div class="section">
                <h5 class="pagetitle">Data Kelahiran</h5>
            </div>
        </div>

        <div class="container full">
            <div class="section">

                <div class="search-bar">
                    <nav class="ui-forms">
                        <div class="nav-wrapper">
                            <form>
                                <div class="input-field">
                                    <input type="search" placeholder="Pencarian" required>
                                    <label><i class="mdi mdi-magnify"></i></label>
                                    <i class="material-icons mdi mdi-close"></i>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>

                <div class="spacer"></div>
                <div class="fixed-action-btn">
                    <a href="{{ route('kelahiran.create') }}" class="btn-floating btn-large pulse teal lighten-1">
                        <i class="mdi mdi-plus"></i>
                    </a>
                </div>

                @foreach ($kelahiran as $item)
                    <div class="collection ui-collection">
                        <div class="collection-item avatar" style="display: flex; align-items: center;">
                            <a href="{{ route('kelahiran.show', $item->id_kelahiran) }}"
                                style="text-decoration: none; color: rgba(0, 0, 0, 0.582);">
                                <img alt="image" src="{{ asset('assets_pwa/assets/images/user-icon.png') }}"
                                    class="circle">
                                <span class="title">{{ $item->nama }}</span>
                                <p>{{ $item->nik }}</p>
                            </a>
                            <div style="flex-grow: 1;">
                            </div>
                            <div>
                                <form action="{{ route('kelahiran.destroy', $item->id_kelahiran) }}" method="POST">
                                    <a href="{{ route('kelahiran.edit', $item->id_kelahiran) }}"
                                        class="btn-small waves-effect waves-light lighten-1"><i
                                            class="mdi mdi-square-edit-outline"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="waves-effect waves-light btn-small red lighten-1"
                                        data-id="{{ $item->id_kelahiran }}">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
