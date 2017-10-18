@extends('layouts.app')

@section('content')
<h1>{{ $user->name }}</h1>
@if(Auth::check())
  @if(Auth::user()->isFollowing($user))
    <form action="/{{ $user->username }}/unfollow" method="POST">
      {{ csrf_field() }}
      @if(session('success'))
        <span class="text-success">{{ session('success') }}</span>
      @endif
      <button class="btn btn-danger">Unfollow</button>
    </form>
  @else
    <form action="/{{ $user->username }}/follow" method="POST">
      {{ csrf_field() }}
      @if(session('success'))
        <span class="text-success">{{ session('success') }}</span>
      @endif
      <button class="btn btn-primary">Follow</button>
    </form>
  @endif
@endif
<div class="row">
  @foreach($user->messages as $message)
  <div class="col-6">
    @include('messages.message')
  </div>
  @endforeach
</div>
@endsection