<h1>single Store Edit Form</h1>
@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<form method="POST" action="{{ route('store.update', $store) }}">
        @csrf
        <!-- Use PUT method for updating the item -->
        @method('put')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $store->name }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $store->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $store->location }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>