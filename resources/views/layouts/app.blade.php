<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AgroEase</title>
    <link rel="icon" type="image/png" sizes="45x45" href="images/Logo_AgroEase.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFFBE6] flex flex-col min-h-screen">
<div class="flex-grow">
    @yield('content')
</div>
@include('components.footer')
</body>
</html>
