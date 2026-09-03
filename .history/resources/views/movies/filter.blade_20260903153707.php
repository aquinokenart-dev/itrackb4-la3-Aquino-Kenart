<!DOCTYPE html>
<html>
<head>
    <title>Movie Filter</title>
</head>
<body>
    <h1>Movie List</h1>
    <p>
        Showing genre:
        {{ $activeGenre ?? 'All' }}
    </p>
    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Rating</th>
            <th>Year</th>
        </tr>
        @forelse ($movies as $movie)
            <tr>
                <td>
                    {{ $movie['title'] }}
                </td>
                <td>
                    {{ $movie['genre'] }}
                </td>
                <td>
                    {{ $movie['rating'] }}
                </td>
                <td>
                    {{ $movie['year'] }}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">
                    No movies found.
                </td>
            </tr>
        @endforelse
    </table>
    <a href="{{ route('movies.index') }}">
        Back to Movie List
    </a>
</body>
</html>