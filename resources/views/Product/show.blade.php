<table border='1'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Price</th>
                <th>Status</th>
                
            </tr>
        </thead>
        <tbody>
            
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['title'] }}</td>
                    <td>{{ $product['description'] }}</td>
                    <td>P{{ $product['price'] }}.00</td>
                    <td>{{$product['status']}}</td>
                <tr>
</tbody>
</table>
                     