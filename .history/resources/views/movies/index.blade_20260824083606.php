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
 
        @foreach ($books as $book)
            <tr>
                <td>{{ $movie['title'] }}</td>
                <td>{{ $mocie['genre'] }}</td>
                <td>{{ $movie['rating'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>

