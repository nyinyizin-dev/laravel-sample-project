<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>

<body>
    <h1>Users</h1>
    @foreach ($users as $user)
        <ul>
            <li>
                {{ $user->name }}
                <a href="/delete/{{ $user->id }}">delete</a>
                <a href="/edit/{{ $user->id }}">edit</a>
            </li>

        </ul>
    @endforeach

    <form action="/store" method="post">
        @csrf
        <input type="text" name="username" placeholder="username">
        <input type="submit" value="submit">
    </form>
</body>

</html>
