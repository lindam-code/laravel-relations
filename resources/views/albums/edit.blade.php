<h2>Edit album</h2>

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
    <input type="submit" value="Save">
  </div>
</form>
