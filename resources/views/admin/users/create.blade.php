@extends('admin.users.dashboard')
@section('content')
<div class="container mt-2">
<div class="row">
   <div class="col-lg-12 margin-tb">
      <div class="pull-left mb-2">
         <h2>Add User</h2>
      </div>
   </div>
</div>
<form action="user-form" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Email:</strong>
            <input type="email" name="email" class="form-control" placeholder="email">
            @error('email')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
         </div>
      </div>
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Password:</strong>
            <input type="password" name="password" class="form-control" placeholder="password">
            @error('password')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
         </div>
      </div>    
      <button type="submit" class="btn btn-primary ml-3">Submit</button>
   </div>
</form>
@endsection