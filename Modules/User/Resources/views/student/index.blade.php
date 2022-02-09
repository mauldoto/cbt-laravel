@extends('main')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Striped Table</h4>
        <p class="card-description">
          Add class <code>.table-striped</code>
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#No</th>
                <th>Nama Siswa</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $number = 0;
              @endphp
              @foreach ($students as $student)
                  <tr>
                    <td>{{ ++$number }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->username }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                      <div class="dropdown">
                          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti-menu-alt"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                          {{-- <h6 class="dropdown-header">Action</h6> --}}
                          <a class="dropdown-item" href="{{ url('siswa/edit/'.$student->id) }}">Edit</a>
                          <div class="dropdown-divider"></div>
                          <form action="{{ url('siswa/delete', $student->id) }}" method="POST">
                            @csrf
                            <button class="dropdown-item text-danger">Delete</button>
                          </form>
                          </div>
                      </div>
                  </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection