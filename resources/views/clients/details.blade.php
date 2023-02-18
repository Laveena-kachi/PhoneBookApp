@extends('clients.dashboard')

@section('content')
<div class="container">
<div class="row">
   <div class="col-md-6">
      <h2>View Contact Details</h2>
      <br><br>
   <p><strong>Name: </strong>{{ $contact->name }}</p>
   <p><strong>Phone Number: </strong>{{ $contact->phoneNumber }}</h4>
      </div>
   </div>
</div>
@endsection