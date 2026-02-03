<div>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-cyan-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        Find Your Perfect
                        <span class="text-primary">Stay</span>
                    </h1>
                    <p class="mt-6 text-lg text-gray-600 max-w-lg mx-auto lg:mx-0">
                        Discover comfortable and affordable hostel rooms. Book your stay in seconds and enjoy a
                        memorable experience.
                    </p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8 border border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-900 mb-6">Search Available Rooms</h2>
                    <form wire:submit='searchRoom()' method="get" class="space-y-5">
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div>
                                <label for="checkin"
                                    class="block text-sm font-medium text-gray-700 mb-2">Check-in</label>
                                <input type="date" id="checkin" name="checkin"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                                    wire:model='check_in'>
                            </div>
                            <div>
                                <label for="checkout"
                                    class="block text-sm font-medium text-gray-700 mb-2">Check-out</label>
                                <input type="date" id="checkout" name="checkout"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                                    wire:model='check_out'>
                            </div>
                        </div>

                        <div>
                            <label for="guests" class="block text-sm font-medium text-gray-700 mb-2">Guests</label>
                            <div class="relative">
                                <select id="guests" name="guests"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all appearance-none bg-white cursor-pointer">
                                    <option value="1">1 Guest</option>
                                    <option value="2">2 Guests</option>
                                    <option value="3">3 Guests</option>
                                    <option value="4">4 Guests</option>
                                    <option value="5">5+ Guests</option>
                                </select>
                                <svg class="w-5 h-5 text-gray-400 absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full bg-primary hover:bg-primary-dark text-white py-3.5 rounded-xl font-semibold transition-colors flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            <span>Search Rooms</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Rooms Section -->
    <section class="py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Featured Rooms</h2>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Explore our most popular rooms, handpicked for comfort
                    and value</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <a href="room-details.html"
                    class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow overflow-hidden border border-gray-100">
                    <div class="relative h-48 sm:h-56 overflow-hidden">
                        <img src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=800"
                            alt="Standard Dorm Room"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <span
                            class="absolute top-4 left-4 bg-green-500 text-white text-xs font-semibold px-3 py-1 rounded-full">Available</span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-primary transition-colors">
                            Standard Dorm Room</h3>
                        <div class="flex items-center text-gray-500 text-sm mt-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>4 Beds</span>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <div>
                                <span class="text-2xl font-bold text-primary">$25</span>
                                <span class="text-gray-500 text-sm">/night</span>
                            </div>
                            <span class="text-primary font-medium text-sm group-hover:underline">View Details</span>
                        </div>
                    </div>
                </a>

                <a href="room-details.html"
                    class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow overflow-hidden border border-gray-100">
                    <div class="relative h-48 sm:h-56 overflow-hidden">
                        <img src="https://images.pexels.com/photos/1743231/pexels-photo-1743231.jpeg?auto=compress&cs=tinysrgb&w=800"
                            alt="Private Double Room"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <span
                            class="absolute top-4 left-4 bg-green-500 text-white text-xs font-semibold px-3 py-1 rounded-full">Available</span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-primary transition-colors">
                            Private Double Room</h3>
                        <div class="flex items-center text-gray-500 text-sm mt-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>2 Guests</span>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <div>
                                <span class="text-2xl font-bold text-primary">$45</span>
                                <span class="text-gray-500 text-sm">/night</span>
                            </div>
                            <span class="text-primary font-medium text-sm group-hover:underline">View Details</span>
                        </div>
                    </div>
                </a>

                <a href="room-details.html"
                    class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow overflow-hidden border border-gray-100">
                    <div class="relative h-48 sm:h-56 overflow-hidden">
                        <img src="https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=800"
                            alt="Deluxe Family Suite"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <span
                            class="absolute top-4 left-4 bg-orange-500 text-white text-xs font-semibold px-3 py-1 rounded-full">2
                            Left</span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-primary transition-colors">
                            Deluxe Family Suite</h3>
                        <div class="flex items-center text-gray-500 text-sm mt-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>6 Guests</span>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <div>
                                <span class="text-2xl font-bold text-primary">$85</span>
                                <span class="text-gray-500 text-sm">/night</span>
                            </div>
                            <span class="text-primary font-medium text-sm group-hover:underline">View Details</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="text-center mt-12">
                <a href="rooms.html"
                    class="inline-flex items-center space-x-2 bg-gray-900 hover:bg-gray-800 text-white px-8 py-3.5 rounded-xl font-semibold transition-colors">
                    <span>View All Rooms</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Why Choose Us</h2>
                <p class="mt-4 text-gray-600">We make your stay comfortable and hassle-free</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-cyan-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Best Prices</h3>
                    <p class="text-gray-600 text-sm">Affordable rates with no hidden fees</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cyan-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Secure Booking</h3>
                    <p class="text-gray-600 text-sm">Your data is safe and protected</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cyan-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Prime Location</h3>
                    <p class="text-gray-600 text-sm">Central locations near attractions</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cyan-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">24/7 Support</h3>
                    <p class="text-gray-600 text-sm">Always here to help you</p>
                </div>
            </div>
        </div>
    </section>



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

        const today = new Date().toISOString().split('T')[0];
        document.getElementById('checkin').setAttribute('min', today);
        document.getElementById('checkin').value = today;

        document.getElementById('checkin').addEventListener('change', function() {
            const checkoutInput = document.getElementById('checkout');
            const nextDay = new Date(this.value);
            nextDay.setDate(nextDay.getDate() + 1);
            checkoutInput.setAttribute('min', nextDay.toISOString().split('T')[0]);
            if (checkoutInput.value && new Date(checkoutInput.value) <= new Date(this.value)) {
                checkoutInput.value = nextDay.toISOString().split('T')[0];
            }
        });
    </script>
</div>
