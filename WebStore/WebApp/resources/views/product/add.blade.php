@extends('shared/dashboard')

@section('title', 'Add Products')

@section('body')
<form method="post">
    <div>
        <label for="">Category</label>
        <select name="category_id">
            @foreach($crr as $v)
            <option value="{{$v->category_id}}">{{$v->category_name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Description</label>
        <textarea name="description"></textarea>
    </div>
    <div>
        <label for="">Content</label>
        <textarea name="content"></textarea>
    </div>
    <div>
        <label for="">Image</label>
        <input type="file" name="f">
    </div>
    <div>
        <label for="">Price</label>
        <input type="number" step="0.01" min="0" name="price">
    </div>
    <div>
        <label for="">Quantity</label>
        <input type="number" name="quantity" min="1">
    </div>
    <div>
        <button>Save Changes</button>
        <a href="/product">Cancel</a>
    </div>
</form>
@stop