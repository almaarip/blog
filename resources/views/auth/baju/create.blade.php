@extends('layouts.apps')
@section("content")
<div>
    <h3>Tambah Baju</h3>

    
<form method="POST" action="{{route('baju.store')}}">
    @csrf
  <div class="form-group">
    <label for="staticEmail" class="col-sm-2 col-form-label">Kode</label>
    <input type="text"  name="kode" placeholder="Masukan KODE" >
  </div>
  <div class="form-group">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
    <input type="text" name="nama" placeholder="Masukan Nama" >
  </div>
  <div class="form-group">
    <label for="staticEmail" class="col-sm-2 col-form-label">Berat_Kilogram</label>
    <input type="number"  name="berat_kilogram" placeholder="Masukan Berat Baju">
  </div>
  <div class="form-group">
    <label for="staticEmail"class="col-sm-2 col-form-label">Harga</label>
    <input type="number"  name="harga" placeholder="Masukan Harga" >
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>
@stop