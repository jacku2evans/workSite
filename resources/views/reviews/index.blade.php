@extends('template')

@section('content')
    <div class="row">
        <div class="col-md-9 col-md-offset-3"><h1>Отзывы</h1></div>
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
            <table>
                <tr>
                    <td>Name</td>
                    <td>Desc</td>
                    <td>Price</td>
                    <td>Manage</td>
                </tr>

                @foreach($reviews as $review)
                    <tr>
                        <td>{{ $review->name }}</td>
                        <td>{{ $review->description }}</td>
                        <td>{{ $review->price }}</td>
                        <td>
                            <a href="{{ route('admin.review.edit', $review->id) }}" class="btn btn-edit btn-primary">Редактировать</a>
                            <form action="{{ route('admin.review.destroy', ['id' => $review->id]) }}" method="post">
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