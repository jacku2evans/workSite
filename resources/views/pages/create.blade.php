@extends('template')

@section('content')
    <form action="{{ route('page.store') }}" method="POST">
        {{ csrf_field() }}
        <input name="name" type="text" placeholder="name">
        <input name="description" type="text" placeholder="description">
        <input name="price" type="text" placeholder="price">
        <input name="image" type="text"placeholder="image">
        <input name="fields" type="text" placeholder="fields">
        <input name="title" type="text"placeholder="title">
        <input name="meta_description" type="text" placeholder="meta_description">
        <input name="alias" type="text"placeholder="alias">
        <button type="submit">Отправить</button>
    </form>
@endsection
