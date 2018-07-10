@extends('template')

@section('content')
    <div class="row">
        <div class="col-md-9 col-md-offset-3"><h1>Отзывы</h1></div>
        <div class="col-md-3">
            <ul class="list-unstyled">
                <li><a href="{{route('admin.page.index') }}">Page</a></li>
                <li><a href="{{route('admin.review.index')}}">Review</a></li>
                <li><a href="{{route('admin.product.index')}}">Product</a></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="col-md-9">
            <a href="{{ route('admin.product.create') }}" class="btn btn-success">Создать</a>
            <div class="panel">
                <div class="panel-body">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <td>Name</td>
                            <td>Desc</td>
                            <td>Price</td>
                            <td>Manage</td>
                        </tr>

                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-edit btn-primary">Редактировать</a>
                                    <form action="{{ route('admin.product.destroy', ['id' => $product->id]) }}" method="post">
                                        <input type="hidden" name="_method" value="delete" />
                                        {!! csrf_field() !!}
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection