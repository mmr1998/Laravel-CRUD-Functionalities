@extends('layouts.main')
@section('contents')
<div class="container">
  <h1>WELCOME HOME</h1>

  @if (session('sucessmsg'))

    <div class="alert alert-success" role="alert">
      {{ session('sucessmsg') }}
    </div>

  @endif

  <table class="table table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">Student ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Phone No</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $std)
      <tr>
        <td>{{ $std->Student_id }}</td>
        <td>{{ $std->first_name }}</td>
        <td>{{ $std->last_name }}</td>
        <td>{{ $std->email }}</td>
        <td>{{ $std->phone }}</td>
        <td>
          <a href="{{ route('edit',$std->id) }}" class="btn btn-raised btn-primary btn-sm"><i class="fas fa-edit"></i></a> ||

            <form id="delete-form-{{ $std->id }}" action="{{ route('delete',$std->id) }}" method="post" style="display:none;">
              {{ csrf_field() }}
              {{ method_field('delete') }}
            </form>
            <button onclick="if (confirm('Are you Sure to Delete The Record?')){
                event.preventDefault();
                document.getElementById('delete-form-{{ $std->id }}').submit();
            }else{
              event.preventDefault();
            }"  class="btn btn-raised btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>

            </button>


        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {!! $students->links() !!}
</div>

@endsection
