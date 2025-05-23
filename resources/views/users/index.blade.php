<!DOCTYPE html>
<html>
<head>
    <title>JobBoard</title>
</head>
<body>
    <h1>Available Users</h1>
    <ul>
        @foreach ($users as $user)
            <li>
                <strong>{{ $user['name'] }}</strong>,  <strong>{{ $user['email'] }}</strong>, <strong>{{ $user['type'] }}</strong>
            </li>
        @endforeach
    </ul>
</body>
</html>
