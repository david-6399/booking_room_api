<div>

    <!-- Breadcrumb -->
    <div class="bg-gray-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-gray-500 hover:text-primary transition-colors">Home</a>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <a href="/rooms" class="text-gray-500 hover:text-primary transition-colors">Rooms</a>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                {{-- <span class="text-gray-900 font-medium">{{ $selectedRoom->roomType->name }}</span> --}}
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <!-- Left Column - Images & Details -->
            <div class="lg:col-span-2">
                <!-- Image Gallery -->
                <div class="space-y-4">
                    <!-- Main Image -->
                    <div class="relative rounded-2xl overflow-hidden h-64 sm:h-80 md:h-96">
                        <img id="main-image"
                            src="https://images.pexels.com/photos/1743231/pexels-photo-1743231.jpeg?auto=compress&cs=tinysrgb&w=1200"
                            alt="Private Double Room" class="w-full h-full object-cover">
                        <span
                            class="absolute top-4 left-4 {{ $selectedRoom->status->value === 'available' ? 'bg-green-500' : ($selectedRoom->status->value === 'maintenance' ? 'bg-orange-500' : 'bg-red-500') }} text-white text-sm font-semibold px-4 py-1.5 rounded-full">{{ $selectedRoom->status }}</span>
                    </div>

                    <!-- Thumbnail Gallery -->
                    <div class="grid grid-cols-4 gap-3">
                        <button class="thumbnail-btn rounded-xl overflow-hidden h-20 sm:h-24 border-2 border-primary"
                            data-image="https://images.pexels.com/photos/1743231/pexels-photo-1743231.jpeg?auto=compress&cs=tinysrgb&w=1200">
                            <img src="https://images.pexels.com/photos/1743231/pexels-photo-1743231.jpeg?auto=compress&cs=tinysrgb&w=400"
                                alt="Room view 1" class="w-full h-full object-cover">
                        </button>
                        <button
                            class="thumbnail-btn rounded-xl overflow-hidden h-20 sm:h-24 border-2 border-transparent hover:border-primary transition-colors"
                            data-image="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=1200">
                            <img src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=400"
                                alt="Room view 2" class="w-full h-full object-cover">
                        </button>
                        <button
                            class="thumbnail-btn rounded-xl overflow-hidden h-20 sm:h-24 border-2 border-transparent hover:border-primary transition-colors"
                            data-image="https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=1200">
                            <img src="https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=400"
                                alt="Room view 3" class="w-full h-full object-cover">
                        </button>
                        <button
                            class="thumbnail-btn rounded-xl overflow-hidden h-20 sm:h-24 border-2 border-transparent hover:border-primary transition-colors"
                            data-image="https://images.pexels.com/photos/1648776/pexels-photo-1648776.jpeg?auto=compress&cs=tinysrgb&w=1200">
                            <img src="https://images.pexels.com/photos/1648776/pexels-photo-1648776.jpeg?auto=compress&cs=tinysrgb&w=400"
                                alt="Room view 4" class="w-full h-full object-cover">
                        </button>
                    </div>
                </div>

                <!-- Room Information -->
                <div class="mt-8">
                    <div class="flex flex-wrap items-start justify-between gap-4">
                        <div>
                            <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Private Double Room</h1>
                            <div class="flex items-center mt-2 text-gray-500">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Up to 2 Guests</span>
                                <span class="mx-3 text-gray-300">|</span>
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <span>20 m2</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-3xl font-bold text-primary">$45</div>
                            <div class="text-gray-500 text-sm">per night</div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mt-8">
                        <h2 class="text-lg font-semibold text-gray-900 mb-3">About This Room</h2>
                        <p class="text-gray-600 leading-relaxed">
                            Our Private Double Room offers a perfect blend of comfort and privacy for couples or solo
                            travelers seeking extra space. The room features a comfortable queen-size bed with premium
                            linens, an en-suite bathroom with hot shower, and a cozy seating area by the window with
                            city views.
                        </p>
                        <p class="text-gray-600 leading-relaxed mt-4">
                            Located on the upper floors of our hostel, this room provides a peaceful retreat after a day
                            of exploration. The modern decor and warm lighting create a welcoming atmosphere that feels
                            like home away from home.
                        </p>
                    </div>

                    <!-- Amenities -->
                    <div class="mt-8">
                        <h2 class="text-lg font-semibold text-gray-900 mb-4">Amenities</h2>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-cyan-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-sm">Free WiFi</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-cyan-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-sm">Smart TV</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-cyan-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707" />
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-sm">Air Conditioning</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-cyan-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-sm">Private Locker</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-cyan-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-sm">Daily Cleaning</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-cyan-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-sm">En-suite Bathroom</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-cyan-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-sm">Power Outlets</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-cyan-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-sm">Fresh Towels</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-cyan-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-sm">24/7 Reception</span>
                            </div>
                        </div>
                    </div>

                    <!-- House Rules -->
                    <div class="mt-8 p-6 bg-gray-50 rounded-2xl">
                        <h2 class="text-lg font-semibold text-gray-900 mb-4">House Rules</h2>
                        <div class="grid sm:grid-cols-2 gap-4 text-sm">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Check-in: 2:00 PM - 10:00 PM</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600">Check-out: Before 11:00 AM</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <span class="text-gray-600">No smoking</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <span class="text-gray-600">No pets allowed</span>
                            </div>
                        </div>
                    </div>

                    <!-- Room Reviews Section -->
                    <div class="mt-8" id="room-reviews">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h2 class="text-lg font-semibold text-gray-900">Guest Reviews</h2>
                                <p class="text-sm text-gray-500 mt-1">12 reviews for this room</p>
                            </div>
                            <button id="open-review-modal"
                                class="bg-primary hover:bg-primary-dark text-white px-4 py-2 rounded-lg font-medium text-sm transition-colors flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                                <span>Add Review</span>
                            </button>
                        </div>

                        <div class="bg-cyan-50 rounded-xl p-4 mb-6">
                            <div class="flex items-center space-x-4">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-primary">4.7</div>
                                    <div class="flex items-center justify-center mt-1">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1 text-sm text-gray-600">
                                    Based on <span class="font-medium text-gray-900">12 reviews</span> from guests who
                                    stayed in this room
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-white border border-gray-100 rounded-xl p-4">
                                <div class="flex items-start justify-between mb-2">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="w-9 h-9 bg-primary/10 rounded-full flex items-center justify-center">
                                            <span class="text-primary font-medium text-sm">SJ</span>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-900 text-sm">Sarah Johnson</p>
                                            <p class="text-xs text-gray-500">December 2024</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-0.5">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-gray-600 text-sm leading-relaxed">Beautiful room with amazing city
                                    views! The bed was incredibly comfortable and the en-suite bathroom was spotless.
                                    Highly recommend for couples.</p>
                            </div>

                            <div class="bg-white border border-gray-100 rounded-xl p-4">
                                <div class="flex items-start justify-between mb-2">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="w-9 h-9 bg-primary/10 rounded-full flex items-center justify-center">
                                            <span class="text-primary font-medium text-sm">MC</span>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-900 text-sm">Marco Chen</p>
                                            <p class="text-xs text-gray-500">November 2024</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-0.5">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-gray-600 text-sm leading-relaxed">Great value for the price. Room was
                                    clean and cozy. The only minor issue was street noise at night, but earplugs solved
                                    that. Would stay again!</p>
                            </div>

                            <div class="bg-white border border-gray-100 rounded-xl p-4">
                                <div class="flex items-start justify-between mb-2">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="w-9 h-9 bg-primary/10 rounded-full flex items-center justify-center">
                                            <span class="text-primary font-medium text-sm">LP</span>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-900 text-sm">Lisa Park</p>
                                            <p class="text-xs text-gray-500">November 2024</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-0.5">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-gray-600 text-sm leading-relaxed">Perfect for my solo trip! The private
                                    room gave me peace and quiet after busy days exploring. Staff was super helpful with
                                    recommendations.</p>
                            </div>
                        </div>

                        <div class="text-center mt-6">
                            <button class="text-primary hover:text-primary-dark font-medium text-sm transition-colors">
                                See all 12 reviews
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Booking Box (Desktop) -->
            <div class="hidden lg:block">
                <div class="sticky top-24">
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
                        <div class="flex items-baseline justify-between mb-6">
                            <div>
                                <span
                                    class="text-3xl font-bold text-gray-900">DA{{ $selectedRoom->price_per_night }}</span>
                                <span class="text-gray-500">/night</span>
                            </div>
                            <span
                                class="{{ $selectedRoom->status->value === 'available' ? 'bg-green-100 text-green-700' : ($selectedRoom->status->value === 'maintenance' ? 'bg-orange-100 text-orange-700' : 'bg-red-100 text-red-700') }} text-xs font-semibold px-3 py-1 rounded-full">{{ $selectedRoom->status }}</span>
                        </div>

                        <form wire:submit='bookNow' method="post" class="space-y-4">
                            <div>
                                <label for="booking-checkin"
                                    class="block text-sm font-medium text-gray-700 mb-2">Check-in</label>
                                <input type="date" id="booking-checkin" name="checkin"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                                    wire:model.live="bookingData.check_in_date">
                            </div>
                            <div>
                                <label for="booking-checkout"
                                    class="block text-sm font-medium text-gray-700 mb-2">Check-out</label>
                                <input type="date" id="booking-checkout" name="checkout"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                                    wire:model.live="bookingData.check_out_date">
                            </div>
                            <div>
                                <label for="booking-guests"
                                    class="block text-sm font-medium text-gray-700 mb-2">Guests</label>
                                <div class="relative">
                                    <select id="booking-guests" name="guests"
                                        class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all appearance-none bg-white cursor-pointer"
                                        wire:model.blur="bookingData.guest">
                                        <option value="1">1 Guest</option>
                                        <option value="2">2 Guests</option>
                                    </select>
                                    <svg class="w-5 h-5 text-gray-400 absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Price Breakdown -->
                            <div class="border-t border-gray-100 pt-4 mt-4">
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="text-gray-600">{{ $selectedRoom->price_per_night  }} x <span id="nights-count">{{ $nightsCount }}</span> nights</span>
                                    <span class="text-gray-900" id="subtotal">{{ $totalPrice }} DA</span>
                                </div>
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="text-gray-600">Service  fee</span>
                                    <span class="text-gray-900">$10</span>
                                </div>
                                <div class="flex justify-between font-semibold text-lg pt-3 border-t border-gray-100">
                                    <span class="text-gray-900">Total</span>
                                    <span class="text-gray-900" id="total">{{ $totalPrice + 10}} DA</span>
                                </div>
                            </div>

                            <input type="hidden" name="room" value="private-double">
                            @if(Auth::check())
                                    <button type="submit"
                                        class="w-full bg-primary hover:bg-primary-dark text-white py-3.5 rounded-xl font-semibold transition-colors">
                                        Book Now
                                    </button>

                            @else
                                <button type="submit" 
                                    class="w-full bg-primary hover:bg-primary-dark text-white py-3.5 rounded-xl font-semibold transition-colors"
                                    onclick="openPopup()">
                                    Book Now not auth
                                </button>
                            @endif

                        </form>
                        <livewire:Auth.partials.login-modal />

                        <p class="text-center text-sm text-gray-500 mt-4">You won't be charged yet</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Mobile Booking Bar -->
    <div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 p-4 lg:hidden z-40">
        <div class="flex items-center justify-between max-w-7xl mx-auto">
            <div>
                <span class="text-2xl font-bold text-gray-900">$45</span>
                <span class="text-gray-500">/night</span>
                <p class="text-sm text-gray-500">Total: $145 (3 nights)</p>
            </div>
            <a href="booking.html?room=private-double"
                class="bg-primary hover:bg-primary-dark text-white px-8 py-3 rounded-xl font-semibold transition-colors">
                Book Now
            </a>
        </div>
    </div>

    <!-- Add padding for mobile booking bar -->
    <div class="h-24 lg:hidden"></div>

    <!-- Add Review Modal -->
    <div id="review-modal" class="fixed inset-0 z-50 hidden" role="dialog" aria-modal="true"
        aria-labelledby="review-modal-title">
        <div class="fixed inset-0 bg-black/50 transition-opacity" aria-hidden="true"></div>
        <div class="fixed inset-0 overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4">
                <div class="relative w-full max-w-md bg-white rounded-2xl shadow-xl transform transition-all">
                    <div class="flex items-center justify-between p-5 border-b border-gray-100">
                        <div>
                            <h2 id="review-modal-title" class="text-lg font-bold text-gray-900">Add Your Review</h2>
                            <p class="text-xs text-gray-500 mt-0.5">Reviews are published after moderation</p>
                        </div>
                        <button id="close-review-modal"
                            class="p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <form id="review-form" class="p-5 space-y-5">
                        <div>
                            <label for="review-name" class="block text-sm font-medium text-gray-700 mb-2">Your
                                Name</label>
                            <input type="text" id="review-name" placeholder="Enter your name"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Your Rating</label>
                            <div class="flex items-center space-x-1" id="star-rating">
                                <button type="button"
                                    class="star-btn p-1 text-gray-300 hover:text-yellow-400 transition-colors"
                                    data-rating="1">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                                <button type="button"
                                    class="star-btn p-1 text-gray-300 hover:text-yellow-400 transition-colors"
                                    data-rating="2">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                                <button type="button"
                                    class="star-btn p-1 text-gray-300 hover:text-yellow-400 transition-colors"
                                    data-rating="3">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                                <button type="button"
                                    class="star-btn p-1 text-gray-300 hover:text-yellow-400 transition-colors"
                                    data-rating="4">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                                <button type="button"
                                    class="star-btn p-1 text-gray-300 hover:text-yellow-400 transition-colors"
                                    data-rating="5">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                                <span id="rating-text" class="ml-2 text-sm text-gray-500">Select a rating</span>
                            </div>
                            <input type="hidden" id="rating-value" name="rating" value="">
                        </div>

                        <div>
                            <label for="review-comment" class="block text-sm font-medium text-gray-700 mb-2">Your
                                Review</label>
                            <textarea id="review-comment" rows="4" placeholder="Share your experience with this room..."
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all resize-none"></textarea>
                        </div>

                        <div class="bg-cyan-50 rounded-xl p-3 text-xs text-gray-600 flex items-start space-x-2">
                            <svg class="w-4 h-4 text-primary flex-shrink-0 mt-0.5" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Available after completed booking. Your review helps future guests make better
                                decisions.</span>
                        </div>
                    </form>
                    <div class="flex items-center justify-end gap-3 p-5 border-t border-gray-100">
                        <button id="cancel-review"
                            class="px-4 py-2.5 text-gray-600 hover:text-gray-800 font-medium text-sm transition-colors">Cancel</button>
                        <button id="submit-review"
                            class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-xl font-medium text-sm transition-colors">Submit
                            Review</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');

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

        const thumbnailBtns = document.querySelectorAll('.thumbnail-btn');
        const mainImage = document.getElementById('main-image');

        thumbnailBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                thumbnailBtns.forEach(b => b.classList.remove('border-primary'));
                thumbnailBtns.forEach(b => b.classList.add('border-transparent'));
                btn.classList.remove('border-transparent');
                btn.classList.add('border-primary');
                mainImage.src = btn.dataset.image;
            });
        });

        const today = new Date().toISOString().split('T')[0];
        const checkinInput = document.getElementById('booking-checkin');
        const checkoutInput = document.getElementById('booking-checkout');

        if (checkinInput) {
            checkinInput.setAttribute('min', today);
            checkinInput.value = today;

            const defaultCheckout = new Date();
            defaultCheckout.setDate(defaultCheckout.getDate() + 3);
            checkoutInput.value = defaultCheckout.toISOString().split('T')[0];

            checkinInput.addEventListener('change', function() {
                const nextDay = new Date(this.value);
                nextDay.setDate(nextDay.getDate() + 1);
                checkoutInput.setAttribute('min', nextDay.toISOString().split('T')[0]);
                if (checkoutInput.value && new Date(checkoutInput.value) <= new Date(this.value)) {
                    checkoutInput.value = nextDay.toISOString().split('T')[0];
                }
                updatePrice();
            });

            checkoutInput.addEventListener('change', updatePrice);
        }

        // function updatePrice() {
        //     const checkin = new Date(checkinInput.value);
        //     const checkout = new Date(checkoutInput.value);
        //     const nights = Math.ceil((checkout - checkin) / (1000 * 60 * 60 * 24));

        //     if (nights > 0) {
        //         document.getElementById('nights-count').textContent = nights;
        //         const subtotal = nights * 45;
        //         document.getElementById('subtotal').textContent = '$' + subtotal;
        //         document.getElementById('total').textContent = '$' + (subtotal + 10);
        //     }
        // }

        const reviewModal = document.getElementById('review-modal');
        const openReviewModalBtn = document.getElementById('open-review-modal');
        const closeReviewModalBtn = document.getElementById('close-review-modal');
        const cancelReviewBtn = document.getElementById('cancel-review');
        const submitReviewBtn = document.getElementById('submit-review');
        const starBtns = document.querySelectorAll('.star-btn');
        const ratingValue = document.getElementById('rating-value');
        const ratingText = document.getElementById('rating-text');

        const ratingLabels = ['', 'Poor', 'Fair', 'Good', 'Very Good', 'Excellent'];

        function openReviewModal() {
            reviewModal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
            document.getElementById('review-name').focus();
        }

        function closeReviewModal() {
            reviewModal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
            document.getElementById('review-form').reset();
            starBtns.forEach(btn => btn.classList.remove('text-yellow-400'));
            starBtns.forEach(btn => btn.classList.add('text-gray-300'));
            ratingText.textContent = 'Select a rating';
            ratingValue.value = '';
        }

        openReviewModalBtn.addEventListener('click', openReviewModal);
        closeReviewModalBtn.addEventListener('click', closeReviewModal);
        cancelReviewBtn.addEventListener('click', closeReviewModal);

        reviewModal.addEventListener('click', (e) => {
            if (e.target === reviewModal.querySelector('.fixed.inset-0.bg-black\\/50')) {
                closeReviewModal();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !reviewModal.classList.contains('hidden')) {
                closeReviewModal();
            }
        });

        starBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const rating = parseInt(btn.dataset.rating);
                ratingValue.value = rating;
                ratingText.textContent = ratingLabels[rating];

                starBtns.forEach((b, index) => {
                    if (index < rating) {
                        b.classList.remove('text-gray-300');
                        b.classList.add('text-yellow-400');
                    } else {
                        b.classList.remove('text-yellow-400');
                        b.classList.add('text-gray-300');
                    }
                });
            });

            btn.addEventListener('mouseenter', () => {
                const rating = parseInt(btn.dataset.rating);
                starBtns.forEach((b, index) => {
                    if (index < rating) {
                        b.classList.add('text-yellow-400');
                    }
                });
            });

            btn.addEventListener('mouseleave', () => {
                const currentRating = parseInt(ratingValue.value) || 0;
                starBtns.forEach((b, index) => {
                    if (index >= currentRating) {
                        b.classList.remove('text-yellow-400');
                        if (index >= currentRating) {
                            b.classList.add('text-gray-300');
                        }
                    }
                });
            });
        });

        submitReviewBtn.addEventListener('click', (e) => {
            e.preventDefault();
            closeReviewModal();
        });
    </script>
</div>
