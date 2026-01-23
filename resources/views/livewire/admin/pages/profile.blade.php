<div>
    <main class="p-4 sm:p-6 lg:p-8 max-w-full">

        <div class="grid md:grid-cols-2 gap-6 mb-6">

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 mb-6">
                <div
                    class="flex flex-col sm:flex-row items-center sm:items-start gap-6 mb-8 pb-8 border-b border-gray-100">
                    <div class="relative">
                        <div class="w-24 h-24 bg-primary rounded-2xl flex items-center justify-center">
                            <span class="text-3xl text-white font-bold">{{ getInitials($adminInfo['name']) }}</span>
                        </div>
                        {{-- <button class="absolute -bottom-2 -right-2 w-8 h-8 bg-white border border-gray-200 rounded-lg flex items-center justify-center shadow-sm hover:bg-gray-50">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button> --}}
                    </div>
                    <div class="text-center sm:text-left">
                        <h2 class="text-xl font-bold text-gray-900">Admin - {{ $adminInfo['name'] }}</h2>
                        <p class="text-gray-500">{{ $adminInfo['email'] }}</p>
                        <p class="text-sm text-gray-400 mt-1">Administrator</p>
                    </div>
                </div>

                <form class="space-y-6" wire:submit='updateName()'>
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First
                                Name</label>
                            <input type="text" id="first_name" name="first_name" value="Admin"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                                wire:model='adminInfo.name'>
                        </div>
                        {{-- <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                        <input type="text" id="last_name" name="last_name" value="User"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all" >
                    </div> --}}
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" value="admin@stayeasy.com" disabled
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                            wire:model='adminInfo.email'>
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone" value="+1 (555) 123-4567" disabled
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                            wire:model='adminInfo.phone'>
                    </div>

                    <div class="flex justify-end pt-4">
                        <button type="submit"
                            class="bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-xl font-semibold transition-colors">
                            Update Profile
                        </button>
                    </div>
                </form>
            </div>

            <div class="bg-white flex flex-col justify-between rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
                <div class="flex items-center justify-between">
                    <div class="h-64 sm:h-80 md:h-96 w-full rounded-lg">
                        <div class="h-64 sm:h-80 md:h-96 border-2 w-full rounded-lg flex items-center justify-center">
                            {{-- Stored image --}}
                            @if ($coverImage)
                            <img src="{{ $coverImage->temporaryUrl() }}"
                            class="w-full h-full object-cover rounded-lg">
                            @elseif($cover)
                            <img src="{{ $cover }}" class="w-full h-full object-cover rounded-lg" >
                            {{-- Preview before upload --}}
                            @endif
                        </div>
                        <button disabled wire:loading wire:target='coverImage'
                            class="text-gray-700 px-5 py-2.5 rounded-lg font-medium flex items-center space-x-2 opacity-75 cursor-not-allowed">
                            <svg class="animate-spin h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                            <span>Loading ...</span>
                        </button>
                    </div>
                </div>
                        <form wire:submit.prevent='saveCoverImage()' class="flex justify-between items-center">
                            <input type="file" wire:model='coverImage'>
                            <div class="flex justify-end pt-4">

                                <button type="submit"
                                class="bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-xl font-semibold transition-colors">
                                Update Profile
                            </button>
                        </div>
                        </form>
            </div>

            <!-- Change Password -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-6">Change Password</h3>

                <form class="space-y-6" wire:submit='updatePassword'>
                    <div>
                        <label for="current_password" class="block text-sm font-medium text-gray-700 mb-2">Current
                            Password</label>
                        <input type="password" id="current_password" name="current_password"
                            placeholder="Enter current password"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
                            wire:model='currentPassword'>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label for="new_password" class="block text-sm font-medium text-gray-700 mb-2">New
                                Password</label>
                            <input type="password" id="new_password" name="new_password"
                                placeholder="Enter new password"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
                                wire:model='newPassword'>
                        </div>
                        <div>
                            <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-2">Confirm
                                Password</label>
                            <input type="password" id="confirm_password" name="confirm_password"
                                placeholder="Confirm new password"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
                                wire:model='newPassword_confirmation'>
                        </div>
                    </div>

                    <div class="flex justify-end pt-4">
                        <button type="submit"
                            class="bg-gray-900 hover:bg-gray-800 text-white px-6 py-3 rounded-xl font-semibold transition-colors">
                            Change Password
                        </button>
                    </div>
                </form>
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
