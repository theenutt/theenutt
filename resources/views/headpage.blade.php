@extends('layouts.genview')

@section('title-block')
    Главная
@endsection

@section('content')
  <h1>Home</h1>
  <p>Выпечкой принято называть изделия из любого вида теста, приготовленные в печи или духовке. Однако тесто, жареное на сковороде или в глубоком масле, тоже часто называют выпечкой.
Всю выпечку можно разделить на сладкую и несладкую, и внутри каждой группы множество видов выпечки: пироги и пирожки, кексы, печенье, торты и пирожные, булочки и ватрушки из разных видов теста. Домашний хлеб и все хлебобулочные изделия – тоже выпечка.</p>
@endsection

@section('aside')
 @parent
 <p>Дополнительный текст</p>
@endsection
