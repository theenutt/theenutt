@extends('layouts.genview')

@section('title-block')
  Контакты
@endsection



@section('content')
  <h1>Contacts</h1>
  <form action="{{ route('contact-form') }}" method="post">
    @csrf
    <div class="form-group mb-3">
      <label for="name">Имя</label>
      <input type="text" name="name" class="form-control" placeholder="Введите имя" id="name">
    </div>

    <div class="form-group mb-3">
      <label for="name">Email</label>
      <input type="text" name="email" class="form-control" placeholder="Введите Email" id="email">
    </div>

    <div class="form-group mb-3">
      <label for="name">Тема сообщения</label>
      <input type="text" name="subject" class="form-control" placeholder="Тема сообщения" id="subject">
    </div>

    <div class="form-group mb-3">
      <label for="name">Сообщение</label>
      <textarea type="text" name="message" class="form-control" placeholder="Введите сообщение" id="message"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Отправить</button>
  </form>
@endsection
