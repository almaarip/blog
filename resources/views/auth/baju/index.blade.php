@extends("layouts.apps")

<?php $no=1 ?>
@section("content")
    <h3>Data Baju</h3>
        <a href="{{route('baju.create')}}" class="btn btn-success">Tambah Data</a>
        
   <table class="table">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Berat_Kilogram</th>
                <th>Jumlah</th>
                <th colspan=2></th>
            </tr>
        </thead>
        <tbody>
            @foreach($bajus as $baju)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $baju->kode }}</td>
                    <td>{{ $baju->nama }}</td>
                    <td>{{ $baju->berat_kilogram}}</td>
                    <td>{{ $baju->harga }}</td>
                    <td>
                        <a href="{{route ('baju.edit',$baju->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{route ('baju.destroy',$baju->id)}}" method="POST">
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