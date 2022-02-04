@extends('layouts.apps')
@section("content")
<div>
    <h3>Edit pelanggan</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div><br />
        
    @endif
<form method="POST" action="{{ route('pelanggan.update',$pelanggan->id)}}">
    @csrf
    @method('put')
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