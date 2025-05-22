<!DOCTYPE html>
<html>
<head>
    <title>JobBoard</title>
</head>
<body>
    <h1>Available Jobs</h1>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <strong>{{ $job['title'] }}</strong> at {{ $job['company'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>
