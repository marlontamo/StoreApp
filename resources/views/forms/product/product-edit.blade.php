
<div class="row">

  <form action="{{route('product.update', $product)}}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="product_id" value="{{$product->id}}">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="product_title" value="{{$product->title}}">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" name="product_description" value="{{$product->description}}">
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" id="price" name="product_price" value="{{$product->price}}">
    </div>
    <div class="form-group">
      <label for="status">Status:</label>
      <select class="form-select" name="product_status" id="status">
        @if($product->status =="out of Stock")
        <option value="on stock">on stock</option>
        <option value="out of Stock">Out of Stock</option>
        @else
        <option value="{{$product->status}}">{{$product->status}}</option>
        <option value="out of Stock">Out of Stock</option>
        @endif
          
</select>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-success">Update</button>
    </div>
  </form>
    
    <b>editing this product</b>
</div>
