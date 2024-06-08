@extends('layouts.admin')


@section('content')
    <div>


        <div>
            <a href="{{ route('post.create') }}" class="btn btn-primary mb-3">Add One</a>
        </div>
        @foreach($posts as $post)
            <div><a href="{{ route('post.show', $post->id) }}">{{ $post->id }}. {{ $post->title }}</a></div>

        @endforeach

        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
