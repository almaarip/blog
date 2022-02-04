@extends('layouts.apps')
@section("content")
<div>
    <h3>Tambah Pelanggan</h3>

    
<form method="POST" action="{{route('pelanggan.store')}}">
    @csrf
  <div class="form-group">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama Pelanggan</label>
    <input type="text" name="namapelanggan" placeholder="Masukan Nama Pelanggan" >
  </div>
  <div class="form-group">
    <label for="staticEmail"class="col-sm-2 col-form-label">No Handphone</label>
    <input type="number"  name="no" placeholder="Masukan Nomor Handphone" >
  </div>
  <div class="form-group">
    <label for="staticEmail"class="col-sm-2 col-form-label">Alamat</label>
    <input type="text"  name="alamat" placeholder="Masukan Alamat" >
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>
@stop