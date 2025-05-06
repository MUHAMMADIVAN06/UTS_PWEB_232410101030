<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body class="font-sans bg-gradient-to-r from-yellow-50 to-blue-100">

  @include('components.navbar')

  <main>
    @yield('content')
  </main>
  <br>
  <br>

  @include('components.footer')
</body>
</html>
