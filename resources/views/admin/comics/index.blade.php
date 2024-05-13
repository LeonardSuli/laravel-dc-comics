@extends('layouts.app')

@section('content')
    <div class="container min-vh-100 py-5">

        <a name="" id="" class="btn btn-primary rounded-pill position-fixed bottom-0 end-0 m-3"
            href="{{ route('comics.create') }}" role="button">
            <i class="fa fa-plus" aria-hidden="true"></i>
            <span>+ ADD</span>
        </a>

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
                            <td>
                                <a href="{{ route('comics.show', $comic) }}">View</a>
                                <a href="{{ route('comics.edit', $comic) }}">Edit</a>
                            </td>
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
