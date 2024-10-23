<form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="photo">Upload Photo:</label>
        <input type="file" name="photo" id="photo" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Upload</button>
</form>
