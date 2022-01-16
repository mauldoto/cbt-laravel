@extends('main')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Data Mata Pelajaran</h4>
      <p class="card-description">
        Form untuk mengubah data mata pelajaran
      </p>
      <form action="{{ url('mapel/update', $subject->id) }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="subjectCode">Kode Mata Pelajaran</label>
          <input type="text" class="form-control" id="subjectCode" name="subject_code" placeholder="Kode" value="{{ $subject->subject_code }}">
        </div>
        <div class="form-group">
          <label for="subjectName">Nama Mata Pelajaran</label>
          <input type="text" class="form-control" id="subjectName" name="subject_name" placeholder="Nama" value="{{ $subject->subject_name }}">
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection