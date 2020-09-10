@extends('layouts.layout')
@section('content')
  <div class="main_wrapper">
    <h1>Album's list</h1>

      <div class="music_container">
        @foreach ($albums as $album)
          <div class="album_item">
            <img src="{{ $album->images->url }}" alt=" {{ $album->title }} ">
            <h2>Title: {{ $album->title }}</h2>
            <p>Artist: {{ $album->artist }}</p>
            <p>Year: {{ $album->year }}</p>
            <a href="{{ route('albums.show', $album)}}">Show</a>
          </div>
        @endforeach
      </div>


  </div>
@endsection
