<!DOCTYPE html>
<html>
<head>
    <title>My Product List</title>
</head>
<body>
    <h1>My Product List</h1>
    <p>Prepared by: Fritz Springael</p>
 
    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
 
        @foreach ($products as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product['stock'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>

