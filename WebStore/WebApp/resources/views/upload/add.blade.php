<a href="/upload">Back Upload</a>
<form method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="">Image</label>
        <input type="file" name="f" eccept="image/*">
    </div>
    <div>
        <button>Upload</button>
    </div>
</form>