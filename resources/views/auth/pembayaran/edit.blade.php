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
<form method="POST" action="{{ route('pembayaran.update',$pembayaran->id)}}">
    @csrf
    @method('put')
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
    <div class"form-group">
      <label for="baju">Harga</label>
      <select name="baju_id" class="form-control">
        @foreach ($bajus as $baju)
          <option value="{{$baju->id}}"> {{$baju->harga}} </option>
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