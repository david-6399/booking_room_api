<div>
    <main class="p-4 sm:p-6 lg:p-8 max-w-4xl">
        <!-- Hostel Information -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 mb-6">
          <h3 class="text-lg font-semibold text-gray-900 mb-6">Hostel Information</h3>

          <form class="space-y-6">
            <div>
              <label for="hostel_name" class="block text-sm font-medium text-gray-700 mb-2">Hostel Name</label>
              <input
                type="text"
                id="hostel_name"
                name="hostel_name"
                value="StayEasy Hostel"
                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
              >
            </div>

            <div class="grid sm:grid-cols-2 gap-6">
              <div>
                <label for="contact_email" class="block text-sm font-medium text-gray-700 mb-2">Contact Email</label>
                <input
                  type="email"
                  id="contact_email"
                  name="contact_email"
                  value="hello@stayeasy.com"
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                >
              </div>
              <div>
                <label for="contact_phone" class="block text-sm font-medium text-gray-700 mb-2">Contact Phone</label>
                <input
                  type="tel"
                  id="contact_phone"
                  name="contact_phone"
                  value="+1 (555) 123-4567"
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                >
              </div>
            </div>

            <div>
              <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Address</label>
              <textarea
                id="address"
                name="address"
                rows="2"
                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all resize-none"
              >123 Hostel Street, Downtown, City 10001</textarea>
            </div>

            <div class="flex justify-end pt-4">
              <button
                type="submit"
                class="bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-xl font-semibold transition-colors"
              >
                Save Changes
              </button>
            </div>
          </form>
        </div>

        <!-- Booking Rules -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 mb-6">
          <h3 class="text-lg font-semibold text-gray-900 mb-6">Booking Rules</h3>

          <form class="space-y-6">
            <div class="grid sm:grid-cols-2 gap-6">
              <div>
                <label for="checkin_time" class="block text-sm font-medium text-gray-700 mb-2">Check-in Time</label>
                <input
                  type="time"
                  id="checkin_time"
                  name="checkin_time"
                  value="14:00"
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                >
              </div>
              <div>
                <label for="checkout_time" class="block text-sm font-medium text-gray-700 mb-2">Check-out Time</label>
                <input
                  type="time"
                  id="checkout_time"
                  name="checkout_time"
                  value="11:00"
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                >
              </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-6">
              <div>
                <label for="min_stay" class="block text-sm font-medium text-gray-700 mb-2">Minimum Stay (nights)</label>
                <input
                  type="number"
                  id="min_stay"
                  name="min_stay"
                  value="1"
                  min="1"
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                >
              </div>
              <div>
                <label for="max_stay" class="block text-sm font-medium text-gray-700 mb-2">Maximum Stay (nights)</label>
                <input
                  type="number"
                  id="max_stay"
                  name="max_stay"
                  value="30"
                  min="1"
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                >
              </div>
            </div>

            <div>
              <label for="cancellation" class="block text-sm font-medium text-gray-700 mb-2">Cancellation Policy</label>
              <div class="relative">
                <select
                  id="cancellation"
                  name="cancellation"
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all appearance-none bg-white cursor-pointer"
                >
                  <option value="flexible">Flexible - Free cancellation up to 24 hours</option>
                  <option value="moderate">Moderate - Free cancellation up to 48 hours</option>
                  <option value="strict">Strict - Free cancellation up to 7 days</option>
                  <option value="non-refundable">Non-refundable</option>
                </select>
                <svg class="w-5 h-5 text-gray-400 absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </div>
            </div>

            <div class="flex justify-end pt-4">
              <button
                type="submit"
                class="bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-xl font-semibold transition-colors"
              >
                Save Rules
              </button>
            </div>
          </form>
        </div>

        <!-- Notifications -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
          <h3 class="text-lg font-semibold text-gray-900 mb-6">Notifications</h3>

          <div class="space-y-4">
            <label class="flex items-center justify-between p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 transition-colors">
              <div>
                <p class="font-medium text-gray-900">Email notifications</p>
                <p class="text-sm text-gray-500">Receive booking confirmations via email</p>
              </div>
              <input type="checkbox" checked class="w-5 h-5 rounded text-primary focus:ring-primary">
            </label>

            <label class="flex items-center justify-between p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 transition-colors">
              <div>
                <p class="font-medium text-gray-900">New booking alerts</p>
                <p class="text-sm text-gray-500">Get notified when a new booking is made</p>
              </div>
              <input type="checkbox" checked class="w-5 h-5 rounded text-primary focus:ring-primary">
            </label>

            <label class="flex items-center justify-between p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 transition-colors">
              <div>
                <p class="font-medium text-gray-900">Cancellation alerts</p>
                <p class="text-sm text-gray-500">Get notified when a booking is cancelled</p>
              </div>
              <input type="checkbox" checked class="w-5 h-5 rounded text-primary focus:ring-primary">
            </label>

            <label class="flex items-center justify-between p-4 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 transition-colors">
              <div>
                <p class="font-medium text-gray-900">Weekly reports</p>
                <p class="text-sm text-gray-500">Receive weekly summary reports</p>
              </div>
              <input type="checkbox" class="w-5 h-5 rounded text-primary focus:ring-primary">
            </label>
          </div>
        </div>
      </main>


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
