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
<body class="h-screen bg-cover bg-center relative" style="background-image: url('{{ asset('images/bg_login.png') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <div class="flex items-center justify-center h-screen relative z-10">
        <div class="bg-[#FFFBE6] w-96 flex flex-col justify-center items-center mx-auto my-auto rounded-lg shadow-lg h-auto py-6">
            <div class="flex justify-center items-center mb-4">
                <img src="{{ asset('images/Logo_AgroEase.png') }}" alt="Logo" class="w-32">
            </div>
            <form action="{{ route('login.post') }}" method="POST" class="w-full px-8">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 font-bold">Username</label>
                    <input type="text" id="username" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#CEF9B3]" placeholder="Masukkan username">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-bold">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#CEF9B3]" placeholder="Masukkan password">
                </div>
                <button type="submit" class="text-xl w-full bg-[#CEF9B3] text-[#298719] font-bold py-2 px-4 rounded-lg hover:bg-[#A8E5A0] hover:text-white transition duration-300">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>
