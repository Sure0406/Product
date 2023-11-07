<!DOCTYPE html>
<html>
<head>
    <title>Product Registration</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Register a Product</h1>
        <div> <a href="/">Products</a></div>
        <form action="/product/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" class="form-control @if($errors->has('product_name')) is-invalid @endif" id="product_name" name="product_name" value="{{ old('product_name') }}">
                @if($errors->has('product_name'))
                    <div class="invalid-feedback">{{ $errors->first('product_name') }}</div>
                @endif
            </div>
            
            <div class="form-group">
                <label for="product_image">Product Image:</label>
                <input type="file" class="form-control-file @if($errors->has('product_image')) is-invalid @endif" id="product_image" name="product_image" value="{{ old('product_image') }}">
                @if($errors->has('product_image'))
                    <div class="invalid-feedback">{{ $errors->first('product_image') }}</div>
                @endif
            </div>
            
            <div class="form-group">
                <label for="product_price">Product Price:</label>
                <input type="number" class="form-control @if($errors->has('product_price')) is-invalid @endif" id="product_price" name="product_price" step="0.01" value="{{ old('product_price') }}">
                @if($errors->has('product_price'))
                    <div class="invalid-feedback">{{ $errors->first('product_price') }}</div>
                @endif
            </div>
            
            <button type="submit" class="btn btn-primary">Register Product</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and jQuery scripts if needed -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
