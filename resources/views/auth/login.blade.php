@extends('main')

@section('content')
<div class="container-fluid page-body-wrapper full-page-wrapper">
  <div class="content-wrapper d-flex align-items-center auth px-0">
    <div class="row w-100 mx-0">
      <div class="col-lg-4 mx-auto">
        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
          {{-- <div class="brand-logo">
            <img src="../../images/logo.svg" alt="logo">
          </div> --}}
          <h4>Hello! let's get started</h4>
          <h6 class="fw-light">Sign in to continue.</h6>

          {{-- error information --}}
          @if (Session::has('errors'))
          <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
            <strong>Error!</strong>
              @foreach($errors->all() as $error)
              <br>- {!! $error !!}
              @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          {{-- end error information --}}


          <form class="pt-3" method="POST" action="{{ url('login') }}">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
            </div>
            <div class="mt-3">
              <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn col-md-12">SIGN IN</button>
            </div>
            <div class="my-2 d-flex justify-content-between align-items-center">
              <div class="form-check">
                <label class="form-check-label text-muted">
                  <input type="checkbox" class="form-check-input">
                  Keep me signed in
                </label>
              </div>
              <a href="#" class="auth-link text-black">Forgot password?</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
</div>
@endsection