@extends('layouts.apps')
@section("content")
<div>
    <h3>Edit Baju</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div><br />
        
    @endif
<form method="POST" action="{{ route('baju.update',$baju->id)}}">
    @csrf
    @method('put')
    <div class="input-group-text">
      <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
      <input type="text" name="nama" placeholder="Masukan Nama" >
    </div>
    <div class="input-group-text">
      <label for="staticEmail"class="col-sm-2 col-form-label">Harga</label>
      <input type="number"  name="harga" placeholder="Masukan Harga" >
    </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>
@stop