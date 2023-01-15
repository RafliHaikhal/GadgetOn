@section('css', '/css/viewproduct.css')
@section('title', 'Details')
@include('layout.header')

<body>
    <div class="viewpro-body-container p-5">
        <div class="row viewpro-card base">
            <div class="card-collection d-flex justify-content-center flex-wrap gap-3">
                <div class="card" style="width: 85rem;">
                  <div class="viewpro-card-body p-4">
                    <div class="row">
                        <div class="col viewpro-card-rightside">
                            <img src="" class="viewpro-card-img-top" alt="" style="height: 10rem">
                        </div>
                        <div class="col viewpro-card-rightside">
                            <h3 class="viewpro-card-name">{{ $product->name }}</h3>
                            <h3 class="viewpro-card-price">Rp{{ $product->price }}</h3>
                            <h5 class="viewpro-card-year">{{ $product->year }}</h5>
                            <p class="viewpro-card-description">{{ $product->description }}</p>

                            @if(Auth::check() && Auth::user()->role == 'Admin')
                            <div class="bottom-section">
                                <div class="row">
                                    <div class="col">
                                        <div class="qty-edit-btn">
                                            <a href="/editproduct" class="btn viewpro-btn btn-primary">Edit Product</a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="remove-item-btn">
                                            <a href="#" class="btn viewpro-btn btn-danger">Delete Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if(Auth::check() && Auth::user()->role == 'Member')
                            <div class="bottom-section">
                                <div class="col">
                                    <div class="row pb-3">
                                        <div class="qty-input">
                                            <label for="quantity">Quantity :</label>
                                            <input type="quantity" name="quantity" id="quantity">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn viewpro-btn btn-primary">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if(!Auth::check())
                            <div class="bottom-section">
                                <div class="pb-3">
                                    <div class="login-to-purchase-btn">
                                        <a href="/auth/login" class="btn viewpro-btn btn-success">Login To Purchase</a>
                                    </div>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
