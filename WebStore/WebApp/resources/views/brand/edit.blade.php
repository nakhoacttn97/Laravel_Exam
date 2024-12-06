<p>{{$msg}}</p>
<form method="post">
    @csrf
    <input type="hidden" value="{{$v->id}}" name="id">
    <div>
        <label>Name</label>
        <input type="text" name="name" value="{{$v->name}}">
    </div>
    <div>
        <button>Save Changes</button>
    </div>
</form>