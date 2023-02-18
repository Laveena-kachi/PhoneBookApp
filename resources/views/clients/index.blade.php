@extends('clients.dashboard')
@section('content')

<html>
<head>
    <title>Book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12">
            <div class="pull-left">
                <h2>Contact List</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="form"> Create New Contact</a>
            </div>
        </div>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<table class="table table-bordered">
   <tr>
      <th>Name</th>
      <th>Phone Number</th>
      <th width="280px">Action</th>
   </tr>
   @foreach ($contacts as $contact)
   <tr>
      <td>{{ $contact->name }}</td>
      <td>{{ $contact->phoneNumber }}</td>
      <td>
            <a class="btn btn-primary" href="{{ route('update',$contact->id) }}">Edit</a>
            <a class="btn btn-primary" href="{{ route('delete',$contact->id) }}">Delete</a>
            <a class="btn btn-primary" href="{{ route('details',$contact->id) }}">View</a>
      </td>
   </tr>
   @endforeach
</table>


</body>
</html>
@endsection