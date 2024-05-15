@extends('layouts.app')

@section('content')
    <h1 class="p-3 bg-dark text-white">Create a new comic</h1>

    {{-- Error --}}
    @include('partials.validation-errors')

    <div class="container py-5">

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelper" placeholder="Title" value="{{ old('title') }}" />
                <small id="titleHelper" class="form-text text-muted">Type a title of the comic</small>

                {{-- Error --}}
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover image</label>
                <input type="text" class="form-control @error('cover_image') is-invalid @enderror" name="cover_image"
                    id="cover_image" aria-describedby="cover_imageHelper" placeholder="www.comic.it"
                    value="{{ old('cover_image') }}" />
                <small id="cover_imageHelper" class="form-text text-muted">Cover image of the comic</small>

                {{-- Error --}}
                @error('cover_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror" name="author"
                    id="author" aria-describedby="authorHelper" placeholder="Name" value="{{ old('author') }}" />
                <small id="authorHelper" class="form-text text-muted">Type the author of the comic</small>

                {{-- Error --}}
                @error('author')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>

                {{-- Error --}}
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="3">{{ old('description') }}</textarea>

                {{-- Error --}}
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="publication_year" class="form-label">Publication year</label>
                <input type="number" class="form-control @error('publication_year') is-invalid @enderror"
                    name="publication_year" id="publication_year" aria-describedby="publicationYearHelper"
                    placeholder="2024" value="{{ old('publication_year') }}" />
                <small id="publicationYearHelper" class="form-text text-muted">Type the publication year of the
                    comic</small>

                {{-- Error --}}
                @error('publication_year')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                    name="price" id="price" aria-describedby="priceHelper" placeholder="1234"
                    value="{{ old('price') }}" />
                <small id="priceHelper" class="form-text text-muted">Type the price for the comic</small>

                {{-- Error --}}
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-dark">Create</button>

        </form>
    </div>
@endsection
