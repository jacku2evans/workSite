@extends('template')

@section('content')
    <div class="row">
        <div class="col-md-9 col-md-offset-3"><h1>Продукты</h1></div>
        <div class="col-md-3">
            <ul>
                <li><a href="{{ route('page.index') }}">Page</a></li>
                <li><a href="{{route('review.index')}}">Review</a></li>
                <li><a href="{{route('product.index')}}">Product</a></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="col-md-9">
            <form action="{{ route('review.update', $review->id) }}" method="POST">
                {{ csrf_field() }}
                <input name="name" type="text" placeholder="name" value="{{ $review->name }}">
                <input name="review" type="text" placeholder="description">
                <button type="submit">Редактировать</button>
            </form>
        </div>
    </div>
@endsection