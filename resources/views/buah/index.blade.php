@extends('layout.template')
        <!-- START DATA -->
@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
      <a href='/buah/create' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-4">Nama Buah</th>
                <th class="col-md-2">Gambar Buah</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1 ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$item->nama}}</td>
                <td><img src="{{url('gambar/'.$item -> gambar) }}" width="100px"></td>
                <td>
                    <a href='{{url('buah/'.$item-> nama.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Yakin akan menghapus?')" class='d-inline' action="{{url('buah/'.$item-> nama)}}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
   
</div>
<!-- AKHIR DATA -->
@endsection
        