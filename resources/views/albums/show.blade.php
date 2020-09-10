@extends('layouts.layout')
@section('content')
  <div class="main_wrapper">
    <h1>Title: {{ $album->title }}</h1>
    <p>Artist: {{ $album->artist }}</p>
    <p>Year: {{ $album->year }}</p>
    <div class="music_container">
      <div class="cover_column">
        <h2>Cover</h2>
        <img class="cover_image" src="{{ $album->images->url }}" alt=" {{ $album->title }} ">
      </div>
      <div class="songs_list_column">
        <h2>Song's list</h2>

        <ol>
          @foreach ($album->songs as $song)
            <li>
              {{ $song->title }}
              Genre: {{ $song->genre }}
            </li>
          @endforeach
        </ol>
      </div>
    </div>

    <a href="{{ route('albums.index')}}">Back to album's list</a>

  </div>
@endsection
