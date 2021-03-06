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
                <div class="mt-72 text-center ">
            
                    <a class="block float-right btn bg-green-500 rounded text-1xl text-white px-2 py-1" href="{{route('roles.create')}}">Create Role</a><br>
                    <a class="block float-right btn bg-green-500 rounded text-1xl text-white px-2 py-1" href="{{route('users.index')}}">User</a><br>
        
    
                    <form method = "GET" action="/posts">
                        <button class="btn bg-blue-500 rounded text-1xl text-white px-2 py-1" type="submit">Post</button>
                    </form>
                     <form method = "GET" action="/categories">
                        <button class="btn bg-blue-500 rounded text-1xl text-white px-2 py-1" type="submit">Category</button>
                    </form>
                    <form method = "GET" action="/tags">
                        <button class="btn bg-blue-500 rounded text-1xl text-white px-2 py-1" type="submit">Tag</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>