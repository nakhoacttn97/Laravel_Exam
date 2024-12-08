@extends('shared/dashboard')

@section('title', 'Products')

@section('body')
<a href="/product/add" class="btn btn-primary">Add Product</a>
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Image</th>
            <th>Content</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Command</th>
        </tr>
    </thead>
    <tbody>
        @foreach($arr as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->category_id}}</td>
            <td>
                <img src="/images/{{$v->url}}" alt="{{$v->name}}">
            </td>
            <td>{{$v->content}}</td>
            <td>{{$v->description}}</td>
            <td>{{$v->price}}</td>
            <td>{{$v->quantity}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop