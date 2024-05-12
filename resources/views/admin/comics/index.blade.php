<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comics</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">

    @foreach ($comics as $comic)
        <h2>{{ $comic->title }}</h2>
        <img width="200px" src="{{ $comic->cover_image }}" alt="">
        <a href="{{ route('comics.show', $comic) }}">View</a>
    @endforeach

</body>

</html>
