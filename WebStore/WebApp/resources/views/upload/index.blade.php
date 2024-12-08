<a href="/upload/add">Upload</a>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Size</th>
        </tr>
    </thead>
    <tbody>
        @foreach($arr as $v)
        <tr>
            <td>{{$v->OriginalName}}</td>
            <td>{{$v->ImageUrl}}</td>
            <td>{{$v->Size}}</td>
            <td>{{$v->Type}}</td>
        </tr>
        @endforeach
    </tbody>
</table>