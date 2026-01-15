  <!-- Navbar -->
  <nav class="sticky top-0 z-50 bg-white shadow-sm">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between items-center h-16">
              <a href="/" class="flex items-center space-x-2">
                  <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
                      <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg>
                  </div>
                  <span class="text-xl font-bold text-gray-900">StayEasy</span>
              </a>

              <div class="hidden md:flex items-center space-x-8">
                  <a href="{{ route('user.home') }}" class="text-gray-600 hover:text-primary transition-colors">Home</a>
                  <a href="{{ route('user.rooms') }}"
                      class="text-gray-600 hover:text-primary transition-colors">Rooms</a>
                  <a href="/contact" class="text-gray-600 hover:text-primary transition-colors">Contact</a>
                  @auth
                  @if (auth()->user()->hasRole(['admin']))
                      <a href="{{ route('admin.dashboard.home', ['id' => auth()->user()->id, 'slug' => auth()->user()->hostel->slug]) }}"
                          class="text-gray-600 hover:text-primary transition-colors">Dashboard</a>
                  @elseif(auth()->user()->hasRole(['super_admin']))
                      <a href="{{ route('super.dashboard.home') }}"
                          class="text-gray-600 hover:text-primary transition-colors">Dashboard</a>
                  @endif
                  @endauth
              </div>

              <div class="hidden md:flex items-center space-x-4">
                  @auth
                      <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <button class="text-gray-600 hover:text-primary font-medium transition-colors">Logout</button>
                      </form>
                  @else
                      <a href="{{ route('login') }}"
                          class="text-gray-600 hover:text-primary font-medium transition-colors">Sign In</a>
                  @endauth
                  <a href="{{ route('user.rooms') }}"
                      class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-lg font-medium transition-colors">
                      Book Now
                  </a>
              </div>

              <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                  <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
              </button>
          </div>

          <div id="mobile-menu" class="hidden md:hidden pb-4">
              <div class="flex flex-col space-y-3">
                  <a href="{{ route('user.home') }}"
                      class="text-gray-600 hover:text-primary transition-colors py-2">Home</a>
                  <a href="{{ route('user.rooms') }}"
                      class="text-gray-600 hover:text-primary transition-colors py-2">Rooms</a>
                  <a href="/contact" class="text-gray-600 hover:text-primary transition-colors py-2">Contact</a>
                  <a href="{{ route('login') }}" class="text-gray-600 hover:text-primary transition-colors py-2">Sign
                      In</a>
                  <a href="{{ route('user.rooms') }}"
                      class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-lg font-medium transition-colors text-center mt-2">
                      Book Now
                  </a>
              </div>
          </div>
      </div>
  </nav>
