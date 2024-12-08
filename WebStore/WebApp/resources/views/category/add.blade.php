@extends('shared/dashboard')

@section('title', 'Add Category')

@section('body')
<a href="/category">Back Category</a>
<p>{{$msg}}</p>
<form method="post">
    <!-- bat buoc khai bao csrf -->
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="category_name">
    </div>
    <div>
        <button>Save Changes</button>
    </div>
</form>
@stop