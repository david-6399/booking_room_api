<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI Components Library - StayEasy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0891b2',
                        'primary-dark': '#0e7490',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 p-8">
    <!-- Button -->
    <button id="openModal" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
        Login to Continue
    </button>

    <!-- Modal Backdrop -->
    <div id="modalBackdrop"
        class="fixed inset-0 bg-black/50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
        <!-- Modal -->
        <div id="modalContent"
            class="bg-white rounded-xl shadow-xl w-full max-w-md p-6 transform scale-95 transition-transform duration-300">
            <h2 class="text-xl font-bold mb-4">Login</h2>

            <form class="space-y-4">
                <input type="email" placeholder="Email"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

                <input type="password" placeholder="Password"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                    Login
                </button>
            </form>

            <button id="closeModal" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                ✕
            </button>
        </div>
    </div>

    <!-- JS -->
    <script>
        const openBtn = document.getElementById('openModal');
        const closeBtn = document.getElementById('closeModal');
        const backdrop = document.getElementById('modalBackdrop');
        const modal = document.getElementById('modalContent');

        function openModal() {
            backdrop.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.remove('scale-95');
            modal.classList.add('scale-100');
        }

        function closeModal() {
            backdrop.classList.add('opacity-0', 'pointer-events-none');
            modal.classList.add('scale-95');
            modal.classList.remove('scale-100');
        }

        openBtn.addEventListener('click', openModal);
        closeBtn.addEventListener('click', closeModal);

        backdrop.addEventListener('click', (e) => {
            if (e.target === backdrop) closeModal();
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeModal();
        });
    </script>

    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">StayEasy UI Components</h1>
        <p class="text-gray-600 mb-8">Copy and paste these components into your pages</p>

        <!-- ========================================
         1. NOTIFICATION BELL (NAVBAR)
         Insert into navbar next to user menu
    ========================================= -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Notification Bell (Navbar)</h2>
            <p class="text-sm text-gray-600 mb-4">Insert this into the navbar, next to the Book Now or Sign In buttons
            </p>

            <div class="bg-white p-6 rounded-xl border border-gray-200">
                <div class="relative inline-block">
                    <button
                        class="relative hidden p-2 text-gray-600 hover:text-primary hover:bg-gray-100 rounded-lg transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                        <span
                            class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">3</span>
                    </button>

                    <!-- Notification Dropdown Panel -->
                    <div class="absolute right-0 mt-2 w-80 bg-white rounded-xl shadow-lg border border-gray-200 z-50">
                        <div class="p-4 border-b border-gray-100">
                            <div class="flex items-center justify-between">
                                <h3 class="font-semibold text-gray-900">Notifications</h3>
                                <span
                                    class="text-xs text-primary hover:text-primary-dark cursor-pointer font-medium">Mark
                                    all read</span>
                            </div>
                        </div>

                        <div class="max-h-96 overflow-y-auto">
                            <!-- Unread Notification -->
                            <div class="p-4 hover:bg-gray-50 cursor-pointer border-b border-gray-100 bg-cyan-50">
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900">New booking confirmed</p>
                                        <p class="text-xs text-gray-600 mt-1">Room 201 - Private Double has been booked
                                        </p>
                                        <p class="text-xs text-gray-400 mt-1">2 minutes ago</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Read Notification -->
                            <div class="p-4 hover:bg-gray-50 cursor-pointer border-b border-gray-100">
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-transparent rounded-full mt-2 flex-shrink-0"></div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-700">Payment received</p>
                                        <p class="text-xs text-gray-600 mt-1">$145.00 payment for booking #1234</p>
                                        <p class="text-xs text-gray-400 mt-1">1 hour ago</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Notification Item -->
                            <div class="p-4 hover:bg-gray-50 cursor-pointer border-b border-gray-100">
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-transparent rounded-full mt-2 flex-shrink-0"></div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-700">Review posted</p>
                                        <p class="text-xs text-gray-600 mt-1">New 5-star review for Private Double Room
                                        </p>
                                        <p class="text-xs text-gray-400 mt-1">3 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 border-t border-gray-100 text-center">
                            <a href="#" class="text-sm text-primary hover:text-primary-dark font-medium">View all
                                notifications</a>
                        </div>
                    </div>

                    <!-- Empty State Alternative -->
                    <div
                        class="absolute right-0 mt-2 w-80 bg-white rounded-xl shadow-lg border border-gray-200 z-50 hidden">
                        <div class="p-4 border-b border-gray-100">
                            <h3 class="font-semibold text-gray-900">Notifications</h3>
                        </div>
                        <div class="p-8 text-center">
                            <div
                                class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </div>
                            <p class="text-gray-600 text-sm">No notifications yet</p>
                            <p class="text-gray-400 text-xs mt-1">We'll notify you when something arrives</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================
         2. NOTIFICATION TOASTS
         Place at bottom of body, before closing tag
    ========================================= -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">2. Notification Toasts</h2>
            <p class="text-sm text-gray-600 mb-4">Fixed position toasts - place in a container at top-right of viewport
            </p>

            <div class="space-y-4">
                <!-- Success Toast -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-4 max-w-sm">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-900">Booking confirmed!</p>
                            <p class="text-xs text-gray-600 mt-0.5">Your reservation has been successfully created.</p>
                        </div>
                        <button class="text-gray-400 hover:text-gray-600 flex-shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Error Toast -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-4 max-w-sm">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-900">Payment failed</p>
                            <p class="text-xs text-gray-600 mt-0.5">Unable to process payment. Please try again.</p>
                        </div>
                        <button class="text-gray-400 hover:text-gray-600 flex-shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Warning Toast -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-4 max-w-sm">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-900">Limited availability</p>
                            <p class="text-xs text-gray-600 mt-0.5">Only 2 rooms left for selected dates.</p>
                        </div>
                        <button class="text-gray-400 hover:text-gray-600 flex-shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Info Toast -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-4 max-w-sm">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-900">Check-in reminder</p>
                            <p class="text-xs text-gray-600 mt-0.5">Your check-in is tomorrow at 2:00 PM.</p>
                        </div>
                        <button class="text-gray-400 hover:text-gray-600 flex-shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="mt-6 p-4 bg-gray-100 rounded-lg">
                <p class="text-xs text-gray-600 font-mono">
                    &lt;!-- Toast Container (Fixed Position) --&gt;<br>
                    &lt;div class="fixed top-4 right-4 z-50 space-y-3"&gt;<br>
                    &nbsp;&nbsp;&lt;!-- Insert toast components here --&gt;<br>
                    &lt;/div&gt;
                </p>
            </div>
        </section>

        <!-- ========================================
         3. IMAGE UPLOAD UI
    ========================================= -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">3. Image Upload Components</h2>

            <!-- Multiple Image Upload (Room Modal) -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-3">A. Multiple Image Upload (Room Modal)</h3>
                <p class="text-sm text-gray-600 mb-4">Insert into Create/Edit Room modal</p>

                <div class="bg-white p-6 rounded-xl border border-gray-200">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Room Images</label>

                    <!-- Upload Area -->
                    <div
                        class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center hover:border-primary transition-colors cursor-pointer">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mb-3">
                                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <p class="text-sm text-gray-600 mb-1">
                                <span class="text-primary font-medium">Click to upload</span> or drag and drop
                            </p>
                            <p class="text-xs text-gray-400">PNG, JPG up to 10MB (max 5 images)</p>
                        </div>
                    </div>

                    <!-- Image Preview Grid -->
                    <div class="grid grid-cols-5 gap-3 mt-4">
                        <div class="relative group">
                            <img src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=400"
                                alt="Preview" class="w-full h-20 object-cover rounded-lg">
                            <button
                                class="absolute top-1 right-1 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="relative group">
                            <img src="https://images.pexels.com/photos/1743231/pexels-photo-1743231.jpeg?auto=compress&cs=tinysrgb&w=400"
                                alt="Preview" class="w-full h-20 object-cover rounded-lg">
                            <button
                                class="absolute top-1 right-1 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="relative group">
                            <img src="https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=400"
                                alt="Preview" class="w-full h-20 object-cover rounded-lg">
                            <button
                                class="absolute top-1 right-1 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Image Upload (Hostel Modal) -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">B. Single Image Upload (Hostel Logo)</h3>
                <p class="text-sm text-gray-600 mb-4">Insert into Create/Edit Hostel modal</p>

                <div class="bg-white p-6 rounded-xl border border-gray-200">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Hostel Logo / Cover Image</label>

                    <!-- Upload Area with Preview -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-32 h-32 border-2 border-gray-200 rounded-xl overflow-hidden bg-gray-50">
                                <img src="https://images.pexels.com/photos/1838554/pexels-photo-1838554.jpeg?auto=compress&cs=tinysrgb&w=400"
                                    alt="Hostel" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="flex-1">
                            <div
                                class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-primary transition-colors cursor-pointer">
                                <div class="flex flex-col items-center">
                                    <div
                                        class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center mb-2">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <p class="text-sm text-gray-600">
                                        <span class="text-primary font-medium">Change image</span>
                                    </p>
                                    <p class="text-xs text-gray-400 mt-1">PNG, JPG up to 5MB</p>
                                </div>
                            </div>
                            <button class="text-red-600 hover:text-red-700 text-sm font-medium mt-2">Remove
                                image</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================
         4. LOADING STATES
    ========================================= -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">4. Loading States</h2>

            <div class="space-y-8">
                <!-- Button Loading -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">A. Button Loading States</h3>
                    <div class="bg-white p-6 rounded-xl border border-gray-200 flex items-center gap-4">
                        <button disabled
                            class="bg-primary text-white px-5 py-2.5 rounded-lg font-medium flex items-center space-x-2 opacity-75 cursor-not-allowed">
                            <svg class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                            <span>Saving...</span>
                        </button>

                        <button disabled
                            class="bg-gray-900 text-white px-5 py-2.5 rounded-lg font-medium flex items-center space-x-2 opacity-75 cursor-not-allowed">
                            <svg class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                            <span>Processing...</span>
                        </button>

                        <button disabled
                            class="border border-gray-200 text-gray-700 px-5 py-2.5 rounded-lg font-medium flex items-center space-x-2 opacity-75 cursor-not-allowed">
                            <svg class="animate-spin h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                            <span>Loading...</span>
                        </button>
                    </div>
                </div>

                <!-- Page Loading Spinner -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">B. Page Loading Spinner</h3>
                    <div
                        class="bg-white p-12 rounded-xl border border-gray-200 flex flex-col items-center justify-center">
                        <div class="animate-spin rounded-full h-12 w-12 border-4 border-gray-200 border-t-primary">
                        </div>
                        <p class="text-gray-600 mt-4">Loading...</p>
                    </div>
                </div>

                <!-- Modal Loading Overlay -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">C. Modal Loading Overlay</h3>
                    <div class="bg-white p-6 rounded-xl border border-gray-200 relative">
                        <div
                            class="absolute inset-0 bg-white/80 backdrop-blur-sm rounded-xl flex items-center justify-center z-10">
                            <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center">
                                <div
                                    class="animate-spin rounded-full h-10 w-10 border-4 border-gray-200 border-t-primary mb-3">
                                </div>
                                <p class="text-sm text-gray-600 font-medium">Processing your request...</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <input type="text" class="w-full px-4 py-3 border border-gray-200 rounded-xl"
                                placeholder="Room Name">
                            <input type="text" class="w-full px-4 py-3 border border-gray-200 rounded-xl"
                                placeholder="Price">
                        </div>
                    </div>
                </div>

                <!-- Skeleton Loaders -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">D. Skeleton Loaders</h3>

                    <p class="text-sm text-gray-600 mb-3">Room Card Skeleton</p>
                    <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 mb-6">
                        <div class="h-48 bg-gray-200 animate-pulse"></div>
                        <div class="p-5 space-y-3">
                            <div class="h-5 bg-gray-200 rounded animate-pulse w-3/4"></div>
                            <div class="h-4 bg-gray-200 rounded animate-pulse w-1/2"></div>
                            <div class="flex items-center justify-between mt-4">
                                <div class="h-6 bg-gray-200 rounded animate-pulse w-20"></div>
                                <div class="h-4 bg-gray-200 rounded animate-pulse w-16"></div>
                            </div>
                        </div>
                    </div>

                    <p class="text-sm text-gray-600 mb-3">Table Row Skeleton</p>
                    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                        <table class="w-full">
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-4">
                                        <div class="h-4 bg-gray-200 rounded animate-pulse w-16"></div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="h-4 bg-gray-200 rounded animate-pulse w-24"></div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="h-4 bg-gray-200 rounded animate-pulse w-32"></div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="h-6 bg-gray-200 rounded-full animate-pulse w-20"></div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="h-4 bg-gray-200 rounded animate-pulse w-16"></div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-4">
                                        <div class="h-4 bg-gray-200 rounded animate-pulse w-16"></div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="h-4 bg-gray-200 rounded animate-pulse w-24"></div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="h-4 bg-gray-200 rounded animate-pulse w-32"></div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="h-6 bg-gray-200 rounded-full animate-pulse w-20"></div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="h-4 bg-gray-200 rounded animate-pulse w-16"></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================
         5. EMPTY STATES
    ========================================= -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Empty States</h2>

            <div class="space-y-6">
                <!-- No Rooms -->
                <div class="bg-white p-12 rounded-xl border border-gray-200 text-center">
                    <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">No rooms available</h3>
                    <p class="text-gray-600 text-sm mb-6 max-w-sm mx-auto">Get started by creating your first room
                        listing. Guests are waiting!</p>
                    <button
                        class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-lg font-medium transition-colors inline-flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v16m8-8H4" />
                        </svg>
                        <span>Add Your First Room</span>
                    </button>
                </div>

                <!-- No Bookings -->
                <div class="bg-white p-12 rounded-xl border border-gray-200 text-center">
                    <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">No bookings yet</h3>
                    <p class="text-gray-600 text-sm mb-6 max-w-sm mx-auto">Once guests start booking, their
                        reservations will appear here.</p>
                    <button
                        class="bg-gray-900 hover:bg-gray-800 text-white px-5 py-2.5 rounded-lg font-medium transition-colors">
                        View Available Rooms
                    </button>
                </div>

                <!-- No Search Results -->
                <div class="bg-white p-12 rounded-xl border border-gray-200 text-center">
                    <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">No results found</h3>
                    <p class="text-gray-600 text-sm mb-6 max-w-sm mx-auto">We couldn't find any rooms matching your
                        search. Try adjusting your filters.</p>
                    <button class="text-primary hover:text-primary-dark font-medium text-sm">Clear filters</button>
                </div>
            </div>
        </section>

        <!-- ========================================
         6. CONFIRMATION MODALS
    ========================================= -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Confirmation Modals</h2>

            <div class="space-y-6">
                <!-- Delete Confirmation -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-200 max-w-md">
                    <div class="p-6">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 text-center mb-2">Delete Room?</h3>
                        <p class="text-sm text-gray-600 text-center mb-6">Are you sure you want to delete "Private
                            Double Room"? This action cannot be undone.</p>
                        <div class="flex items-center gap-3">
                            <button
                                class="flex-1 border border-gray-200 text-gray-700 hover:bg-gray-50 px-4 py-2.5 rounded-lg font-medium transition-colors">
                                Cancel
                            </button>
                            <button
                                class="flex-1 bg-red-600 hover:bg-red-700 text-white px-4 py-2.5 rounded-lg font-medium transition-colors">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Cancel Booking Confirmation -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-200 max-w-md">
                    <div class="p-6">
                        <div
                            class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 text-center mb-2">Cancel Booking?</h3>
                        <p class="text-sm text-gray-600 text-center mb-6">Canceling booking #1234 will refund 50% to
                            the guest. Are you sure you want to continue?</p>
                        <div class="flex items-center gap-3">
                            <button
                                class="flex-1 border border-gray-200 text-gray-700 hover:bg-gray-50 px-4 py-2.5 rounded-lg font-medium transition-colors">
                                Keep Booking
                            </button>
                            <button
                                class="flex-1 bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2.5 rounded-lg font-medium transition-colors">
                                Cancel Booking
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Logout Confirmation -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-200 max-w-md">
                    <div class="p-6">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 text-center mb-2">Logout</h3>
                        <p class="text-sm text-gray-600 text-center mb-6">Are you sure you want to logout from your
                            account?</p>
                        <div class="flex items-center gap-3">
                            <button
                                class="flex-1 border border-gray-200 text-gray-700 hover:bg-gray-50 px-4 py-2.5 rounded-lg font-medium transition-colors">
                                Cancel
                            </button>
                            <button
                                class="flex-1 bg-gray-900 hover:bg-gray-800 text-white px-4 py-2.5 rounded-lg font-medium transition-colors">
                                Logout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================
         7. STATUS BADGES
    ========================================= -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">7. Status Badges</h2>

            <div class="space-y-6">
                <!-- Booking Status -->
                <div class="bg-white p-6 rounded-xl border border-gray-200">
                    <h3 class="text-sm font-semibold text-gray-900 mb-3">Booking Status</h3>
                    <div class="flex flex-wrap gap-3">
                        <span
                            class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full">Pending</span>
                        <span
                            class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Confirmed</span>
                        <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Checked
                            In</span>
                        <span
                            class="bg-gray-100 text-gray-700 text-xs font-semibold px-3 py-1 rounded-full">Completed</span>
                        <span
                            class="bg-red-100 text-red-700 text-xs font-semibold px-3 py-1 rounded-full">Cancelled</span>
                    </div>
                </div>

                <!-- Room Status -->
                <div class="bg-white p-6 rounded-xl border border-gray-200">
                    <h3 class="text-sm font-semibold text-gray-900 mb-3">Room Status</h3>
                    <div class="flex flex-wrap gap-3">
                        <span
                            class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full flex items-center space-x-1">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <circle cx="10" cy="10" r="4" />
                            </svg>
                            <span>Available</span>
                        </span>
                        <span
                            class="bg-orange-100 text-orange-700 text-xs font-semibold px-3 py-1 rounded-full flex items-center space-x-1">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <circle cx="10" cy="10" r="4" />
                            </svg>
                            <span>Maintenance</span>
                        </span>
                        <span
                            class="bg-gray-100 text-gray-700 text-xs font-semibold px-3 py-1 rounded-full flex items-center space-x-1">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <circle cx="10" cy="10" r="4" />
                            </svg>
                            <span>Inactive</span>
                        </span>
                        <span
                            class="bg-red-100 text-red-700 text-xs font-semibold px-3 py-1 rounded-full flex items-center space-x-1">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <circle cx="10" cy="10" r="4" />
                            </svg>
                            <span>Booked</span>
                        </span>
                    </div>
                </div>

                <!-- Payment Status -->
                <div class="bg-white p-6 rounded-xl border border-gray-200">
                    <h3 class="text-sm font-semibold text-gray-900 mb-3">Payment Status</h3>
                    <div class="flex flex-wrap gap-3">
                        <span
                            class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full">Pending</span>
                        <span
                            class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Paid</span>
                        <span
                            class="bg-red-100 text-red-700 text-xs font-semibold px-3 py-1 rounded-full">Failed</span>
                        <span
                            class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Refunded</span>
                    </div>
                </div>

                <!-- Notification Status -->
                <div class="bg-white p-6 rounded-xl border border-gray-200">
                    <h3 class="text-sm font-semibold text-gray-900 mb-3">Notification Status</h3>
                    <div class="flex flex-wrap gap-3">
                        <span
                            class="bg-primary/10 text-primary text-xs font-semibold px-3 py-1 rounded-full flex items-center space-x-1">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <circle cx="10" cy="10" r="4" />
                            </svg>
                            <span>Unread</span>
                        </span>
                        <span
                            class="bg-gray-100 text-gray-600 text-xs font-semibold px-3 py-1 rounded-full">Read</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================================
         8. CALENDAR RANGE MODAL
         Use for date range selection in bookings
    ========================================= -->
        <section class="mb-16 hidden">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">8. Calendar Range Modal</h2>
            <p class="text-sm text-gray-600 mb-4">Date range picker for booking forms</p>

            <!-- Trigger Button -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Trigger Button</h3>
                <p class="text-sm text-gray-600 mb-3">Place this button in booking forms or search bars</p>
                <div class="bg-white p-6 rounded-xl border border-gray-200">
                    <button
                        class="w-full md:w-auto bg-white border border-gray-200 hover:border-primary text-gray-700 px-5 py-3 rounded-lg font-medium transition-colors flex items-center justify-between md:justify-center space-x-3">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-sm">Select Dates</span>
                        </div>
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Calendar Modal -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Calendar Modal (XL)</h3>
                <p class="text-sm text-gray-600 mb-3">Full modal component - add "hidden" class by default</p>

                <!-- Modal Backdrop & Container -->
                <div class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 p-4">
                    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-y-auto">

                        <!-- Modal Header -->
                        <div
                            class="sticky top-0 bg-white border-b border-gray-200 px-6 py-4 flex items-center justify-between rounded-t-2xl">
                            <h3 class="text-xl font-bold text-gray-900">Select Date Range</h3>
                            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Modal Body -->
                        <div class="p-6">
                            <!-- Calendar Grid -->
                            <div class="grid md:grid-cols-2 gap-6">

                                <!-- Month 1 - March 2025 -->
                                <div class="bg-gray-50 rounded-xl p-4">
                                    <!-- Month Header -->
                                    <div class="flex items-center justify-between mb-4">
                                        <button class="p-2 hover:bg-gray-200 rounded-lg transition-colors">
                                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 19l-7-7 7-7" />
                                            </svg>
                                        </button>
                                        <h4 class="text-lg font-semibold text-gray-900">March 2025</h4>
                                        <button class="p-2 hover:bg-gray-200 rounded-lg transition-colors">
                                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- Weekday Headers -->
                                    <div class="grid grid-cols-7 gap-2 mb-2">
                                        <div class="text-center text-xs font-semibold text-gray-500 py-2">Su</div>
                                        <div class="text-center text-xs font-semibold text-gray-500 py-2">Mo</div>
                                        <div class="text-center text-xs font-semibold text-gray-500 py-2">Tu</div>
                                        <div class="text-center text-xs font-semibold text-gray-500 py-2">We</div>
                                        <div class="text-center text-xs font-semibold text-gray-500 py-2">Th</div>
                                        <div class="text-center text-xs font-semibold text-gray-500 py-2">Fr</div>
                                        <div class="text-center text-xs font-semibold text-gray-500 py-2">Sa</div>
                                    </div>

                                    <!-- Calendar Days Grid -->
                                    <div class="grid grid-cols-7 gap-2">
                                        <!-- Empty cells for alignment -->
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>

                                        <!-- Days (1-31) -->
                                        <!-- Week 1 -->
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">1</button>

                                        <!-- Week 2 -->
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">2</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">3</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">4</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">5</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">6</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">7</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">8</button>

                                        <!-- Week 3 -->
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">9</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">10</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">11</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">12</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">13</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">14</button>

                                        <!-- START DATE - March 15 -->
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-semibold rounded-lg bg-primary text-white shadow-md">15</button>

                                        <!-- Week 4 - IN RANGE -->
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg bg-primary/20 text-primary">16</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg bg-primary/20 text-primary">17</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg bg-primary/20 text-primary">18</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg bg-primary/20 text-primary">19</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg bg-primary/20 text-primary">20</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg bg-primary/20 text-primary">21</button>

                                        <!-- END DATE - March 22 -->
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-semibold rounded-lg bg-primary text-white shadow-md">22</button>

                                        <!-- Week 5 - After selection -->
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">23</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">24</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">25</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">26</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">27</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">28</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">29</button>

                                        <!-- Week 6 -->
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">30</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">31</button>
                                    </div>
                                </div>

                                <!-- Month 2 - April 2025 -->
                                <div class="bg-gray-50 rounded-xl p-4">
                                    <!-- Month Header -->
                                    <div class="flex items-center justify-between mb-4">
                                        <button class="p-2 hover:bg-gray-200 rounded-lg transition-colors">
                                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 19l-7-7 7-7" />
                                            </svg>
                                        </button>
                                        <h4 class="text-lg font-semibold text-gray-900">April 2025</h4>
                                        <button class="p-2 hover:bg-gray-200 rounded-lg transition-colors">
                                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- Weekday Headers -->
                                    <div class="grid grid-cols-7 gap-2 mb-2">
                                        <div class="text-center text-xs font-semibold text-gray-500 py-2">Su</div>
                                        <div class="text-center text-xs font-semibold text-gray-500 py-2">Mo</div>
                                        <div class="text-center text-xs font-semibold text-gray-500 py-2">Tu</div>
                                        <div class="text-center text-xs font-semibold text-gray-500 py-2">We</div>
                                        <div class="text-center text-xs font-semibold text-gray-500 py-2">Th</div>
                                        <div class="text-center text-xs font-semibold text-gray-500 py-2">Fr</div>
                                        <div class="text-center text-xs font-semibold text-gray-500 py-2">Sa</div>
                                    </div>

                                    <!-- Calendar Days Grid -->
                                    <div class="grid grid-cols-7 gap-2">
                                        <!-- Empty cells for alignment -->
                                        <div></div>
                                        <div></div>

                                        <!-- Days (1-30) -->
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">1</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">2</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">3</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">4</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">5</button>

                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">6</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">7</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">8</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">9</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">10</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">11</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">12</button>

                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">13</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">14</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">15</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">16</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">17</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">18</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">19</button>

                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">20</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">21</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">22</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">23</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">24</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">25</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">26</button>

                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">27</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">28</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">29</button>
                                        <button
                                            class="aspect-square flex items-center justify-center text-sm font-medium rounded-lg hover:bg-gray-200 text-gray-900 transition-colors">30</button>
                                    </div>
                                </div>

                            </div>

                            <!-- Selected Range Display -->
                            <div class="mt-6 grid md:grid-cols-2 gap-4">
                                <div class="bg-gray-50 rounded-xl p-4">
                                    <div class="text-xs text-gray-500 font-medium mb-1">Check-in Date</div>
                                    <div class="text-lg font-semibold text-gray-900">March 15, 2025</div>
                                    <div class="text-xs text-gray-500 mt-1">Saturday</div>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-4">
                                    <div class="text-xs text-gray-500 font-medium mb-1">Check-out Date</div>
                                    <div class="text-lg font-semibold text-gray-900">March 22, 2025</div>
                                    <div class="text-xs text-gray-500 mt-1">Saturday</div>
                                </div>
                            </div>

                            <!-- Duration Display -->
                            <div class="mt-4 bg-primary/10 border border-primary/20 rounded-xl p-4 text-center">
                                <p class="text-sm text-primary font-semibold">7 nights selected</p>
                            </div>
                        </div>

                        <!-- Modal Footer -->
                        <div
                            class="sticky bottom-0 bg-white border-t border-gray-200 px-6 py-4 flex items-center justify-between rounded-b-2xl gap-3">
                            <button
                                class="flex-1 border border-gray-200 text-gray-700 hover:bg-gray-50 px-6 py-3 rounded-lg font-medium transition-colors">
                                Cancel
                            </button>
                            <button
                                class="flex-1 bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-lg font-medium transition-colors">
                                Apply Dates
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Usage Instructions -->
            <div class="mt-6 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                <h4 class="text-sm font-semibold text-blue-900 mb-2">Implementation Notes:</h4>
                <ul class="text-xs text-blue-800 space-y-1">
                    <li>• Modal is visible by default for demo - add "hidden" class in production</li>
                    <li>• Start date: March 15 (solid primary background)</li>
                    <li>• End date: March 22 (solid primary background)</li>
                    <li>• Range dates: March 16-21 (light primary background)</li>
                    <li>• Past dates can be styled with "opacity-40 cursor-not-allowed"</li>
                    <li>• Today indicator: Add ring-2 ring-primary to current date</li>
                    <li>• Mobile: Calendar switches to single column on small screens</li>
                </ul>
            </div>
        </section>

        <!-- ========================================
         USAGE NOTES
    ========================================= -->
        <section class="bg-gray-900 text-white rounded-xl p-8">
            <h2 class="text-2xl font-bold mb-4">Implementation Notes</h2>
            <div class="space-y-4 text-sm">
                <div>
                    <h3 class="font-semibold mb-2">Adding Components to Your Pages:</h3>
                    <ul class="list-disc list-inside space-y-1 text-gray-300">
                        <li>Copy the HTML markup from each component section above</li>
                        <li>Paste into the appropriate location in your existing pages</li>
                        <li>Adjust IDs and classes if needed to avoid conflicts</li>
                        <li>All components use existing Tailwind classes - no additional CSS needed</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Toast Container Setup:</h3>
                    <pre class="bg-gray-800 p-3 rounded mt-2 text-xs overflow-x-auto">
&lt;!-- Add before closing &lt;/body&gt; tag --&gt;
&lt;div id="toast-container" class="fixed top-4 right-4 z-50 space-y-3"&gt;
  &lt;!-- Toast components go here --&gt;
&lt;/div&gt;</pre>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Modal Usage:</h3>
                    <ul class="list-disc list-inside space-y-1 text-gray-300">
                        <li>All modals are hidden by default (add "hidden" class)</li>
                        <li>Toggle visibility with JavaScript: <code
                                class="bg-gray-800 px-1 rounded">element.classList.toggle('hidden')</code></li>
                        <li>Image upload components integrate into existing modals</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-2">Component Files:</h3>
                    <ul class="list-disc list-inside space-y-1 text-gray-300">
                        <li>All components maintain visual consistency with existing design</li>
                        <li>Badge colors match existing status indicators</li>
                        <li>Spacing follows 8px grid system</li>
                        <li>Icons use same stroke-width and sizing conventions</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
