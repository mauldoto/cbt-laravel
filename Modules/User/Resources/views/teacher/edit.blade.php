
@extends('main')

@push('additional-plugin-css')
<link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
@endpush

@section('content')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"> Edit Data  Guru</h4>
      <p class="card-description">
        Form untuk merubah data guru
      </p>
      <form action="{{ url('guru/store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="teacherName">Nama Guru</label>
          <input type="text" class="form-control" id="teacherName" name="teacher_name" placeholder="Nama Guru" value="{{ $teacher->name }}">
        </div>
        <div class="form-group">
          <label for="teacherEmail">Email</label>
          <input type="email" class="form-control" id="teacherEmail" name="email" placeholder="Email" value="{{ $teacher->email }}">
        </div>
        <div class="form-group">
          <label for="teacherSubject">Mata Pelajaran</label>
          <select class="select2-multiple w-100" multiple="multiple" name="mapel[]" data-placeholder="Pilih Mata Pelajaran">
            <option value="lalala">lalallala</option>
          </select>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="{{ $teacher->username }}">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{ $teacher->password }}">
        </div>
        <div class="form-group">
          <label for="password_confirm">Ulangi Password</label>
          <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Ulangi Password">
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection

@push('additional-plugin-js')
<script src="{{ asset('assets/vendors/select2/select2.min.js')}}"></script>
@endpush

@push('additional-custom-js')
<script src="{{ asset('assets/js/select2.js')}}"></script>
@endpush
