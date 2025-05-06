<nav class="bg-white border-b shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">

      <div class="flex items-center">
          <a href="/">
           <span class="text-blue-600 text-xl font-bold">VanBooks</span>
         </a>
      </div>



      <div class="hidden sm:flex space-x-6 items-center">
        <a href="{{ route('dashboard', ['username' => $username]) }}" class="text-gray-600 hover:text-blue-600">Beranda</a>
        <a href="{{ route('manajemenbuku', ['username' => $username]) }}" class="text-gray-600 hover:text-blue-600">Manajemen</a>
        <a href="{{ route('profile', ['username' => $username]) }}" class="text-gray-600 hover:text-blue-600">Profil</a>


        <form class="relative">
          <input type="text" placeholder="Cari buku..."
                 class="pl-3 pr-10 py-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
          <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-500 hover:text-blue-600">
            <img src="img/search.png" alt="Search" class="h-5 w-5 object-contain" />
          </button>
        </form>


        <a href="{{ route('pagelogin') }}" class="flex items-center text-black-500 hover:text-red-700 font-medium">
          <img src="img/logout.png" alt="Logout" class="h-5 w-5 mr-1" />
          Logout
        </a>
      </div>


      <div class="sm:hidden flex items-center">
        <button id="menu-btn" class="text-gray-600 hover:text-blue-600 focus:outline-none focus:text-blue-600">
          ☰
        </button>
      </div>
    </div>
  </div>


  <div id="mobile-menu" class="hidden sm:hidden px-4 pb-4">
    <a href="{{ route('dashboard', ['username' => $username]) }}" class="block text-gray-600 hover:text-blue-600 py-1">Beranda</a>
    <a href="{{ route('manajemenbuku', ['username' => $username]) }}" class="block text-gray-600 hover:text-blue-600 py-1">Manajemen</a>
    <a href="{{ route('profile', ['username' => $username]) }}" class="block text-gray-600 hover:text-blue-600 py-1">Profil</a>


    <form class="mt-2 relative">
      <input type="text" placeholder="Cari buku..." class="w-full pl-3 pr-10 py-1 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
    </form>


    <a href="{{ route('pagelogin') }}" class="flex items-center text-black-500 hover:text-red-700 font-medium mt-2">
      <img src="img/logout.png" alt="Logout" class="h-5 w-5 mr-1" />
      Logout
    </a>
  </div>


  <script>
    document.getElementById("menu-btn").addEventListener("click", function () {
      const menu = document.getElementById("mobile-menu");
      menu.classList.toggle("hidden");
    });
  </script>
</nav>
