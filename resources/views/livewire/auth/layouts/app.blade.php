<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - StayEasy</title>
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#0891b2',
            'primary-dark': '#0e7490',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans min-h-screen flex flex-col">
  <!-- Navbar -->
  @include('livewire.user.partials.navbar')

  @yield('content')
  
</body>
</html>
