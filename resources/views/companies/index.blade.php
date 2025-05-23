<!DOCTYPE html>
<html>
<head>
    <title>JobBoard</title>
</head>
<body>
    <h1>Available Companies</h1>
    <ul>
        @foreach ($companies as $company)
            <li>
                <strong>{{ $company['name'] }}</strong>,<strong>Website: </strong> {{ $company['website'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>
