<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Edit User</title>
</head>
<body>

    <section class="container mx-auto mt-10">
        <div class="flex justify-center w-100">
            <div class="flex-1 justify-start mt-5">
                <div class="mt-28">

                    <form method="POST" action="{{route('users.update', $user->id)}}">
                        @csrf
                        @method('PUT')
    
                            Name: <input type="text" name="name" value="{{$user->name}}">
                            <br>
                            <br>
                            Email: <input type="text" name="email" value="{{$user->email}}">
                            <br>
                            <br>
                            Password : <input type="password" name="password" value="{{$user->password}}">
                            <br>
                            <br>
                            <select name="role"> 
                                @foreach($roles as $role)
                                    <option class="mr-10" value="{{$role->id}}">
                                        {{-- {{$selectedValue == $role->id ? 'selected = "selected"' : ''}}> --}}
                                        {{$role->name}}</option>
                                @endforeach
                            </select>

                            <br>
                            <br>
                            <button class="btn bg-red-500 rounded text-1xl text-white px-2 py-1 ml-3" type="submit">Update User</button>
                        </form>
                    </div>
                </div>
            </div>
        </section> 

</body>
</html>
