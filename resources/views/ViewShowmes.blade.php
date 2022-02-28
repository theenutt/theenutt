@extends('layouts.genview')

@section('title-block')
    {{$data->subject}}
@endsection

@section('content')
  <h1>{{ $data->subject }}</h1>
      <div class="alert alert-info">
          <p>{{ $data->message}}</p>
          <p>{{ $data->name}}</p>
          <p><small>{{ $data->created_at }}</small></p>
          <a href="{{ route('contact-edit', $data->id)}}"><button class="btn btn-warning">Edit</button></a>
          <a href="{{ route('contact-delete', $data->id)}}"><button class="btn btn-danger">Delete</button></a>
      </div>
@endsection
