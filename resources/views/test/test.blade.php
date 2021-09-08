<h1>Test Page</h1>
<div>
    <div>
        @foreach ($test as $data)
        <table border='2px' style="width:100vw">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->age}}</td>
                <td><button class='btn btn-primary'>Edit</button><button class='btn btn-danger'>Delete</button>
            </tr>
        </table>
    @endforeach
    </div>
    
    <a href="/test/create"><button>Create Test </button></a>
</div>

