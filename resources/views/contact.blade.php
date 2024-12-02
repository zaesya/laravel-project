<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</html> -->

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <title>{{$title}}</title>
       
</head>
<body class="h-full">
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
  <x-navbar></x-navbar>
  <x-header>{{$title}}</x-header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
       
    <title>{{$title}}</title>
    <style>
        a {
            text-decoration: none;
            color: blue;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h3>{{ $title }}</h3>
        <p> {{ $nama }}</p>
        <p> {{ $kelas }}</p>
        <p>
            <a href="{{ $linkedin }}" target="_blank">LinkedIn Profile</a>
        </p>
    </div>
</body>
    <!-- <a href='https://www.linkedin.com/in/zesya-feryal-4452b32a1/' target="_blank">LinkedIn Profile</a> -->
    </div>
  </main>
</div>    
</body>
</html>
