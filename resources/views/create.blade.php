@extends('layouts.main')
@section('contents')

<h1>Add NEW HOME</h1>
<div class="container">

  @if($errors->any())
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
        {{ $error }}
      </div>
    @endforeach
  @endif

  <form class="text-center border border-light p-5" method="post" action="{{ route('store') }}">
    {{ csrf_field() }}
    <p class="h4 mb-4">Add New Student</p>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="text" id="form3Example1" name="firstname" class="form-control" />
          <label class="form-label" for="form3Example1">First name</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" id="form3Example2" name="lastname" class="form-control" />
          <label class="form-label" for="form3Example2">Last name</label>
        </div>
      </div>
    </div>

    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="text" id="form3Example1" name="studentid" class="form-control" />
          <label class="form-label" for="form3Example1">Student ID</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" id="form3Example2" name="phnno" class="form-control" />
          <label class="form-label" for="form3Example2">Phone No</label>
        </div>
      </div>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" id="form3Example3" name="mail" class="form-control" />
      <label class="form-label" for="form3Example3">Email address</label>
    </div>


    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Add Student</button>

    <!-- Register buttons -->
    <div class="text-center">
      <p>or sign up with:</p>
      <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-facebook-f"></i>
      </button>

      <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-google"></i>
      </button>

      <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-twitter"></i>
      </button>

      <button type="button" class="btn btn-primary btn-floating mx-1">
        <i class="fab fa-github"></i>
      </button>
    </div>
  </form>
</div>


@endsection
