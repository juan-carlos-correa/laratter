@extends('layouts.app')

@section('content')
<form method="POST" action="/auth/facebook/register">
  {{ csrf_field() }}
  <div class="card">
    <div class="card-block">
      <img src="{{ $user->avatar }}" class="img-thumbnail">
    </div>
    <div class="card-block">
      <div class="form-group">
        <label for="name" class="form-control-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" readonly>
      </div>

      <div class="form-group">
        <label for="email" class="form-control-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" readonly>
      </div>

      <div class="form-group">
        <label for="username" class="form-control-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}">
      </div>
    </div>

    <div class="card-footer">
      <button class="btn btn-primary" type="submit">Register</button>
    </div>
  </div>
</form>
@endsection