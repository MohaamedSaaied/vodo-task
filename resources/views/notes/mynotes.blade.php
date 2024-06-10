<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Notes</title>
</head>
<body>
    <h1>My Notes</h1>
    <ul>
        
        <li><a href="{{ route('create') }}">Add Notes</a></li>
        
        <br><br>

        <li><a href="{{'view/' .Auth::id()}}">View and Edit Notes</a></li>

    </ul>
</body>
</html>