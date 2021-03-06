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

    <section class="container mx-auto mt-10">
        <div class="flex justify-center w-100">
            <div class="flex-1 justify-start mt-5">
                <div class="mt-28">
    <form method="POST" action="/roles/{{$role->id}}">
        @csrf 
        @method('PUT')

        Name:<input type="text" name="name" value={{$role->name}}>
        <br>
        <br> 
        @foreach($permissions as $permission)
        <td><input type="checkbox" name="permissions[]" value="{{$permission->id}}"
           {{$role->permissions->contains($permission->id) ? 'checked' : ''}}>
           {{$permission->name}} </td>
           <br>
    @endforeach
    <br>
    <br>
        <button class="btn bg-blue-500 rounded text-1xl text-white px-2 py-1" type="submit" type="submit">Update</button> 
            </div>
        </div>
    </div>
    </form>
</body>
</html>