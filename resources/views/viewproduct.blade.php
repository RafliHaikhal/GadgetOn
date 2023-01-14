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
                            <h3 class="viewpro-card-title">[NAME]</h3>
                            <h3 class="viewpro-card-price">Rp.[PRICE]</h3>
                            <h5 class="viewpro-card-price">[YEAR]</h5>
                            <p class="viewpro-card-description">[DESCRIPTION]</p>
                            <div class="row">
                                <div class="col">
                                    <div class="qty-edit-btn">
                                        <a href="#" class="btn viewpro-btn btn-primary">Edit Product</a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="remove-item-btn">
                                        <a href="#" class="btn viewpro-btn btn-danger">Delete Product</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>