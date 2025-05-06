<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Vanbooks</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-yellow-50 to-blue-100 min-h-screen flex items-center justify-center">

  <div class="bg-white rounded-3xl shadow-xl w-full max-w-5xl flex overflow-hidden">
    @if(session('error'))
        <div id="popupMessage"
            class="fixed top-5 left-1/2 transform -translate-x-1/2 px-4 py-3 rounded-lg shadow-lg transition-opacity duration-500 bg-red-500 text-white">
            {{session('error') }}
        </div>

        <script>
            setTimeout(() => {
                const popup = document.getElementById('popupMessage');
                if (popup) {
                    popup.style.opacity = '0';
                    setTimeout(() => popup.remove(), 500);
                }
            }, 3000);
        </script>
    @endif

    <div class="w-1/2 bg-white p-10 flex flex-col items-center justify-center text-center">
    <span class="text-blue-600 text-xl font-bold">VanBooks</span>
      <img src="img/login.avif" alt="Gramedia" class="w-60 mb-6" />
      @include('components.footer')
    </div>


    <div class="w-1/2 bg-white p-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Masuk ke Akun Anda</h2>
    <form method="POST" action="{{ route('login.submit') }}" class="space-y-4">
        @csrf
        <input type="email" name="email" placeholder="Email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" />
        <input type="password" name="password" placeholder="Kata Sandi" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" />

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Masuk</button>
    </form>
    <p class="text-sm text-center text-gray-600 mt-6">
    </div>

  </div>
</body>
</html>
