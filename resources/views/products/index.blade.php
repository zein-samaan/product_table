<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>price</th>
      <th>category</th>
      <th>created_at</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product )
    <tr>
      <td>{{ $product->id }}</td>
      <td>{{ $product->name }}</td>
      <td>{{ $product->price }}</td>
      <td>{{ $product->category }}</td>
      <td>{{ $product->created_at }}</td>
      <td><a href="{{ route('products.edit',$product->id) }}"><button>edit</button></a>
    </tr>
    @endforeach
    
  </tbody>
</table> 

<a href="{{ route('products.create') }}">Add New Product</a> 

<br>
<br>
{{ $products->links() }}  
</body>
</html>