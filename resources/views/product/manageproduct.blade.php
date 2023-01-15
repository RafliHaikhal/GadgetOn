@section('css', '/css/manageproduct.css')
@section('title', 'Manage Product')
@include('layout.header')

<body>
    <div class="manage-product-body-container">
        <div class="row manage-product-head-table-row ps-1">
            <div class="col-1 manage-product-head-table-col pt-3">
                <p class="fw-semibold">No</p>
            </div>
            <div class="col-2 manage-product-head-table-col pt-3">
                <p class="fw-semibold">Product Image</p>
            </div>
            <div class="col-2 manage-product-head-table-col pt-3">
                <p class="fw-semibold">Product Name</p>
            </div>
            <div class="col-3 manage-product-head-table-col pt-3">
                <p class="fw-semibold">Product Description</p>
            </div>
            <div class="col manage-product-head-table-col pt-3">
                <p class="fw-semibold">Product Price</p>
            </div>
            <div class="col manage-product-head-table-col pt-3">
                <p class="fw-semibold">Action</p>
            </div>
        </div>
        {{-- @foreach --}}
        <div class="row manage-product-row ps-1">
            <div class="col-1 manage-product-col pt-3">
                <p class="">[NO]</p>
            </div>
            <div class="col-2 manage-product-col pt-3">
                <p class="">[IMAGE]</p>
            </div>
            <div class="col-2 manage-product-col pt-3">
                <p class="">[NAME]</p>
            </div>
            <div class="col-3 manage-product-col pt-3">
                <p class="">[DESCRIPTION]</p>
            </div>
            <div class="col manage-product-col pt-3">
                <p class="">Rp.[PRICE]</p>
            </div>
            <div class="col manage-product-col pt-3">
                <div class="row">
                    <div class="col">
                        <div class="manage-product-update-btn">
                            <a href="/editproduct" class="btn manage-product-btn btn-primary">Update</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="manage-product-delete-btn">
                            <a href="#" class="btn manage-product-btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
</body>
</html>