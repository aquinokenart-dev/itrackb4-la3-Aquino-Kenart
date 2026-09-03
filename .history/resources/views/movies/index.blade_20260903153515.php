<!DOCTYPE html>
<html>
<head>
    <title>My Movie List</title>
</head>
<body>
    <h1>My Movie List</h1>
    <p>Prepared by: Kenart G. Aquino</p>
    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Rating</th>
            <th>Year</th>
        </tr>
        @foreach ($movies as $movie)
            <tr>
                <td>
                    <a href="{{ route('movies.show', $movie['id']) }}">
                        {{ $movie['title'] }}
                    </a>
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
        @endforeach
    </table>
    <br>
    <br>
    </a>
</body>
</html>