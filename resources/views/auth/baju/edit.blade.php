@extends('layouts.apps')
@section("content")
<div>
    <h3>Edit Mahasiswa</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div><br />
        
    @endif
<form method="POST" action="{{ route('student.update',$student->id)}}">
    @csrf
    @method('put')
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">NRP</label>
    <input type="text"  class="form-control-plaintext" name="code" value="{{$student->code}}">
  </div>
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
    <input type="text"  class="form-control-plaintext" name="name" value="{{$student->name}}">
  </div>
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <input type="radio"  class="form-control-plaintext" name="gender" value="P" value="P"{{$student->gender == 'P' ? 'checked' : ''}} >Pria
    <input type="radio"  class="form-control-plaintext" name="gender" value="W" value="W"{{$student->gender == 'W' ? 'checked' : ''}}>Wanita
  </div>
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <input type="text"  class="form-control-plaintext" name="birth_place" value="{{$student->birth_place}}">
  </div>
  <div class="input-group-text">
    <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <input type="date"  class="form-control-plaintext" name="birth_date" value="{{ date('Y-m-d',strtotime ($student->birth_date))}}">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>
@stop