<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Create User</title>
</head>
<body>
    <section class="container mx-auto mt-10">
        <div class="flex justify-center w-100">
            <div class="flex-1 justify-start mt-5">
                <div class="mt-28">
                    <form method="POST" action="{{route('users.store')}}">
                    @csrf

                        Name: <input type="text" name="name">
                        <br>
                        <br>
                        Email: <input type="text" name="email">
                        <br>
                        <br>
                        Password : <input type="password" name="password">
                        <br>
                        <br>
                        Confirm Password : <input type="password" name="confirm">
                        <br>
                        <br>
                        <select name="role"> 
                            @foreach($roles as $role)
                                <option class="mr-10" value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                        <br>
                        <br>
                        <button class="btn bg-red-500 rounded text-1xl text-white px-2 py-1 ml-3" type="submit">Create User</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>