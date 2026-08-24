<!DOCTYPE html>
<html>
<head>
    <title>My Book List</title>
</head>
<body>
    <h1>My Book List</h1>
    <p>Prepared by: Juan Dela Cruz</p>
 
    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
        </tr>
 
        @foreach ($books as $book)
            <tr>
                <td>{{ $book['title'] }}</td>
                <td>{{ $book['author'] }}</td>
                <td>{{ $book['year'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>

