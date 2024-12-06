<link rel="stylesheet" href="/css/bootstrap.min.css">

<a href="/" class="btn btn-primary">Back Home</a>
<a href="/brand/add" class="btn btn-primary">Add Brand</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <th>Id</th>
        <th>Name</th>
        <th>Command</th>
    </thead>
    <tbody>
        <!-- trong file namefile.blade.php -> su dung cu phap duyet vong lap khac cu phap php thong thuong -->
        @foreach($arr as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->name}}</td>
                <td>
                    <a href="/brand/details/{{$v->id}}" class="btn btn-primary">Details</a>
                    <a href="/brand/edit/{{$v->id}}" class="btn btn-primary">Edit</a>
                    <a href="/brand/delete/{{$v->id}}" class="btn btn-primary">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>