@section('css', '/css/editproduct.css')
@section('title', 'Edit Product')
@include('layout.header')

<body>
    <div class="edit-product-body-container">
        <div class="edit-product-body-content">
            <div class="col">
                <div class="row">
                    <h1 class="edit-product-title">Edit Current Product</h1>
                </div>
                <div class="row">
                    <form action="" method="post">
                        @csrf
                        <div class="form-item">
                            <input type="text" name="name" id="name" placeholder="Input New Name">
                        </div>
                        <div class="form-item">
                            <textarea name="description" id="description" cols="30" rows="10" placeholder="Input New Description"></textarea>
                        </div>
                        <div class="form-item">
                            <input type="number" name="price" id="price" placeholder="Input New Price">
                        </div>
                        <div class="form-item">
                            <input type="number" name="year" id="year" placeholder="Input New Year">
                        </div>
                        <div class="form-item">
                            <label for="existing-image"></label>
                            <input type="file" name="image" id="image">
                        </div>
                        <button class="edit-product-button" type="submit">Edit Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>