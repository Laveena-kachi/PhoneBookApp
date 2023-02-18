@extends('admin.users.dashboard')
@section('content')

<div class="container mt-2">
   <div class="row">
      <div class="col-lg-12 margin-tb">
         <div class="pull-left">
            <h2>Edit Contact</h2>
         </div>
      </div>
   </div>
   @if(session('status'))
   <div class="alert alert-success mb-1 mt-1">
      {{ session('status') }}
   </div>
   @endif
   <form action="{{ route('admin-update',$contact->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Name:</strong>
               <input type="text" name="name" value="{{ $contact->name }}" class="form-control">
               @error('name')
               <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
         </div>
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Phone Number:</strong>
               <input type="text" name="phoneNumber" value="{{ $contact->phoneNumber }}" class="form-control">
               @error('phoneNumber')
               <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
</div>
         <button type="submit" class="btn btn-primary ml-3">Submit</button>
      </div>
   </form>
</div>
@endsection