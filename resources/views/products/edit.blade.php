<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Product Name" value="{{ $product->name }}">
        <input type="number" name="price" placeholder="Product Price" value="{{ $product->price }}">
        <input type="number" name="stock" placeholder="Product Stock" value="{{ $product->stock }}">
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
