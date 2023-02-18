@extends('admin.users.dashboard')
@section('content')
<html>
    <head>
        <style>
      .card {
  padding: 16px;
  text-align: center;
}      

            </style>
<div class="container">
      <div class="row">
      <div class="col-md-4">
      <div class="card card-body bg-primary text-white mb-3">
        <label>Number of Contacts Daily</label>
        <h1>{{ $daily}}</h1>
        <a href="admin-contacts">view details</a>
</div>
</div>
</div>
</div>
<div class="container">
      <div class="row">
      <div class="col-md-4">
      <div class="card card-body bg-primary text-white mb-3">
        <label>Number of Contacts Weekly</label>
        <h1>{{ $weekly }}</h1>
        <a href="admin-contacts">view details</a>
</div>
</div>
</div>
</div>
<div class="container">
      <div class="row">
      <div class="col-md-4">
      <div class="card card-body bg-primary text-white mb-3">
        <label>Number of Monthly</label>
        <h1>{{ $monthly }}</h1>
        <a href="admin-contacts">view details</a>
</div>
</div>
</div>
</div>
@endsection