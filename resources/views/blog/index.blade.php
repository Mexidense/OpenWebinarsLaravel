@extends('blog.layout')

@section('content')
    @if (count($posts)>0)
        <h4>Listado de posts:</h4>
        <ul>
            @foreach($posts as $post)
                <li><a href="post/{{ $post->id }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    @else
        <h3>No hay posts</h3>
    @endif
@endsection

@section('footer')
    <h5>This is footer.</h5>
@endsection