@extends('main')

@push('additional-plugin-css')
<link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
@endpush

@section('content')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Data Siswa</h4>
      <p class="card-description">
        Form untuk menambah data siswa
      </p>
      <form action="{{ url('siswa/store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="studentName">Nama Siswa</label>
          <input type="text" class="form-control" id="studentName" name="teacher_name" placeholder="Nama Siswa" value="{{ $student->name }}">
        </div>
        <div class="form-group">
          <label for="studentEmail">Email</label>
          <input type="email" class="form-control" id="studentEmail" name="email" placeholder="Email" value="{{ $student->email }}">
        </div>
        <div class="form-group">
          <label for="teacherSubject">Kelas</label>
          <select class="select2-multiple w-100" multiple="multiple" name="kelas[]" data-placeholder="Pilih Kelas">
            <option value="lalala">lalallala</option>
          </select>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="{{ $student->username }}">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
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
