@extends('layout/main')

@section('title', 'Data Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Data Mahasiswa</h1>


                <a href="/mahasiswa/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>


            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <ul class="list-group">
                    @foreach( $mahasiswa as $mahasiswa )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    
                        {{ $mahasiswa->nama }}

                        <a href="/mahasiswa/{{ $mahasiswa->id }}" class="button button-info">detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection  