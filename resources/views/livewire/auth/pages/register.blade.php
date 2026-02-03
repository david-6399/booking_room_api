@extends('livewire.auth.layouts.app')
@section('content')
    <!-- Main Content -->
    <main class="flex-1 flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-lg">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-4">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 bg-cyan-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold text-gray-900">Create Account</h1>
                    <p class="text-gray-500 mt-2">Join us and start booking</p>
                </div>
                @if ($errors->any())
                    <div class="mb-4 px-4 bg-red-50 border border-red-200 rounded-xl p-4">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                            </svg>
                            <div class="flex-1">
                                <h3 class="text-sm font-medium text-red-800">Please fix the following errors:</h3>
                                <ul class="mt-2 list-disc list-inside space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <li class="text-sm text-red-700">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                <form action="{{ route('register') }}" method="post" class="space-y-5 ">
                    @csrf
                    <div class="px-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                        <input type="text" id="name" name="name" required placeholder="John Smith"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400">
                    </div>



                    <div class="px-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" required placeholder="you@example.com"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400">
                    </div>

                    {{-- <div class="px-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required placeholder="+1 (555) 000-0000"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400">
                    </div> --}}

                    <div class="px-4">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" required placeholder="Create a password"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400">
                            <button type="button"
                                class="toggle-password absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                        <p class="mt-1.5 text-xs text-gray-500">Minimum 8 characters</p>
                    </div>

                    <div class="px-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm
                            Password</label>
                        <div class="relative">
                            <input type="password" id="password_confirmation" name="password_confirmation" required
                                placeholder="Confirm your password"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400">
                            <button type="button"
                                class="toggle-password absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- <div class="px-4">
                        <label for="adminCode" class="block text-sm font-medium text-gray-700 mb-2">Admin Code</label>
                        <input type="text" id="adminCode" name="adminCode" placeholder="admin0000"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400">
                    </div> --}}

                    <input type="hidden" name="has_details" id="hasDetails" value="0">

                    <!-- Expandable Form -->
                    <div id="expandForm"
                        class="overflow-hidden max-h-0 transition-all duration-500 ease-in-out space-y-5 px-4 w-full">

                        <div>
                            <label for="hostelName" class="block text-sm font-medium text-gray-700 mb-2">Hostel Name</label>
                            <input type="text" id="hostelName" placeholder="IBIZ"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400">
                        </div>
                        <div>
                            <label for="hostelSlug" class="block text-sm font-medium text-gray-700 mb-2">Hostel
                                Slug</label>
                            <input type="text" id="hostelSlug" placeholder="ibiz"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400">
                        </div>
                        <div>
                            <label for="hostelLocation"
                                class="block text-sm font-medium text-gray-700 mb-2">Location</label>
                            <input type="text" id="hostelLocation" placeholder="Oran"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400">
                        </div>
                        <div class="md:pb-4">
                            <label for="hostelPhone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                            <input type="text" id="hostelPhone" placeholder="+213 111 222 333"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400">
                        </div>
                    </div>


                    <div class="flex items-start space-x-3">
                        <input type="checkbox" id="terms" name="terms"
                            class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary mt-0.5">
                        <label for="terms" class="text-sm text-gray-600">
                            I agree to the <a href="#" class="text-primary hover:underline">Terms of Service</a> and
                            <a href="#" class="text-primary hover:underline">Privacy Policy</a>
                        </label>
                    </div>


                    <button type="submit"
                        class="w-full bg-primary hover:bg-primary-dark text-white py-3.5 rounded-xl font-semibold transition-colors">
                        Create Account
                    </button>
                </form>
                <button id="toggleBtn"
                    class="w-full bg-blue-600 text-white py-3 rounded-xl font-semibold hover:bg-blue-700 transition mt-6">
                    I Have Hostel
                </button>

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

        const toggleBtn = document.getElementById('toggleBtn');
        const expandForm = document.getElementById('expandForm');
        const hasDetails = document.getElementById('hasDetails');
        const inputs = expandForm.querySelectorAll('input');

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



        let isFormOpen = false;

        toggleBtn.addEventListener('click', () => {

            if (!isFormOpen) {
                expandForm.style.maxHeight = expandForm.scrollHeight + 'px';
                toggleBtn.textContent = 'Close Form';
                hasDetails.value = 1;
                inputs.forEach(input => input.setAttribute('required', 'required'));
                document.getElementById('hostelName').setAttribute('name', 'hostel[name]');
                document.getElementById('hostelSlug').setAttribute('name', 'hostel[slug]');
                document.getElementById('hostelLocation').setAttribute('name', 'hostel[location]');
                document.getElementById('hostelPhone').setAttribute('name', 'hostel[phone]');
                hasDetails.value = 1;
            } else {
                expandForm.style.maxHeight = '0';
                toggleBtn.textContent = 'Add Details';
                hasDetails.value = 0;
                inputs.forEach(input => {
                    input.removeAttribute('required');
                    input.value = '';
                    document.getElementById('hostelName').removeAttribute('name');
                    document.getElementById('hostelSlug').removeAttribute('name');
                    document.getElementById('hostelLocation').removeAttribute('name');
                    document.getElementById('hostelPhone').removeAttribute('name');
                });
            }
            isFormOpen = !isFormOpen;
        });
    </script>
@endsection
