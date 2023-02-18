@extends('clients.dashboard')
@section('content')
<div class="container mt-2">
<div class="row">
   <div class="col-lg-12 margin-tb">
      <div class="pull-left mb-2">
         <h2>Add Contact</h2>
      </div>
   </div>
</div>
<form action="form" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="name">
            @error('name')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
         </div>
      </div>
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Phone Number:</strong>
            <input type="text" name="phoneNumber" class="form-control" placeholder="phone number">
            @error('phoneNumber')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
         </div>
      </div>
      
      <button type="submit" class="btn btn-primary ml-3">Submit</button>
   </div>
</form>
@endsection