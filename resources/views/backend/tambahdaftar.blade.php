@extends('backend.main')


@section('isi')

<h1 class="mt-3">Registration</h1>

    <form method="post" action='/prosestambahactivities' enctype="multipart/form-data">
            @csrf
            <div class="mb-1 col-5">
            <label for="nama" class="form-label">Name</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="Name" placeholder="Name" name="Name" require>
          </div>
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Phone</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="Phone" placeholder="Phone" name="Phone" require>
          </div>
          <div class="mb-1 col-5">
            <label for="Name" class="form-label">Email</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="Email" placeholder="Email" name="Email" require>
          </div>
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Date</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="Date" placeholder="Date" name="Date" require>
          </div>
         
          <button type="submit" class="btn btn-primary">Add</button>
    </form>

@endsection