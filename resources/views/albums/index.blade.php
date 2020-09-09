<h1>Album's list</h1>
<ul>
  @foreach ($albums as $album)
    <li>
      Title: {{ $album->title }}
      <a href="{{ route('albums.show', $album)}}">Show</a>
    </li>
  @endforeach
</ul>
