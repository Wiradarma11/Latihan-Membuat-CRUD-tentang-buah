@extends('layout.template')       
       <!-- START FORM -->
@section('konten')

@if ($errors->any())
<div class="pt-3">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>
    
@endif
<form action='{{url('buah')}}' method='post' enctype="multipart/form-data">
@csrf 
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{url('buah')}}' class="btn btn-secondary"><< Kembali</a>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Buah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar Buah</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name='gambar' id="gambar">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gambar" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
      </form>
    </div>
    <!-- AKHIR FORM -->
@endsection
       