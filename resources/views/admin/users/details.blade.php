@extends('admin.users.dashboard')

@section('content')
<div class="container">
<div class="row">
   <div class="col-md-6">
      <h2>View Users Details</h2>
      <br><br>
   <p><strong>Email: </strong>{{ $user->email }}</p>
   <p><strong>Created_at: </strong>{{ $user->created_at }}</h4>
   <p><strong>Update_at: </strong>{{ $user->updated_at }}</h4>
      </div>
   </div>
</div>
@endsection