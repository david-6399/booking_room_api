<!-- Sidebar -->
    <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-900 transform -translate-x-full lg:translate-x-0 transition-transform duration-300">
      <div class="flex flex-col h-full">
        <!-- Logo -->
        <div class="flex items-center justify-between h-16 px-6 border-b border-gray-800">
          <a href="../index.html" class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
              </svg>
            </div>
            <span class="text-lg font-bold text-white">StayEasy</span>
          </a>
          <button id="close-sidebar" class="lg:hidden p-1 text-gray-400 hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
          <a href="{{ route('user.dashboard.home') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl bg-primary text-white">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            <span class="font-medium">Dashboard</span>
          </a>
          <a href="{{ route('user.dashboard.room') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-400 hover:bg-gray-800 hover:text-white transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
            <span class="font-medium">Rooms</span>
          </a>
          <a href="{{ route('user.dashboard.booking') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-400 hover:bg-gray-800 hover:text-white transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <span class="font-medium">Bookings</span>
          </a>
          <a href="{{ route('user.dashboard.profil') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-400 hover:bg-gray-800 hover:text-white transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
            <span class="font-medium">Profile</span>
          </a>
          
        </nav>

        <!-- User Info -->
         <div class="p-4 border-t border-gray-800">
             <form action="{{ route('logout') }}" method="post">
                 @csrf
                 <button
                     class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-400 hover:bg-gray-800 hover:text-white transition-colors">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                     </svg>
                     <span class="font-medium">Logout</span>
                 </button>
             </form>
         </div>
      </div>
    </aside>
    

    <!-- Overlay -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden"></div>
