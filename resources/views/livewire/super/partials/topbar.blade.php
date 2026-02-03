

<div class="relative ">
    
    <button id="user-menu-btn" class="flex items-center space-x-3 p-2 rounded-xl hover:bg-gray-100 transition-colors">
        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
            <span class="text-white font-semibold">AD</span>
        </div>
        <div class="hidden sm:block text-left">
            <p class="text-sm font-medium text-gray-900">Admin User</p>
            <p class="text-xs text-gray-500">admin@stayeasy.com</p>
        </div>
        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div id="user-menu"
        class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-gray-100 py-2 hidden">
        <a href="{{ route('super.dashboard.profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Profile</a>
        <a href="{{ route('super.dashboard.setting') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Settings</a>
        <div class="border-t border-gray-100 my-1"></div>
        
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-50">Logout</button>
        </form>
    </div>
</div>
