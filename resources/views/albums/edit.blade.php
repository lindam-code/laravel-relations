@extends('layouts.layout')
@section('content')
  <div class="main_wrapper">
    <h2>Edit album</h2>
    <div class="form_wrapper">
      {{-- Form per modificare i dati degli album--}}
      <form action="{{ route('albums.update',$album->id) }}" method="post">
        @csrf
        @method('PUT')
        <div >
          <label>Title</label>
          <input type="text" name="title" value="{{ $album->title }}">
        </div>

        <div >
          <label>Artist</label>
          <input type="text" name="artist" value="{{ $album->artist }}">
        </div>

        <div >
          <label>Year</label>
          <input type="number" name="year" value="{{ $album->year }}">
        </div>

        <div>
          @foreach ($categories as $category)
            <div>
              <input type="checkbox" name="categories[]" {{ ($album->categories->contains($category)) ? 'checked' : '' }} value="{{ $category->id}}">
              <span>{{ $category->name }}</span>
            </div>
          @endforeach
        </div>

        <div>
          <input class="bottone_salva" type="submit" value="Save">
        </div>
      </form>
    </div>
  </div>
@endsection
