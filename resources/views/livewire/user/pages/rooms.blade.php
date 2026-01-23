<div>

    <!-- Page Header -->
    <section class="bg-gradient-to-br from-cyan-50 to-white py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900">Our Rooms</h1>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Find the perfect room for your stay. From budget-friendly
                    dorms to private suites.</p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-8 md:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Filters -->
            <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-4 md:p-6 mb-8">
                <div class="flex flex-col md:flex-row md:items-end gap-4">
                    <!-- Price Range -->
                    <div class="flex-1">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Price Range</label>
                        <div class="flex items-center gap-3">
                            <div class="relative flex-1">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">$</span>
                                <input type="number" id="min-price" placeholder="Min"
                                    class="w-full pl-8 pr-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all" wire:model.live="minPrice">
                            </div>
                            <span class="text-gray-400">-</span>
                            <div class="relative flex-1">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">$</span>
                                <input type="number" id="max-price" placeholder="Max"
                                    class="w-full pl-8 pr-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all" wire:model.live="maxPrice">
                            </div>
                        </div>
                    </div>

                    <!-- Capacity -->
                    <div class="flex-1">
                        <label for="capacity" class="block text-sm font-medium text-gray-700 mb-2">Capacity</label>
                        <div class="relative">
                            <select id="capacity"
                                class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all appearance-none bg-white cursor-pointer">
                                <option value="">Any Capacity</option>
                                <option value="1-2">1-2 Guests</option>
                                <option value="3-4">3-4 Guests</option>
                                <option value="5+">5+ Guests</option>
                            </select>
                            <svg class="w-5 h-5 text-gray-400 absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Room Type -->
                    <div class="flex-1">
                        <label for="room-type" class="block text-sm font-medium text-gray-700 mb-2">Room Type</label>
                        <div class="relative">
                            <select id="room-type"
                                class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all appearance-none bg-white cursor-pointer">
                                <option value="">All Types</option>
                                <option value="dorm">Dormitory</option>
                                <option value="private">Private Room</option>
                                <option value="suite">Suite</option>
                            </select>
                            <svg class="w-5 h-5 text-gray-400 absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Filter Button -->
                    <button id="filter-btn"
                        class="bg-primary hover:bg-primary-dark text-white px-6 py-2.5 rounded-xl font-medium transition-colors flex items-center justify-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                        <span>Apply Filters</span>
                    </button>
                </div>
            </div>

            <!-- Results Count -->
            <div class="flex items-center justify-between mb-6">
                <p class="text-gray-600"><span class="font-semibold text-gray-900">{{ count($rooms) }}</span> rooms
                    available</p>
                <div class="flex items-center gap-6">
                  <div class="flex items-center gap-2">
                      <span class="text-sm text-gray-500">Sort by:</span>
                      <select
                          class="text-sm font-medium text-gray-700 bg-transparent border-0 focus:ring-0 cursor-pointer">
                          <option>Price: Low to High</option>
                          <option>Price: High to Low</option>
                          <option>Most Popular</option>
                      </select>
                  </div>
                  <div class="flex items-center gap-2">
                      <span class="text-sm text-gray-500">Show Per Page:</span>
                      <select class="text-sm font-medium text-gray-700 bg-transparent border-0 focus:ring-0 cursor-pointer" wire:model.live="perPage">
                          <option value='8'>8 Per Page</option>
                          <option value='16'>16 Per Page</option>
                          <option value='25'>25 Per Page</option>
                      </select>
                  </div>
                </div>
            </div>

            <!-- Room Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($rooms as $room)
                    <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl cursor-pointer
 transition-shadow overflow-hidden border border-gray-100"
                        wire:key="{{ $room->id }}" wire:click='openRoom({{ $room->id }})'>
                        <div class="relative h-44 overflow-hidden">
                            <img src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=800"
                                alt="Standard Dorm Room"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            <span
                                class="absolute top-3 left-3 {{ $room->status->value === 'available' ? 'bg-green-500' : ($room->status->value === 'maintenance' ? 'bg-orange-500' : 'bg-red-500')}} text-white text-xs font-semibold px-2.5 py-1 rounded-full">{{ $room->status }}</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 group-hover:text-primary transition-colors">{{ $room->roomType->name ?? 'No Type' }} Room</h3>
                            <div class="flex items-center text-gray-500 text-sm mt-1.5">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>{{ $room->capacity }} Beds</span>
                            </div>
                            <div class="flex items-center justify-between mt-3">
                                <div>
                                    <span class="text-xl font-bold text-primary">DA{{ $room->price_per_night }}</span>
                                    <span class="text-gray-500 text-sm">/night</span>
                                </div>
                                <span class="text-primary text-sm font-medium">View Details</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="flex items-center justify-center mt-12 space-x-2">

                <button wire:click='previousPage' wire:loading.attr='disabled' @class([
                    'p-2 rounded-lg border transition-colors',
                    'border-gray-200 text-gray-400 cursor-not-allowed' => $rooms->onFirstPage(),
                    'border-gray-200 text-gray-700 hover:bg-gray-50' => !$rooms->onFirstPage(),
                ])
                    @disabled($rooms->onFirstPage())>

                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>

                </button>
                @foreach (range(1, $rooms->lastPage()) as $page)
                    @if ($page == 1 || $page == $rooms->lastPage() || abs($page - $rooms->currentPage()) <= 1)
                        <button wire:click='gotoPage({{ $page }})'
                            class="w-10 h-10 rounded-lg font-medium transition-colors
                    {{ $rooms->currentPage() == $page
                        ? 'bg-primary text-white'
                        : 'border border-gray-200 text-gray-700 hover:bg-gray-50' }}">{{ $page }}
                        </button>
                    @elseif ($page == 2 || $page == $rooms->lastPage() - 1)
                        <span class="text-gray-400">...</span>
                    @endif
                @endforeach

                <button wire:click="nextPage" wire:loading.attr="disabled" @class([
                    'p-2 rounded-lg border transition-colors',
                    'border-gray-200 text-gray-400 cursor-not-allowed' => !$rooms->hasMorePages(),
                    'border-gray-200 text-gray-700 hover:bg-gray-50' => $rooms->hasMorePages(),
                ])
                    @disabled(!$rooms->hasMorePages())>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
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
    </script>
</div>
