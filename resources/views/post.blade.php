@extends('master')

@section('content')
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <!-- Title -->
            <h1 class="mt-4">
                {{ $post->title }}
            </h1>

            <!-- Author -->
            <p class="lead">
                by
                <a href="#">
                    {{ $post->user->name }}
                </a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>Posted on {{ $post->created_at->format('M d Y') }}</p>

            <hr>

            <!-- Preview Image -->
            <img src="/storage/{{ $post->featured_image }}" alt="" class="img-fluid">

            <!-- Post Content -->
            { !! $post->content !! }
            <hr>
        </div>

        @include('widgets.sidebar')
    </div>

    <h3>Related Posts</h3>

    <div class="row">
        @foreach ($related_posts as $post)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="/storage/{{ $post->featured_image }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 100, '...') }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/post/{{ $post->slug }}" class="btn btn-sm btn-outline-secondary">Read More →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
