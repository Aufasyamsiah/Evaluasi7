@extends('layout/main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>


        <form method="post" action="/mahasiswa">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama Mahasiswa" name="nama" value="{{ old('nama') }}">
                @error('nama')<div class="invalid-feedback">{{ $message }}
                </div>@enderror
            </div>
            <div class="form-group">
                <label for="TTL">TTL</label>
                <input type="text" class="form-control @error('TTL') is-invalid @enderror" id="TTL" placeholder="Masukan TTL Mahasiswa" name="TTL" value="{{ old('TTL') }}">
                @error('TTL')<div class="invalid-feedback">{{ $message }}
                </div>@enderror
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control @error('umur') is-invalid @enderror"" id="umur" placeholder="Masukan Usia Mahasiswa" name="umur" value="{{ old('umur') }}">
                @error('umur')<div class="invalid-feedback">{{ $message }}
                </div>@enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat Mahasiswa" name="alamat" value="{{ old('alamat') }}">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
               
               

            </div>
        </div>
    </div>
@endsection  