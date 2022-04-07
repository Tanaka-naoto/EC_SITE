    @extends('layouts.app')

    @section('title')
    商品一覧
    @endsection

    @section('content')
    @if(session('message'))

    <div class="alert alert-success">{{session('message')}}</div>

    @endif



    <div class="jumbotron top-img">
        <p class="text-center text-white top-img-text">{{ config('app.name', 'Laravel')}}</p>
    </div>

    <div class="container">
        <div class="top__title text-center">
            All Products
        </div>
        <div class="row">
            @foreach ($products as $product)
            <a href="{{ route('product.show', $product) }}" class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="{{ asset($product->image) }}" class="card-img"/>
                    <div class="card-body">
                        <p class="card-title">{{ $product->name }}</p>
                        <p class="card-text">¥{{ number_format($product->price) }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <!-- 商品一覧削除-->
        <form method="post" action="{{ route('product.destroy') }}">
            @csrf
            @method('delete')
            <button class="btn btn-danger" onclick="return confirm('本当に削除しますか？')" style="margin-left: 10px">削除</button>
        </form>
    </div>
@endsection
