<!DOCTYPE html>
<html>
<head>
    <title>JobBoard</title>
</head>
<body>
    <h1>Available Applications</h1>
    <ul>
        @foreach ($applications as $application)
            <li>
                <strong>{{ $application['user'] }}</strong> as {{ $application['job'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>
