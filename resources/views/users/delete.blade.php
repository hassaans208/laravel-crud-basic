<! - resources/views/products/delete.blade.php →
<!DOCTYPE html>
<html>
<head>
 <title>Delete Product</title>
</head>
<body>
 <h1>Delete Product</h1>
 <p>Are you sure you want to delete this product?</p>
 <form method="post" action="{{ route('products.destroy', $product->id) }}">
 @csrf
 @method('DELETE')
 <button type="submit">Delete</button>
 </form>
</body>
</html>