<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Create Role</title>
</head>
<body>
    <section class="container mx-auto mt-10">
        <div class="flex justify-center w-100">
            <div class="flex-1 justify-start mt-5">
                <div class="mt-28">
    <form method="POST" action="{{route('roles.store')}}">
        @csrf
    Name:<input type="text" name="name">
    <br><br>

    @foreach($permissions as $permission)
        <input type="checkbox" name="permissions[]" value="{{$permission->id}}">{{$permission->name}}
        <br>
    @endforeach
    <br>
    <br>
    <button class="btn bg-red-500 rounded text-1xl text-white px-2 py-1 ml-3" type="submit">Create</button>
</form>
</body>
</html>