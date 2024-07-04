<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')

  <title>Try Spatie Media Library</title>

  @livewireStyles
</head>
<body>
  <h1>This is Try Spatie Media Library app.blade.php</h1>
  
  {{ $slot }}
  
  @livewireScripts
</body>
</html>