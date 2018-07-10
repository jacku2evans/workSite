@extends('template')

@section('content')
    <div class="row">
        <div class="col-md-12"><h1>Продукты</h1></div>
        <div class="col-md-3">
            <ul>
                @foreach($products as $product)
                    <ul><a href="{{ route('admin.product.edit', $product) }}">{{ $product->name }}</a></ul>
                @endforeach
            </ul>
        </div>
            <a href="{{ route('admin.product.index') }}" class="btn btn-success">Назад</a>
        <div class="col-md-9">
            <form action="{{ route('admin.product.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input name="name" type="text" placeholder="name" class="form-control">
                </div>
                <div class="form-group">
                    <input name="description" type="text" placeholder="description" class="form-control">
                </div>
                <div class="form-group">
                    <input name="price" type="text" placeholder="price" class="form-control">
                </div>
                <div class="form-group">
                    <input name="image" type="text"placeholder="image" class="form-control">
                </div>
                <div class="form-group">
                    <input name="fields" type="text" placeholder="fields" class="form-control">
                </div>
                <div class="form-group">
                    <input name="title" type="text"placeholder="title" class="form-control">
                </div>
                <div class="form-group">
                    <input name="meta_description" type="text" placeholder="meta_description" class="form-control">
                </div>
                <div class="form-group">
                    <input name="alias" type="text"placeholder="alias" class="form-control">
                </div>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>
@endsection