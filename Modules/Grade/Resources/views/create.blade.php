@extends('main')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Data Mata Pelajaran</h4>
      <p class="card-description">
        Form untuk menambah data mata pelajaran
      </p>
      <form action="{{ url('mapel/store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="subjectCode">Kode Mata Pelajaran</label>
          <input type="text" class="form-control" id="subjectCode" name="subject_code" placeholder="Kode">
        </div>
        <div class="form-group">
          <label for="subjectName">Nama Mata Pelajaran</label>
          <input type="text" class="form-control" id="subjectName" name="subject_name" placeholder="Nama">
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection