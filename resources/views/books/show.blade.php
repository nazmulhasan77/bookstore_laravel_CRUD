<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
    <p>
        <a href="{{route('books.index')}}">Back</a>
    </p>
    <h2>Book Details</h2>
    <table width="25%" border="2">
        <tr>
            <th>ID </th>
            <td>{{$book->id}}</td>
        </tr>

        <tr>
            <th>Title </th>
            <td>{{$book->title}}</td>
        </tr>

        <tr>
            <th>Author</th>
            <td>{{$book->author}}</td>
        </tr>


        <tr>
            <th>ISBN </th>
            <td>{{$book->isbn}}</td>
        </tr>


        <tr>
            <th>Stock </th>
            <td>{{$book->stock}}</td>
        </tr>


        <tr>
            <th>Price</th>
            <td>{{$book->price}}</td>
        </tr>


    </table>

</body>
</html>
