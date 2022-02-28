@extends('layouts.genview')

@section('title-block')
  Редактировать сообщение
@endsection



@section('content')
  <h1>Edit message</h1>
  <form action="{{ route('contact-editsub', $data->id) }}" method="post">
    @csrf
    <div class="form-group mb-3">
      <label for="name">Имя</label>
      <input type="text" name="name" value="{{ $data->name }}" class="form-control" placeholder="Введите имя" id="name">
    </div>

    <div class="form-group mb-3">
      <label for="name">Email</label>
      <input type="text" name="email" value="{{ $data->email }}" class="form-control" placeholder="Введите Email" id="email">
    </div>

    <div class="form-group mb-3">
      <label for="name">Тема сообщения</label>
      <input type="text" name="subject" value="{{ $data->subject }}" class="form-control" placeholder="Тема сообщения" id="subject">
    </div>

    <div class="form-group mb-3">
      <label for="name">Сообщение</label>
      <textarea type="text" name="message" class="form-control" placeholder="Введите сообщение" id="message">{{ $data->message }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Сохранить</button>
  </form>
@endsection
