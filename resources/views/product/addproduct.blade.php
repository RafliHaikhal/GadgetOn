@section('css', '/css/addproduct.css')
@section('title', 'Add Product')
@include('layout.header')

<body>
    <div class="add-product-body-container">
        <div class="add-product-body-content">
            <div class="col">
                <div class="row">
                    <h1 class="add-product-title">Add Product</h1>
                </div>
                <div class="row">
                    <form action="" method="post">
                        @csrf
                        <div class="form-item">
                            <input type="text" name="name" id="name" placeholder="Product Name">
                        </div>
                        <div class="form-item">
                            <textarea name="description" id="description" cols="30" rows="10" placeholder="Product Description"></textarea>
                        </div>
                        <div class="form-item">
                            <input type="number" name="price" id="price" placeholder="Price">
                        </div>
                        <div class="form-item">
                            <input type="number" name="year" id="year" placeholder="Released Year">
                        </div>
                        <div class="form-item">
                            <label for="existing-image"></label>
                            <input type="file" name="image" id="image">
                        </div>
                        <button class="add-product-button" type="submit">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>