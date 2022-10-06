@extends('backend.main')


@section('isi')

<h1 class="mt-3">Add Poster</h1>

    <form method="post" action='/prosestambahposter' enctype="multipart/form-data">
            @csrf
            <div class="mb-1 col-5">
            <label for="nama" class="form-label">Title</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="Title" placeholder="Title" name="Title" require>
          </div>
          
          <div class="mb-3 col-5">
          <div class="form-group">
              <label for="image">Choose Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
    </form>

@endsection