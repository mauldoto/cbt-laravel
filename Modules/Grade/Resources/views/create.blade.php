@extends('main')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Data Kelas</h4>
      <p class="card-description">
        Form untuk menambah data kelas
      </p>
      <form action="{{ url('kelas/store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="gradeName">Nama Kelas</label>
          <input type="text" class="form-control" id="gradeName" name="grade_name" placeholder="Nama Kelas">
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection