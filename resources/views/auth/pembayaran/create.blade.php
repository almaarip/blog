@extends('layouts.apps')
@section("content")
<div>
    <h3>Tambah Pelanggan</h3>

    
<form method="POST" action="{{route('pembayaran.store')}}">
    @csrf
    <div class"form-group">
      <label for="pelanggan">Nama Pelanggan </label>
      <select name="pelanggan_id" class="form-control">
        @foreach ($pelanggans as $pelanggan)
          <option value="{{$pelanggan->id}}"> {{$pelanggan->namapelanggan}} </option>
        @endforeach
          
      </select>
    </div>
    <div class"form-group">
      <label for="baju">Nama Produk</label>
      <select name="baju_id" class="form-control">
        @foreach ($bajus as $baju)
          <option value="{{$baju->id}}"> {{$baju->nama}} </option>
        @endforeach
          
      </select>
    </div>
  <div class="form-group">
    <label for="staticEmail"class="col-sm-2 col-form-label">qty</label>
    <input type="number"  name="qty" placeholder="Masukan qty" >
  </div>
  <div class="form-group">
    <label for="staticEmail"class="col-sm-2 col-form-label">total</label>
    <input type="number"  name="total" placeholder="Masukan Total" >
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>
@stop