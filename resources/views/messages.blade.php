@extends('layouts.genview')

@section('title-block')
    Сообщения
@endsection

@section('content')
  <h1>Messages</h1>
  @foreach($data as $mes)
      <div class="alert alert-info">
          <h3>{{ $mes->subject }}</h3>
          <p>{{ $mes->name}}</p>
          <p>{{ $mes->user->name}}</p>
          <p><small>{{ $mes->created_at }}</small></p>
          <a href="{{ route('contact-showmes', $mes->id)}}"><button class="btn btn-warning">Continue</button></a>
      </div>
  @endforeach
@endsection
