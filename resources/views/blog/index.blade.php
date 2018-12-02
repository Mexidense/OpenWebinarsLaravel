<h1>Hello OpenWebinars</h1>
@if (count($posts)>0)
    <h4>Listado de posts:</h4>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
@else
    <h3>No hay posts</h3>
@endif