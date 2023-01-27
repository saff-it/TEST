@extends('layouts.main')

@section('main-content')
    <section>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Bio</th>
                    <th scope="col">Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)

                    <tr>
                        <th scope="row">{{ $author->name}}</th>
                        <td>{{ $author->bio}}</td>
                        <td>{{ $author->date_of_birth}}</td>
                    </tr>
                    
                @endforeach

            </tbody>
        </table>
    </section>
@endsection
