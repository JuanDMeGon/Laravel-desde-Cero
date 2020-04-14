<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>{{ $product->title }} ({{ $product->id }})</h1>
    <p>{{ $product->description }}</p>
    <p>{{ $product->price }}</p>
    <p>{{ $product->stock }}</p>
    <p>{{ $product->status }}</p>
</body>
</html>
