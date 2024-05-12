<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comics</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="antialiased">

    <div class="container">


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

</body>

</html>
