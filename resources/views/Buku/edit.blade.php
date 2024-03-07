@extends('layouts.master')

@section('content')
<<<<<<< HEAD
        <div class="container">
            <nav class="navbar navbar-dark bg-primary">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <b> Edit Buku</b>
                    </a>
                </div>
            </nav>
            <br>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data
                    </div>
                    <div class="card-body">
                        <form action="{{ route('buku.update', $buku->id) }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="judul" class="form-label">judul</label>
                                <input type="text" value="{{$buku->judul}}" name="judul" class="form-control"
                                    id="judul" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">penulis</label>
                                <input type="text" name="penulis" value="{{$buku->penulis}}" class="form-control"> 
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">penerbit</label>
                                <input type="text" name="penerbit" value="{{$buku->penerbit}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">tahun terbit</label>
                                <input type="number" name="tahun_terbit" value="{{$buku->tahun_terbit}}"  class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
=======
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg rounded-3">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Edit Data Buku</h5>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul:</label>
                                <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="penulis" class="form-label">Penulis:</label>
                                <input type="text" name="penulis" class="form-control" value="{{ $buku->penulis }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit:</label>
                                <input type="text" name="penerbit" class="form-control" value="{{ $buku->penerbit }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="tahun_terbit" class="form-label">Tahun Terbit:</label>
                                <select name="tahun_terbit" class="form-select custom-select" required>
                                    @php
                                        $currentYear = date('Y');
                                        $startYear = 1900; 
                                    @endphp
                                    @for($year = $currentYear; $year >= $startYear; $year--)
                                        <option value="{{ $year }}" {{ $buku->tahun_terbit == $year ? 'selected' : '' }}>{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="kategori_id" class="form-label">Kategori:</label>
                                <select name="kategori_id" class="form-select custom-select" required>
                                    @foreach($kategori as $k)
                                        <option value="{{ $k->id }}" {{ $buku->kategori->contains('id', $k->id) ? 'selected' : '' }}>{{ $k->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Buku:</label>
                                <input type="file" name="foto" accept="image/*" class="form-control">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
>>>>>>> 6dc677e (perubahan)
                        </form>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
=======
    </div>
>>>>>>> 6dc677e (perubahan)
@endsection