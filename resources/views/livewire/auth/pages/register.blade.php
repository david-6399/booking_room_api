@extends('livewire.auth.layouts.app')
@section('content')

<!-- Main Content -->
  <main class="flex-1 flex items-center justify-center px-4 py-12">
    <div class="w-full max-w-md">
      <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">
        <div class="text-center mb-8">
          <div class="w-16 h-16 bg-cyan-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
            </svg>
          </div>
          <h1 class="text-2xl font-bold text-gray-900">Create Account</h1>
          <p class="text-gray-500 mt-2">Join us and start booking</p>
        </div>
        

        <form action="{{ route('register') }}" method="post" class="space-y-5">
          @csrf
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
            <input
              type="text"
              id="name"
              name="name"
              required
              placeholder="John Smith"
              class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
            >
          </div>

          

          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
            <input
              type="email"
              id="email"
              name="email"
              required
              placeholder="you@example.com"
              class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
            >
          </div>

          {{-- <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
            <input
              type="tel"
              id="phone"
              name="phone"
              required
              placeholder="+1 (555) 000-0000"
              class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
            >
          </div> --}}

          <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
            <div class="relative">
              <input
                type="password"
                id="password"
                name="password"
                required
                placeholder="Create a password"
                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
              >
              <button type="button" class="toggle-password absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
              </button>
            </div>
            <p class="mt-1.5 text-xs text-gray-500">Minimum 8 characters</p>
          </div>

          <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
            <div class="relative">
              <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                required
                placeholder="Confirm your password"
                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
              >
              <button type="button" class="toggle-password absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
              </button>
            </div>
          </div>

          <div>
            <label for="adminCode" class="block text-sm font-medium text-gray-700 mb-2">Admin Code</label>
            <input
              type="text"
              id="adminCode"
              name="adminCode"
              placeholder="admin0000"
              class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
            >
          </div>

          <div class="flex items-start space-x-3">
            <input type="checkbox" id="terms" name="terms"  class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary mt-0.5">
            <label for="terms" class="text-sm text-gray-600">
              I agree to the <a href="#" class="text-primary hover:underline">Terms of Service</a> and <a href="#" class="text-primary hover:underline">Privacy Policy</a>
            </label>
          </div>

          <button
            type="submit"
            class="w-full bg-primary hover:bg-primary-dark text-white py-3.5 rounded-xl font-semibold transition-colors"
          >
            Create Account
          </button>
        </form>

        <div class="mt-6 text-center">
          <p class="text-gray-500 text-sm">
            Already have an account?
            <a href="login.html" class="text-primary font-medium hover:underline">Sign in</a>
          </p>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t border-gray-100 py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <p class="text-sm text-gray-500">2024 StayEasy. All rights reserved.</p>
    </div>
  </footer>

  <script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');

    mobileMenuBtn.addEventListener('click', () => {
      const isOpen = !mobileMenu.classList.contains('hidden');
      if (isOpen) {
        mobileMenu.classList.add('hidden');
        menuIcon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
      } else {
        mobileMenu.classList.remove('hidden');
        menuIcon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
      }
    });

    document.querySelectorAll('.toggle-password').forEach(btn => {
      btn.addEventListener('click', () => {
        const input = btn.previousElementSibling;
        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
        input.setAttribute('type', type);
      });
    });
  </script>
  
@endsection