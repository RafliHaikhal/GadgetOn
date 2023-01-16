@section('css', '/css/viewproduct.css')
@section('title', 'Details')
@include('layout.template.blade.php')

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
                            <h3 class="viewpro-card-name">[NAME]</h3>
                            <h3 class="viewpro-card-price">Rp.[PRICE]</h3>
                            <h5 class="viewpro-card-year">[YEAR]</h5>
                            <p class="viewpro-card-description">[DESCRIPTION]</p>
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
                                            <a href="#" class="btn viewpro-btn btn-primary">Update Quantity</a>
                                        </div>
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
