@extends('layout.template')
@section('css', '/css/mycart.css')
@section('title', 'My Cart')

@section('content')
    <div class="mycart-body-container">
        <div class="mycart-body-content p-4">
            <h1 class="ps-5">My Cart</h1>
        </div>
        <div class="row mycart-card base">
            @if(!isset($cartProducts))
                <tr>
                    <h3 colspan="6" class="text-center"> You don't have any product yet inside your cart! </h3>
                </tr>
            @else
                    <div class="card-collection d-flex justify-content-center flex-wrap gap-3">
                        @foreach($cartProducts as $cartProduct)
                            <form action="{{ route('remove_cart', $cartProduct->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <div class="card" style="width: 85rem;">
                                    <div class="mycart-card-body p-4">
                                        <div class="row">
                                            <div class="col mycart-card-rightside">
                                                <img src="{{Storage::url('/assets/'.$cartProduct->product->image)}}" class="mycart-card-img-top" alt="" style="height: 10rem;">
                                            </div>
                                            <div class="col mycart-card-midside">
                                                <p class="mycart-card-name">{{ $cartProduct->product->name }}</p>
                                                <p class="mycart-card-year pt-1">{{ $cartProduct->product->year }}</p>
                                                <p class="mycart-card-price">
                                                    Rp{{ $cartProduct->product->price}}</p>
                                                <p class="mycart-card-quantity">{{ $cartProduct->quantity }} Pcs</p>
                                                <p class="mycart-card-description">{{ $cartProduct->product->description }}</p>
                                            </div>
                                            <div class="col mycart-card-leftside">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="qty-edit-btn">
                                                            <a href="{{ route('edit_cart', $cartProduct->id) }}" class="btn mycart-btn btn-primary">Edit Product
                                                                Quantity</a>
                                                        </div>
                                                    </div>
                                                    <div class="row pt-3">
                                                        <button class="btn btn-danger" style="width: 10rem; margin-left: 9rem;">Remove Item(s)</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </div>
                @php
                    $total = 0;
                    foreach ($cartProducts as $cartProduct){
                        $total += $cartProduct->product->price*$cartProduct->quantity;
                    }
                @endphp
            </div>
            <div class="mycart-secondsection-row p-5">
                <div class="row mycart-secondsection-row">
                    <div class="col mycart-total-price">
                        <h3 class="ps-5">Total Price : {{ $total }}</h3>
                    </div>
                    <form action="{{ route('checkout') }}" method="post">
                        @csrf
                        <div class="col mycart-checkout-btn">
                           <button class="btn btn-primary">Checkout ({{ $cartProduct->quantity }})</button>
                        </div>
                    </form>
                </div>
            </div>
        @endif
    </div>
    @if($errors->any())
        <div class="alert alert-danger mt-2" style="width: 75vw;">
            <ul>
                @foreach($errors->all() as $error_data)
                    <li>{{ $error_data }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <script>
        if({{ Session::has('alert') }}){
            alert('{{ Session::get('alert') }}');
        }
    </script>
@endsection
