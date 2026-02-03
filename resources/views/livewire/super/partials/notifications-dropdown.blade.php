 <div>
     
     <!-- Notification Button -->
     <button id="notif-btn" class="relative p-2 rounded-full hover:bg-gray-100 transition focus:outline-none">
    
         <!-- Bell Icon -->
         <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341 C7.67 6.165 6 8.388 6 11v3.159 c0 .538-.214 1.055-.595 1.436L4 17h5m6 0 a3 3 0 11-6 0h6z" />
         </svg>
    
         <!-- Unread Badge -->
         @if (auth()->user()->unreadNotifications->count())
         <span
             class="absolute -top-1 -right-1 bg-red-500 text-white text-xs w-5 h-5 flex items-center justify-center rounded-full">
             {{ auth()->user()->unreadNotifications->count() }} 
         </span>
         @endif
     </button>
    
     <div id="notif-dropdown" class="hidden absolute right-0 mt-2 w-80 bg-white rounded-xl shadow-lg border border-gray-200 z-50">
    
         <div class="p-4 border-b border-gray-100 flex justify-between">
             <h3 class="font-semibold text-gray-900">Notifications</h3>
             <form method="POST">
                 @csrf
                 <button class="text-xs text-primary hover:underline">
                     Mark all read
                 </button>
             </form>
         </div>
    
         <div class="max-h-96 overflow-y-auto">
             @forelse(auth()->user()->notifications as $notification)
                 <div class="px-4 py-2 border-b cursor-pointer
                    {{ $notification->read_at ? 'hover:bg-gray-50' : 'bg-cyan-50' }}">
    
                     <div class="flex space-x-3">
                         <div
                             class="w-2 h-2 mt-2 rounded-full
                            {{ $notification->read_at ? 'bg-transparent' : 'bg-primary' }}">
                         </div>
    
                         <div class="flex-1">
                             <p class="text-sm font-medium text-gray-900">
                                 Hostel Request
                             </p>
    
                             <p class="text-xs text-gray-600">
                                 New hostel request submitted
                             </p>
    
                             <p class="text-xs text-gray-400 mt-1">
                                 {{ $notification->created_at->diffForHumans() }}
                             </p>
                         </div>
                     </div>
                 </div>
    
             @empty
                 <p class="p-4 text-sm text-gray-500 text-center">
                     No notifications
                 </p>
             @endforelse
         </div>
    
         <div class="p-3 border-t text-center">
             <a href="#" class="text-sm text-primary hover:underline">
                 View all notifications
             </a>
         </div>
     </div>

 </div>


 <script>
    
        const notifBtn = document.getElementById('notif-btn');
        const notifDropdown = document.getElementById('notif-dropdown');

        notifBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            notifDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', () => {
            notifDropdown.classList.add('hidden');
        });
 </script>