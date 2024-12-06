<a href="/brand">Back Brand</a>
<p>{{$msg}}</p>
<form method="post">
    <!-- bat buoc khai bao csrf -->
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <button>Save Changes</button>
    </div>
</form>