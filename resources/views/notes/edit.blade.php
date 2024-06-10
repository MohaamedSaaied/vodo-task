<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    <H1>Edit Note</H1>

    <form action="/update" method="POST">
        @method('PATCH')
        @csrf
        <input type="longText" name="note" value="{{ $data['note'] }}"><br><br>
        <input type="hidden" name="id" value="{{ $data['id'] }}">
        <input type="hidden" name="userId" value="{{ $data['userId'] }}"><br><br>
        <button type="submit">Update</button><br><br>
    </form>
</body>
</html>