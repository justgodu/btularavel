@extends("layouts.main")

@section("content")
    <div class="container">
    <form action="{{ route('storeproducts') }}" method="POST">
            @csrf
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="">
            <label for="some-text">Text</label>
            <textarea type="text" class="form-control" name="some-text" id=""></textarea>
            <label for="short-description">Short Description</label>
            <textarea type="text" class="form-control" name="short-description" id=""></textarea>
            <button class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection