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
                
                <select class="form-select" name="store_id" id="">
                 @foreach($stores as $store)  
                <option value="{{$store->id}}">{{$store->name}}</option>
                @endforeach 
                
                </select>
                
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>