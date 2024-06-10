<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Note</title>
</head>
<body>
    <h1>Add Note</h1>
    <form action = "/store" method = "post">
        @csrf
        <table>
        <tr>
        <td>Note</td>
        <td><input type='longText' name='note' /></td>    
        </tr>
        <td><input type='hidden' name='userId' value="{{Auth::id()}}"/></td>    
        <tr>
            <td colspan = '2'>
            <input type = 'submit' value = "Add Note"/>
            </td>
            </tr>
        </table>
</body>
</html>