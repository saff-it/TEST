@extends('layouts.main')

@section('main-content')
    <div class="container">
        <form>

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>

            <div class="input-group">
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <div class="input-group my-3">
                <span class="input-group-text">With textarea</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
