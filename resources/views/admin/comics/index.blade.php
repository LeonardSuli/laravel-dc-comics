@extends('layouts.app')

@section('content')
    <div class="container min-vh-100 py-5">


        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Cover image</th>
                        <th scope="col">Author</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($comics as $comic)
                        <tr class="">
                            <td scope="row">{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td><img width="100px" src="{{ $comic->cover_image }}" alt=""></td>
                            <td>{{ $comic->author }}</td>
                            <td><a href="{{ route('comics.show', $comic) }}">View</a></td>
                        </tr>

                    @empty

                        <tr class="">
                            <td scope="row">nothing found</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
