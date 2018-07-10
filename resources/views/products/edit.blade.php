<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{ route('admin.product.index') }}" class="btn btn-success">Назад</a>
<form action="{{ route('admin.product.update', $product->id) }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <input name="name" type="text" placeholder="name" value="{{ $product->name }}">
    <input name="description" type="text" placeholder="description" value="{{ $product->description }}">
    <input name="price" type="text" placeholder="price"value="{{ $product->price }}">
    <input name="image" type="text"placeholder="image"value="{{ $product->image }}">
    <input name="fields" type="text" placeholder="fields"value=" {{ $product->fields }}">
    <input name="title" type="text"placeholder="title"value=" {{ $product->title }}">
    <input name="meta_description" type="text" placeholder="meta_description"value="{{ $product->meta_description }}">
    <input name="alias" type="text"placeholder="alias"value=" {{ $product->alias }}">
    <button type="submit">Отправить</button>
</form>
</body>
</html>