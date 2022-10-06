@extends('backend.main')


@section('isi')

<a href="/tambahposter" class="btn btn-success my-2">Add Poster</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($poster as $pst)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$pst->Title}}</td>
      
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <form class="" action="/posterend/{{ $pst->id }}" method="post">
                     @method('delete')
                     @csrf
                     <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
   
                   </form>
        </div>
      </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection