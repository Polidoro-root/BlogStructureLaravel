@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1 class="my-4">
                You are searching for:
                <small>{{ $key }}</small>
            </h1>

            @include('widgets.blog-mansory')
        </div>

        @include('widgets.sidebar')
    </div>
@endsection
