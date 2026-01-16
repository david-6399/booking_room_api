    <div>
        <!-- Modal -->
        <div id="editChapters" class="fixed inset-0 bg-black/60 z-[9999] hidden flex items-center justify-center p-4"
            wire:ignore.self>

            <div
                class="bg-white rounded-xl p-6 w-full sm:w-[90%] 
                    md:w-[40%] max-h-[80%] shadow-xl overflow-y-auto relative">

                <!-- Close -->
                <button onclick="closePopup()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                    ✕
                </button>

               

                <form wire:submit='login' method="post" class="space-y-4">

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" required placeholder="you@example.com" wire:model="email"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" required
                                placeholder="Enter your password"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400" wire:model="password">
                            <button type="button" id="toggle-password"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" name="remember"
                                class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary">
                            <span class="text-sm text-gray-600">Remember me</span>
                        </label>
                        <a href="#" class="text-sm text-primary hover:underline">Forgot password?</a>
                    </div>
                     <div class="mt-6 text-center">
          <p class="text-gray-500 text-sm">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-primary font-medium hover:underline">Create one</a>
          </p>
        </div>
                    <button type="submit"
                        class="w-full bg-primary hover:bg-primary-dark text-white py-3.5 rounded-xl font-semibold transition-colors">
                        Sign In
                    </button>
                </form>

            </div>
        </div>

        <!-- JS -->
        <script>
            function openPopup() {
                document.getElementById('editChapters').classList.remove('hidden');
            }

            function closePopup() {
                document.getElementById('editChapters').classList.add('hidden');
            }

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closePopup();
            });

            document.addEventListener('login-success', (e) => {
                closePopup();
            });
            
        </script>
       
    </div>
