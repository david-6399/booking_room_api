<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <a href="/" class="flex items-center space-x-2">
          <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
          </div>
          <span class="text-xl font-bold text-gray-900">StayEasy</span>
        </a>

        <div class="hidden md:flex items-center space-x-8">
          <a href="/" class="text-gray-600 hover:text-primary transition-colors">Home</a>
          <a href="/rooms" class="text-gray-600 hover:text-primary transition-colors">Rooms</a>
          <a href="/hostels" class="text-gray-600 hover:text-primary transition-colors">Hostels</a>
        </div>
        @auth
            <div class="hidden md:flex items-center space-x-4">
                <a href="/reister" class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-lg font-medium transition-colors">
                    My Profile
                </a>
                <a href="{{ route('admin.home', $current) }}" class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-lg font-medium transition-colors">
                    Dashboard
                </a>
                <a href="{{ route('logout') }}" class="text-primary font-medium">Log Out</a>
            </div>
            @else
            <div class="hidden md:flex items-center space-x-4">
                {{-- <a href="/login" class="text-primary font-medium">Book Now</a>
                <a href="/reister" class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-lg font-medium transition-colors">
                    Register
                </a> --}}
                <a href="/rooms" class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-lg font-medium transition-colors">
                    Book Now
                </a> 
            </div>
        @endauth

        <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
          <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>

      <div id="mobile-menu" class="hidden md:hidden pb-4">
        <div class="flex flex-col space-y-3">
          <a href="index.html" class="text-gray-600 hover:text-primary transition-colors py-2">Home</a>
          <a href="rooms.html" class="text-gray-600 hover:text-primary transition-colors py-2">Rooms</a>
          <a href="contact.html" class="text-gray-600 hover:text-primary transition-colors py-2">Contact</a>
          <div class="pt-3 border-t border-gray-100 space-y-2">
            <a href="login.html" class="block text-primary font-medium py-2">Login</a>
            <a href="register.html" class="block bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-lg font-medium transition-colors text-center">
              Register
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>