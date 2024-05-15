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
                                <a class="btn btn-primary btn-sm" href="{{ route('comics.show', $comic) }}">View</a>

                                <a class="btn btn-secondary btn-sm" href="{{ route('comics.edit', $comic) }}">Edit</a>

                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modalId-{{ $comic->id }}">
                                    Delete
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitle-{{ $comic->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitle-{{ $comic->id }}">
                                                    Delete comic {{ $comic->title }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                Are you sure you want to delete this? The operation cannot be reversed
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>

                                                <form action="{{ route('comics.destroy', $comic) }}" method="post">

                                                    @csrf

                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">
                                                        Delete
                                                    </button>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>


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
