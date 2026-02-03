<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayEasy - Hostel Room Booking</title>
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

<body class="bg-white text-gray-800 font-sans">
  
  
  @include('livewire.user.partials.navbar')
  @if (session('toast'))
      <div id="toast"
          class="fixed top-5 right-5 z-50 px-4 py-3 rounded-xl shadow-lg text-white
  {{ session('toast.type') === 'success' ? 'bg-green-600' : '' }}
  {{ session('toast.type') === 'error' ? 'bg-red-600' : '' }}
  {{ session('toast.type') === 'info' ? 'bg-blue-600' : '' }}">

          {{ session('toast.message') }}

      </div>

      <script>
          setTimeout(() => {
              document.getElementById('toast')?.remove();
          }, 4000);
      </script>
  @endif

    {{ $slot }}

    @include('livewire.user.partials.footer')




</body>

</html>
