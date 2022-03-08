@extends('layout')
@section('content')
<hr><h1>Product Listing</h1><hr>
    @if ($products->count() == 0)
        <tr>
            <td colspan="5">No products to display.</td>
        </tr>
    @endif
    <div class="row">
        @foreach ($products as $product)
        <div class="card mb-3 box-shadow col-md-3">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <div class="card-body">
            <p class="card-text font-weight-bold">{{ $product->name }}</p> 
            <p class="card-text">{{ $product->description }}</p> 
            <div class="d-flex justify-content-between align-items-center">
                <medium class="text-muted">Only ${{$product->price}}</medium>
                <div class="btn-group">
                    <input type="number" value="1" min="1" max="100">
                    <button class="add-to-cart" type="button" class="btn btn-sm btn-outline-secondary" 
                            data-id="{{$product->id}}" data-name="{{$product->name}}" data-price="{{$product->price}}">Add to Cart</button>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {!! $products->links() !!}
    </div>
@endsection
