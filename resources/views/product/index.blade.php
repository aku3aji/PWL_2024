<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
</head>
<body>
    <h1>Product Page</h1>
    
    <h2>Product Categories:</h2>
    <ul>
        <li><a href="{{ route('product.food-beverage') }}">Food & Beverage</a></li>
        <li><a href="{{ route('product.beauty-health') }}">Beauty & Health</a></li>
        <li><a href="{{ route('product.home-care') }}">Home Care</a></li>
        <li><a href="{{ route('product.baby-kid') }}">Baby & Kid</a></li>
    </ul>
</body>
</html>