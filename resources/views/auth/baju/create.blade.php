@extends('layouts.apps')
@section("content")
<div>
    <h3>Tambah Mahasiswa</h3>

    
<form method="POST" action="{{route('student.store')}}">
    @csrf
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">NRP</label>
    <input type="text"  class="form-control-plaintext" name="code" placeholder="Masukan NRP" >
  </div>
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
    <input type="text" class="form-control-plaintext" name="name" placeholder="Masukan Nama" >
  </div>
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <input type="radio" class="form-control-plaintext" name="gender" value="P" >Pria
    <input type="radio" class="form-control-plaintext" name="gender" value="W" >Wanita
  </div>
  <div class="input-group-text">
    <label for="staticEmail"class="col-sm-2 col-form-label">Tempat Lahir</label>
    <input type="text" class="form-control-plaintext" name="birth_place" placeholder="Masukan Tempat Lahir" >
  </div>
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <input type="date" class="form-control-plaintext" name="birth_date" >
  </div>

  <div class"form-group">
    <label for="faculty">Nama Prodi </label>
    <select name="faculty_id" class="form-control">
      @foreach ($faculties as $faculty)
        <option value="{{$faculty->id}}"> {{$faculty->name}} </option>
      @endforeach
        
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>
@stop