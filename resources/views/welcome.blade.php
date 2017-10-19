@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Laratter</h1>
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
        </ul>
    </nav>
</div>
<div class="row">
    <form action="/messages/create" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            {{ csrf_field() }}
            <input type="text" name="message" class="form-control @if($errors->has('message')) is-invalid @endif" placeholder="Que estas pensando">
            @if ($errors->has('message'))
                @foreach ($errors->get('message') as $error)
                    <div class="invalid-feedback">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <input type="file" class="form-control-file" name="image">
        </div>
    </form>
</div>
<div class="row">
    @forelse ($messages as $message)
        <div class="col-6">
            @include('messages.message')
        </div>
    @empty
        <p>No hay mensajes destacados :c</p>
    @endforelse

    @if(count($messages))
        <div class="mg-6 mx-auto">
            {{ $messages->links('pagination::bootstrap-4') }}
        </div>
    @endif
</div>
@endsection