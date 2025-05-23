<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobBoard - Startseite</title>
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
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Willkommen beim JobBoard!</h1>
        <p class="text-gray-600 mb-8">
            Verwalten Sie Stellenanzeigen, Unternehmen, Kategorien, Benutzer und Bewerbungen.
            Wählen Sie eine der folgenden Ansichten:
        </p>

        <nav class="space-y-4">
            <a href="/jobs" class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                Stellenanzeigen anzeigen
            </a>
            <a href="/users" class="block w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                Benutzer anzeigen
            </a>
            <a href="/companies" class="block w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                Unternehmen anzeigen
            </a>
            <a href="/categories" class="block w-full bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                Kategorien anzeigen
            </a>
            <a href="/applications" class="block w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                Bewerbungen anzeigen
            </a>
        </nav>
    </div>
</body>
</html>
