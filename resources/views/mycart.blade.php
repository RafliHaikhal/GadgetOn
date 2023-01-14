@section('css', '/css/mycart.css')
@section('title', 'My Cart')
@include('layout.header')

<body>
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
                {{-- @foreach --}}
                <div class="card" style="width: 85rem;">
                  <div class="mycart-card-body p-4">
                    <div class="row">
                        <div class="col mycart-card-rightside">
                            <img src="" class="mycart-card-img-top" alt="" style="height: 10rem">
                        </div>
                        <div class="col mycart-card-midside">
                            <p class="mycart-card-name">[NAME]</p>
                            <p class="mycart-card-year pt-1">[YEAR]</p>
                            <p class="mycart-card-price">Rp [PRICE]</p>
                            <p class="mycart-card-quantity">[QUANTITY] pc(s)</p>
                            <p class="mycart-card-description">[DESCRIPTION]</p>
                        </div>
                        <div class="col mycart-card-leftside">
                            <div class="col">
                                <div class="row">
                                    <div class="qty-edit-btn">
                                        <a href="/editproductqty" class="btn mycart-btn btn-primary">Edit Product Qty</a>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="remove-item-btn">
                                        <a href="#" class="btn mycart-btn btn-danger">Remove Product</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                {{-- @endforeach --}}
            </div>
            <div class="mycart-secondsection p-5">
                <div class="row mycart-secondsection-row">
                    <div class="col mycart-total-price">
                        <h3>Total Price: Rp.[TOTAL PRICE]</h3>
                    </div>
                    <div class="col mycart-checkout-btn">
                        <a href="#" class="btn mycart-btn btn-primary">Checkout[QTY]</a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</body>
</html>