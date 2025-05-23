<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobBoard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom font for a clean look */
        body {
            font-family: "Inter", sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white p-8 rounded-lg shadow-xl max-w-md w-full text-center">
    <h1 class="block w-full py-3 px-6 m-4 text-4xl font-bold">Available Bewerbungen</h1>
    <ul>
        @foreach ($applications as $application)
            <li>
                <a href="" class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 m-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                    <strong>{{ $application['user'] }}</strong> as {{ $application['job'] }}
                </a>
            </li>
        @endforeach
    </ul>
    </div>
</body>
</html>
