<!DOCTYPE html>
<html>
<head>
    <title>{{ $movie['title'] }}</title>
</head>

<body>

    <h1>{{ $movie['title'] }}</h1>

    <p>Genre: {{ $movie['genre'] }}</p>

    <p>Rating: {{ $movie['rating'] }}</p>

    <p>Year: {{ $movie['year'] }}</p>

    <p>ID: {{ $movie['id'] }}</p>

    <p>Prepared by: Kenart G. Aquino</p>

    <a href="{{ route('movies.index') }}">
        Back to Movie List
    </a>

</body>
</html>