@extends('layouts.main')

@section('main-content')
    <div class="container">
        <form>

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" id="name" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" class="form-control" id="category" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" class="form-control" id="author" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Details</label>
                <input type="text" class="form-control" id="details" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
