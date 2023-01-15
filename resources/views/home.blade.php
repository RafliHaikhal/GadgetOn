@section('css', '/css/home.css')
@section('title', 'Home')
@include('layout.header')

<body>
    <div class="home-body-container">
        <div class="home-body-content p-4">
            <div class="row home-text">
                <h1 class="mb-5 ps-5">Our Products</h1>
            </div>
            <div class="row home-card base">
<<<<<<< HEAD
                <div class="card-collection d-flex flex-wrap justify-content-start gap-5 ps-5">
                     @foreach ($products as $product)
                    <div class="card mb-5" style="width: 35rem;">
                      <img src="{{ url('image/') }}" class="home-card-img-top" alt="" style="height: 18rem">
                      <div class="home-card-body p-3">
                        <div class="row">
                            <div class="col home-card-rightside">
                                <p class="home-card-title">{{ $product->name }}</p>
                            </div>
                            <div class="col home-card-leftside">
                                <p class="home-card-year pt-1">{{ $product->year }}</p>
                            </div>
                        </div>
                        <p>Rp{{ $product->price }}</p>
                        <h6 class="home-card-text"></h6>
                        <a href="{{ route('product_detail', $product->id) }}" class="btn home-btn btn-primary">View Product</a>
                      </div>
=======
                <div class="card-collection d-flex justify-content-center flex-wrap gap-3">
                    
                    {{-- @foreach --}}
                    <div class="card" style="width: 38rem;">
                        <img src="" class="home-card-img-top" alt="" style="height: 20rem">
                        <div class="home-card-body p-3">
                          <div class="row">
                              <div class="col home-card-rightside">
                                  <p class="home-card-title">[NAME]</p>
                              </div>
                              <div class="col home-card-leftside">
                                  <p class="home-card-year pt-1">[YEAR]</p>
                              </div>
                          </div>
                          <p>Rp [PRICE]</p>
                          <h6 class="home-card-text"></h6>
                          <a href="/viewproduct" class="btn home-btn btn-primary">View Product</a>
                        </div>
>>>>>>> e25d30b285f3bda6a606c38565753f7a934f9c09
                    </div>
                     @endforeach
                </div>

                <div class="d-flex justify-content-center m-2">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>
