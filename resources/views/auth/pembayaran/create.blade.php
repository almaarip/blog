@extends('layouts.apps')
@section("content")
<div>
    <h3>Pembayaran</h3>

    
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
    
    <div class"form-group">
      <label for="baju"class="col-sm-2 col-form-label">Harga</label>
      <input type="text"  name="harga" placeholder="Masukan harga" id="txt1" onkeyup="sum();" >
    </div>
  <div class="form-group">
    <label for="staticEmail"class="col-sm-2 col-form-label">Kilo</label>
    <input type="text"  name="qty" placeholder="Masukan qty" id="txt2" onkeyup="sum();" >
  </div>
  <div class="form-group">
    <label for="staticEmail"class="col-sm-2 col-form-label">total</label>
    <input type="text"  name="total" id="txt3" >
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>
<script>
  function sum(){
    var txtFirst = document.getElementById('txt1'). value;
    var txtSecond = document.getElementById('txt2'). value;
    var result = parseInt(txtFirst) * parseInt(txtSecond);
    if (!isNaN(result)){
      document.getElementById('txt3').value = result;
    }
  }
</script>
@stop