<p>{{$msg}}</p>
<form method="post">
    @csrf
    <input type="hidden" value="{{$v->category_id}}" name="category_id">
    <div>
        <label>Name</label>
        <input type="text" name="category_name" value="{{$v->category_name}}">
    </div>
    <div>
        <button>Save Changes</button>
    </div>
</form>