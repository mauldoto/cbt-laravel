@extends('main')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('questionpack.name') !!}
    </p>
@endsection
