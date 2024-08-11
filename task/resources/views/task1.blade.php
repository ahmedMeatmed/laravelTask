<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<table class="table w-50 m-auto border rounded mt-5" border="1">
    <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>age</td>
        </tr>
    </thead>
    <tbody>
        @foreach ( $users as $user)
            {{-- // array of user['id','name','age'] --}}
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['age']}}</td>
            </tr>
        @endforeach
         <!-- @for ($i =0;$i<1;$i++)
       <tr>
            <td>{{$users['$id']}}</td>
            <td>{{$users['name']}}</td>
            <td>{{$users['age']}}</td>
        </tr>
        @endfor  -->
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>