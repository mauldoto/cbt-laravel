@extends('main')

@push('additional-plugin-css')
<link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
@endpush

@section('content')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Data Paket Soal</h4>
      <p class="card-description">
        Form untuk menambah data paket soal
      </p>
      <form action="{{ url('bank-soal/store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="paketSoal">Nama Paket Soal</label>
          <input type="text" class="form-control" id="paketSoal" name="paket_soal" placeholder="Nama Paket Soal">
        </div>
        <div class="form-group">
          <label for="semester">Semester</label>
          <select class="form-control" name="semester" id="semester">
            <option value="ganjil">Ganjil</option>
            <option value="genap">Genap</option>
          </select>
        </div>
        <div class="form-group">
          <label for="schoolYear">Tahun Ajaran</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="tahun_ajaran" placeholder="">
            <span class="input-group-text">/</span>
            <input type="text" class="form-control" placeholder="" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="teacherSubject">Untuk Kelas</label>
          <select class="select2-multiple w-100" multiple="multiple" name="kelas[]" data-placeholder="Pilih Kelas">
            <option value="lalala">lalallala</option>
          </select>
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