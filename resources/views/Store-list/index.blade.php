<!-- <ul class="list-group">
    <li class="list-group-item">one</li>
    <li class="list-group-item">two</li>
    <li class="list-group-item">three</li>
    <li class="list-group-item">four</li>
    <li class="list-group-item">five</li>
</ul> -->
<!-- <ul class="list-group">
        @foreach ($stores as $store)
            <li class="list-group-item">{{ $store->name }}</li>
        @endforeach
    </ul> -->
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
  <a href="#" class="btn btn-primary btn-sm">view</a>
  <a href="#" class="btn btn-warning btn-sm">edit</a>
  <a href="#" class="btn btn-danger btn-sm">delete</a>
</div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>