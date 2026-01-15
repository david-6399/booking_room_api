<div>
  
    <div class="flex-1 lg:ml-64">
      <header class="sticky top-0 z-30 bg-white shadow-sm">
        <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
          <div class="flex items-center space-x-4">
            <button id="open-sidebar" class="lg:hidden p-2 rounded-lg hover:bg-gray-100">
              <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
              </svg>
            </button>
            <h1 class="text-xl font-semibold text-gray-900">Profile</h1>
          </div>

          <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
              <span class="text-white font-semibold">AD</span>
            </div>
          </div>
        </div>
      </header>

      <main class="p-4 sm:p-6 lg:p-8 max-w-4xl">
        <!-- Profile Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 mb-6">
          <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6 mb-8 pb-8 border-b border-gray-100">
            <div class="relative">
              <div class="w-24 h-24 bg-primary rounded-2xl flex items-center justify-center">
                <span class="text-3xl text-white font-bold">AD</span>
              </div>
              <button class="absolute -bottom-2 -right-2 w-8 h-8 bg-white border border-gray-200 rounded-lg flex items-center justify-center shadow-sm hover:bg-gray-50">
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
              </button>
            </div>
            <div class="text-center sm:text-left">
              <h2 class="text-xl font-bold text-gray-900">Admin User</h2>
              <p class="text-gray-500">admin@stayeasy.com</p>
              <p class="text-sm text-gray-400 mt-1">Administrator</p>
            </div>
          </div>

          <form class="space-y-6">
            <div class="grid sm:grid-cols-2 gap-6">
              <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                <input
                  type="text"
                  id="first_name"
                  name="first_name"
                  value="Admin"
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                >
              </div>
              <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                <input
                  type="text"
                  id="last_name"
                  name="last_name"
                  value="User"
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                >
              </div>
            </div>

            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
              <input
                type="email"
                id="email"
                name="email"
                value="admin@stayeasy.com"
                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
              >
            </div>

            <div>
              <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
              <input
                type="tel"
                id="phone"
                name="phone"
                value="+1 (555) 123-4567"
                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
              >
            </div>

            <div class="flex justify-end pt-4">
              <button
                type="submit"
                class="bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-xl font-semibold transition-colors"
              >
                Update Profile
              </button>
            </div>
          </form>
        </div>

        <!-- Change Password -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
          <h3 class="text-lg font-semibold text-gray-900 mb-6">Change Password</h3>

          <form class="space-y-6">
            <div>
              <label for="current_password" class="block text-sm font-medium text-gray-700 mb-2">Current Password</label>
              <input
                type="password"
                id="current_password"
                name="current_password"
                placeholder="Enter current password"
                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
              >
            </div>

            <div class="grid sm:grid-cols-2 gap-6">
              <div>
                <label for="new_password" class="block text-sm font-medium text-gray-700 mb-2">New Password</label>
                <input
                  type="password"
                  id="new_password"
                  name="new_password"
                  placeholder="Enter new password"
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
                >
              </div>
              <div>
                <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                <input
                  type="password"
                  id="confirm_password"
                  name="confirm_password"
                  placeholder="Confirm new password"
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
                >
              </div>
            </div>

            <div class="flex justify-end pt-4">
              <button
                type="submit"
                class="bg-gray-900 hover:bg-gray-800 text-white px-6 py-3 rounded-xl font-semibold transition-colors"
              >
                Change Password
              </button>
            </div>
          </form>
        </div>
      </main>
    </div>
  

  <script>
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const openSidebar = document.getElementById('open-sidebar');
    const closeSidebar = document.getElementById('close-sidebar');

    function toggleSidebar(open) {
      if (open) {
        sidebar.classList.remove('-translate-x-full');
        sidebarOverlay.classList.remove('hidden');
      } else {
        sidebar.classList.add('-translate-x-full');
        sidebarOverlay.classList.add('hidden');
      }
    }

    openSidebar.addEventListener('click', () => toggleSidebar(true));
    closeSidebar.addEventListener('click', () => toggleSidebar(false));
    sidebarOverlay.addEventListener('click', () => toggleSidebar(false));
  </script>
</div>