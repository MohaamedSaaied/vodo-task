<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Notes</title>
</head>
<body>
    <table border="2" >

        <tr>
            <td>Note</td>
            <td>Operations</td>  
        </tr>

    @foreach ($notes as $note )
            <tr>
                        <td>{{ $note['note'] }}</td>
                            <form action="{{url('delete/'.$note['id'])}}" method="POST" >
                                {{method_field('DELETE')}}
                                {{ csrf_field() }}
                            <td><button type="submit">Delete</button>
                            </form>
                            
                        <a href={{'edit/' .$note['id'] }}><button>Update</button></a></td>

                        
            </tr>
            
    @endforeach


    </table>
</body>
</html>