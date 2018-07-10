@extends('template')

@section('content')
    <div class="row">
        <div class="col-md-9 col-md-offset-3"><h1>Страницы</h1></div>
        <div class="col-md-3">
            <ul>
                <li><a href="{{route('admin.page.index') }}">Page</a></li>
                <li><a href="{{route('admin.review.index')}}">Review</a></li>
                <li><a href="{{route('admin.product.index')}}">Product</a></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="col-md-9">
            <table class="table table-hover table-striped">
                <tr>
                    <td>Name</td>
                    <td>Desc</td>
                    <td>Price</td>
                    <td>Manage</td>
                </tr>

                @foreach($pages as $page)
                    <tr>
                        <td>{{ $page->name }}</td>
                        <td>{{ $page->description }}</td>
                        <td>{{ $page->price }}</td>
                        <td>
                            <a href="{{ route('admin.page.edit', $product->id) }}" class="btn btn-edit btn-primary">Редактировать</a>
                            <form action="{{ route('admin.page.destroy', ['id' => $product->id]) }}" method="post">
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
@endsection