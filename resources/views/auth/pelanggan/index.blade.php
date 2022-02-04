@extends("layouts.apps")

<?php $no=1 ?>
@section("content")
    <h3>Data pelanggan</h3>
        <a href="{{route('pelanggan.create')}}" class="btn btn-success">Tambah Data</a>
        
   <table class="table">
        <thead>
            <tr>
                <th>Nama Pelanggan</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th colspan=2></th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelanggans as $pelanggan)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $pelanggan->nama }}</td>
                    <td>{{ $pelanggan->no }}</td>
                    <td>{{ $pelanggan->alamat }}</td>
                    <td>
                        <a href="{{route ('pelanggan.edit',$pelanggan->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{route ('pelanggan.destroy',$pelanggan->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody> 
   </table>
@stop