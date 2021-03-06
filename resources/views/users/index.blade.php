<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @foreach($users as $user)
       User Name : {{$user->name}}
        <br>
       User Email : {{$user->email}}
        <br>
        <br>
        <form method="GET" action="users/{{$user->id}}/edit">
            <button class="btn bg-blue-500 rounded text-1xl text-white px-2 py-1" type="submit">Edit User</button>
        </form>

        <form method="POST" action="{{route('users.destroy',$user->id)}}">
            @csrf
            @method('DELETE')
            <button class="btn bg-red-500 rounded text-1xl text-white px-2 py-1" type="submit">Delete User</button>
        </form>
        <br>         
        <br>              
        <br>
    @endforeach

    <br>
    <br> 
    <br>
        <form method="GET" action="{{route('users.create')}}">
            <button class="btn bg-blue-500 rounded text-1xl text-white px-2 py-1" type="submit">Create User</button>
        </form>

   
</body>
</html>