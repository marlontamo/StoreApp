<div class="container">
@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
        <h2>Create a Product</h2>
        <form method="POST" action="{{ route('product.store') }}">
            @csrf
           
            <input type="hidden" name="userId" value={{ Auth::user()->id }}>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="location">Price:</label>
                <input type="text" class="form-control" id="location" name="price" required>
            </div>
            <div class="form-group">
                <label for="location">Status:</label>
                <input type="text" class="form-control" id="location" name="status" required>
            </div>
            <div class="form-group">
                <label for="location">Store:</label>
                <select name="store_id" id="">
                    <option value=1>Store 1</option>
                    <option value=2>Store 2</option>
                    <option value=3>Store 3</option>
                    <option value=4>Store 4</option>
                    <option value=5>Store 5</option>
                </select>
                <!--input type="text" class="form-control" id="location" name="location" required-->
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>