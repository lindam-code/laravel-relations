@extends('layouts.layout')
@section('content')
  <h2>Title: {{ $album->title }}</h2>
  <p>Artist: {{ $album->artist }}</p>
  <p>Year: {{ $album->year }}</p>
  <a href="{{ route('albums.index')}}">Back to album's list</a>
  <h3>Song's list</h3>
  <img src="{{ $album->images->url }}" alt=" {{ $album->title }} ">
  <ol>
    @foreach ($album->songs as $song)
      <li>
        {{ $song->title }}
        Genre: {{ $song->genre }}
      </li>
    @endforeach
  </ol>
@endsection
