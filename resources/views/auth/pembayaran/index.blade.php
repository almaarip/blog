@extends("layouts.apps")

<?php $no=1 ?>
@section("content")
    <h3>Data Pembayaran</h3>
        <a href="{{route('pembayaran.create')}}" class="btn btn-success">Tambah Data</a>
        
   <table class="table">
        <thead>
            <tr>
                <th>Nama Pelanggan</th>
                <th>Nama Produk</th>
                <th>qty</th>
                <th>Total</th>
                <th colspan=2></th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembayarans as $pembayaran)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $pembayaran->pelanggan_id->namapelanggan }}</td>
                    <td>{{ $pembayaran->baju_id->nama }}</td>
                    <td>{{ $pembayaran->qty }}</td>
                    <td>{{ $pembayaran->total }}</td>
                    <td>
                        <a href="{{route ('pembayaran.edit',$pembayaran->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{route ('pembayaran.destroy',$pembayaran->id)}}" method="POST">
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