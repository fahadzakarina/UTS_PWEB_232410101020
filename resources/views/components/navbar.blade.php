<nav class="bg-[#CEF9B3] shadow-md p-4 items-center">
    <div class="container flex justify-between items-center">
        <div>
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="text-2xl font-bold text-[#156906]">AgroEase</a>
        </div>
        <div>
            <div class="flex items-center">
                <a href="{{ route('dashboard', ['username' => $username]) }}"
                class="text-[#156906] font-bold hover:text-[#FFFBE6] mx-2 px-2 py-0.5 rounded-lg bg-[#FFFBE6] hover:bg-[#156906]">
                Dashboard
                </a>
                <a href="{{ route('profile') }}"
                class="text-[#156906] font-bold hover:text-[#FFFBE6] mx-2 px-2 py-0.5 rounded-lg bg-[#FFFBE6] hover:bg-[#156906]">
                Profile
                </a>
                <a href="{{ route('pengelolaan') }}"
                class="text-[#156906] font-bold hover:text-[#FFFBE6] mx-2 px-2 py-0.5 rounded-lg bg-[#FFFBE6] hover:bg-[#156906]">
                Pengelolaan
                </a>
            </div>
        </div>
        <div>
            <div class="flex items-center">
                <a href="{{ route('logout') }}" class="text-red-500 font-bold hover:text-red-700 mx-4">Logout</a>
            </div>
        </div>
    </div>
</nav>

