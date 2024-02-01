<b>Products Listed for this Store</b>
<hr>
 <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['title'] }}</td>
                    <td>{{ $product['description'] }}</td>
                    <td>P{{ $product['price'] }}.00</td>
                    <td>{{$product['status']}}</td>
                    <td>
                    <div class="btn-group" role="group" aria-label="actions">
  <a href="/product/{{$product['id']}}" class="btn btn-primary btn-sm">view</a>
  <a href="/product/{{$product['id']}}/edit" class="btn btn-warning btn-sm">edit</a>
  <form method="post" action="{{route('product.destroy', $product['id'])}}">
    @csrf
    @method('delete')
  <button type="submit" class="btn btn-danger btn-sm">delete</button>
</form>
</tr>
@endforeach
</div>