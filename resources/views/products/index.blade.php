<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index of Product</h1>
    {{-- <h2>{{ $title }} </h2> --}}
    {{-- <h3>{{ $name }}</h3> --}}
    {{-- @foreach ($myphone as $item)
        <h3>{{ $item  }}</h3>
    @endforeach --}}
    {{-- <h3>{{ $products }}</h3> --}}
    <a href="{{ route('products') }}">Link to Products</a>

</body>
</html>
