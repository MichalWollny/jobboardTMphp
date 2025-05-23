<!DOCTYPE html>
<html>
<head>
    <title>JobBoard</title>
</head>
<body>
    <h1>Available Categories</h1>
    <ul>
        @foreach ($categories as $category)
            <li>
                <strong>{{ $category['name'] }}</strong>
            </li>
        @endforeach
    </ul>
</body>
</html>
