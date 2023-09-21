
@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Store Name</th>
                <th>store Location</th>
                <th>description</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store)
                <tr>
                    <td>{{ $store['id'] }}</td>
                    <td>{{ $store['name'] }}</td>
                    <td>{{ $store['location'] }}</td>
                    <td>{{ $store['description'] }}</td>
                    <td>
                    <div class="btn-group" role="group" aria-label="actions">
  <a href="/store/{{$store['id']}}" class="btn btn-primary btn-sm">view</a>
  <a href="/store/{{$store['id']}}/edit" class="btn btn-warning btn-sm">edit</a>
  <form method="post" action="{{route('store.destroy', $store['id'])}}">
    @csrf
    @method('delete')
  <button type="submit" class="btn btn-danger btn-sm">delete</button>
</form>
</div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>