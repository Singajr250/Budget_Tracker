@extends('layout')
@section('title','Signup')
@section('content')
@push('styles')
<link rel="stylesheet" href="/app.css">
@endpush
<div class="container">
<div class="mt-5">
@if($errors->any())
<div class="col-12">
@foreach($errors->all() as $error)
<div class="alert alert-danger">{{$error}}</div>
  @endforeach
</div>
@endif 
@if(session()->has('success'))
<div class="alert alert-success">{{session('success')}}</div>
</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger">{{session('error')}}</div>
</div>
@endif
</div>
<form action="{{route('registration.post')}}" method="POST"  class="ms-auto me-auto mt-auto" style="width: 500px">
  @csrf 
<div class="mb-3">
    <label  class="form-label">Fullname</label>
    <input type="text" class="form-control"  name="name">
</div>
<div class="mb-3">
    <label  class="form-label">Email Address</label>
    <input type="email" class="form-control"  name="email">
</div>
<div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control"  name="password">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection