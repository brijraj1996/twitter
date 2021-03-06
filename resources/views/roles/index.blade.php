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
        <a class="block float-right btn bg-green-500 rounded text-1xl text-white px-2 py-1" href="{{route('roles.create')}}">Create</a>
        <br>
        <br>
        <a class="block float-right btn bg-green-500 rounded text-1xl text-white px-2 py-1" href="{{route('users.index')}}">User</a><br>
        <div class="mt-28">
            
            @foreach($roles as $role)
                <div class="flex justify-center w-100">
                    <div class="flex-1 justify-start mt-5">
    
                        <p>{{$role->name}}</p>
    
                    </div>
                    <form method="GET" action="roles/{{$role->id}}/edit">
                        <button class="btn bg-blue-500 rounded text-1xl text-white px-2 py-1" type="submit">Edit</button>
                    </form>
            
                    <form method="POST" action="roles/{{$role->id}}"> 
                        @csrf
                        @method('DELETE')
                        <button class="btn bg-red-500 rounded text-1xl text-white px-2 py-1 ml-3" type="submit">Delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
    </section>
    

</body>
</html>