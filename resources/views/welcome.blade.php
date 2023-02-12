<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Welcome Page</title>

      @vite('resources/js/app.js')
</head>

<body class="antialiased">
      <div class="flex justify-center items-center h-screen">
            <a href="/login">
                  <h1 class="text-3xl text-purple-600 bg-gradient-to-b from-yellow-300 to-orange-400 rounded p-6 font-bold" onClick=>Login Oldal</h1>
            </a>
      </div>
</body>

</html>