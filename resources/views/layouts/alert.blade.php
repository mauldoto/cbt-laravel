@if (Session::has('errors'))
<div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
  <strong>Error!</strong>
  @foreach($errors->all() as $errorAny)
  <br>- {!! $errorAny !!}
  @endforeach
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
  <strong>Error!</strong>
  @if(is_array(Session::get('error')))
    @foreach(Session::get('error') as $error)
    <br>- {!! $error !!}
    @endforeach
  @else
  <br> {!! Session::get('error') !!}
  @endif
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (Session::has('warning'))
<div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
  <strong>Warning!</strong>
  @if(is_array(Session::get('warning')))
    @foreach(Session::get('warning') as $warning)
    <br>- {!! $warning !!}
    @endforeach
  @else
  <br> {!! Session::get('warning') !!}
  @endif
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (Session::has('success'))
<div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
  <strong>Success!</strong>
  @if(is_array(Session::get('success')))
    @foreach(Session::get('success') as $success)
    <br>- {!! $success !!}
    @endforeach
  @else
  <br> {!! Session::get('success') !!}
  @endif
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif