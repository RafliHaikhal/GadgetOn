@section('title', 'home')
@include('layout.header')

<body>
    <div class="home-body-container">
        <div class="home-body-content p-4">
            <div class="row home-text">
                <h1>Our Products</h1>
            </div>
            <div class="row home-card base">
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
                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</body>
</html>