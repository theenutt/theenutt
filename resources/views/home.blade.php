@extends('layouts.genview')


@section('title', 'Личный кабинет')

@section('content')
    <p class="text-right"><a href="{{ route('contacts') }}">Добавить сообщение</a></p>
     @if (count($contacts) > 0)
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Тема</th>
              <th>Сообщение</th>
              <th>Создано</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contacts as $contact)
              <tr>
                <td><h3>{{ $contact->subject }}</h3></td>
                <td>{{ $contact -> message }}</td>
                <td>{{ $contact -> created_at }}</td>
                <td>
                  <a href="{{ route('contact-edit', $contact->id)}}">Изменить</a>
                </td>
                <td>
                  <a href="">Удалить</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        @endif
@endsection
