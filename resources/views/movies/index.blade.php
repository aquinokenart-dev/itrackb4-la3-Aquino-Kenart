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
        </tr>
 
        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie['title'] }}</td>
                <td>{{ $movie['genre'] }}</td>
                <td>{{ $movie['rating'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>

