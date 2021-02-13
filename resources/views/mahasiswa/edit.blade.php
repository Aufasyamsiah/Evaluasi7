@extends('layout/main')

@section('title', 'Form Ubah Data Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>


        <form method="post" action="/mahasiswa/{{ $mahasiswa->id }}">
        @method('patch')
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama Mahasiswa" name="nama" value="{{ $mahasiswa->nama }}">
                @error('nama')<div class="invalid-feedback">{{ $message }}
                </div>@enderror
            </div>
            <div class="form-group">
                <label for="TTL">TTL</label>
                <input type="text" class="form-control @error('TTL') is-invalid @enderror" id="TTL" placeholder="Masukan Nama Mahasiswa" name="TTL" value="{{ $mahasiswa->TTL }}">
                @error('TTL')<div class="invalid-feedback">{{ $message }}
                </div>@enderror
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control @error('umur') is-invalid @enderror"" id="umur" placeholder="Masukan Usia Mahasiswa" name="umur" value="{{ $mahasiswa->umur }}">
                @error('umur')<div class="invalid-feedback">{{ $message }}
                </div>@enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat Mahasiswa" name="alamat" value="{{ $mahasiswa->alamat }}">
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
               
               

            </div>
        </div>
    </div>
@endsection  