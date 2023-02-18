@extends('admin.users.dashboard')
@section('content')

<html>
<head>
    <title>users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12">
            <div class="pull-left">
                <h2>Client-User List</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="user-form"> Create New User</a>
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
      <th>Id</th>
      <th>Email</th>
      <th>Created_at</th>
      <th>Updated_at</th>
      <th width="280px">Action</th>
   </tr>
   @foreach ($users as $user)
   <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->created_at }}</td>
      <td>{{ $user->updated_at }}</td>
      <td>
            <a class="btn btn-primary" href="{{ route('user-update',$user->id) }}">Edit</a>
            <a class="btn btn-primary" href="{{ route('user-delete',$user->id) }}">Delete</a>
            <a class="btn btn-primary" href="{{ route('user-details',$user->id) }}">View</a>
      </td>
   </tr>
   @endforeach
</table>


</body>
</html>
@endsection