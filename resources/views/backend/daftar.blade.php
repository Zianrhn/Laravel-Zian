@extends('backend.main')


@section('isi')


<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($daftar as $dft)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$dft->Name}}</td>
      <td>{{$dft->Phone}}</td>
      <td>{{$dft->Email}}</td>
      <td>{{$dft->Date}}</td>
      
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <form class="" action="/daftar/{{ $dft->id }}" method="post">
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