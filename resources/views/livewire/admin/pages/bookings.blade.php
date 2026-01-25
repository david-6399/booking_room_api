<div>
    <div class="flex min-h-screen">
        <div class="flex-1 flex flex-col min-w-0">


            <main class="flex-1 p-4 sm:p-6 lg:p-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                    <div class="bg-white rounded-xl p-4 border border-gray-100 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Total Bookings</p>
                                <p class="text-2xl font-bold text-gray-900 mt-1">{{ $bookingNb }}</p>
                            </div>
                            <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl p-4 border border-gray-100 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Confirmed</p>
                                <p class="text-2xl font-bold text-green-600 mt-1">{{ $confirmedNb }}</p>
                            </div>
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl p-4 border border-gray-100 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Pending</p>
                                <p class="text-2xl font-bold text-yellow-600 mt-1">{{ $pendingNb }}</p>
                            </div>
                            <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl p-4 border border-gray-100 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Cancelled</p>
                                <p class="text-2xl font-bold text-red-600 mt-1">{{ $cancelledNb }}</p>
                            </div>
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-4 sm:p-6 border-b border-gray-100">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div class="relative flex-1 max-w-md">
                                <input type="text" placeholder="Search bookings..."
                                    class="w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <div class="flex items-center space-x-3">
                                <select
                                    class="px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                    wire:model.live='perStatus'>
                                    <option value = "">All Status</option>
                                    <option value="confirmed">Confirmed</option>
                                    <option value="pending">Pending</option>
                                    <option value="checked_in">Checked In</option>
                                    <option value="checked_out">Checked Out</option>
                                    <option value="canceled">Cancelled</option>
                                </select>
                                <select
                                    class="px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                    wire:model.live='perPage'>
                                    <option value="6">6 Per Page</option>
                                    <option value="10">10 Per Page</option>
                                    <option value="15">15 Per Page</option>
                                    <option value="20">20 Per Page</option>
                                </select>
                                <label for="">From : </label>
                                <input type="date"
                                    class="px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none" wire:model.live='perDateStart'>
                                <label for="">To : </label>
                                    <input type="date"
                                    class="px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none" wire:model.live='perDateEnd'>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Booking ID</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Guest</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Room</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Check In</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Check Out</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                    <th
                                        class="px-6 py-4 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach ($bookings as $booking)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4">
                                            <span class="font-mono text-sm text-primary">#BK-2024-001 |
                                                {{ $booking->id }}</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div>
                                                <p class="font-medium text-gray-900">{{ $booking->user->name }}</p>
                                                <p class="text-sm text-gray-500">{{ $booking->user->email }}</p>
                                            </div>
                                        </td>
                                        {{-- <td class="px-6 py-4 text-gray-600">Room 101 - 4-Bed Dorm</td> --}}
                                        <td class="px-6 py-4 text-gray-600">
                                            {{ 'Room ' . $booking->room->room_number ?? 'null' }} -
                                            {{ 'Bed ' . $booking->room->capacity ?? 'null' }}</td>
                                        <td class="px-6 py-4 text-gray-600">
                                            {{ carbon\carbon::parse($booking->check_in_date)->format('M d D, Y') }}</td>
                                        <td class="px-6 py-4 text-gray-600">
                                            {{ carbon\carbon::parse($booking->check_out_date)->format('M d D, Y') }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium {{ detectBookingStatus($booking->status) }}">{{ $booking->status }}</span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <div class="flex items-center justify-end space-x-2">
                                                <button
                                                    class="view-booking-btn p-2 text-gray-400 hover:text-primary hover:bg-gray-100 rounded-lg transition-colors"
                                                    title="View" wire:click='viewBooking({{ $booking->id }})'>
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </button>
                                                <button
                                                    class="change-status-btn p-2 text-gray-400 hover:text-primary hover:bg-gray-100 rounded-lg transition-colors"
                                                    title="Change Status"
                                                    wire:click='changeStatus({{ $booking->id }})'>
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                        <p class="text-sm text-gray-500">Showing
                            {{ $bookings->firstItem() }}-{{ $bookings->lastItem() }} of {{ $bookings->total() }}
                            bookings</p>
                        <div class="flex items-center space-x-2">
                            <button wire:click='previousPage' wire:loading.attr='disabled'
                                @class([
                                    'p-2 rounded-lg border transition-colors',
                                    'border-gray-200 text-gray-400 cursor-not-allowed' => $bookings->onFirstPage(),
                                    'border-gray-200 text-gray-700 hover:bg-gray-50' => !$bookings->onFirstPage(),
                                ]) @disabled($bookings->onFirstPage())>

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>

                            </button>
                            @foreach (range(1, $bookings->lastPage()) as $page)
                                @if ($page == 1 || $page == $bookings->lastPage() || abs($page - $bookings->currentPage()) <= 1)
                                    <button wire:click='gotoPage({{ $page }})'
                                        class="w-10 h-10 rounded-lg font-medium transition-colors
                    {{ $bookings->currentPage() == $page
                        ? 'bg-primary text-white'
                        : 'border border-gray-200 text-gray-700 hover:bg-gray-50' }}">{{ $page }}
                                    </button>
                                @elseif ($page == 2 || $page == $bookings->lastPage() - 1)
                                    <span class="text-gray-400">...</span>
                                @endif
                            @endforeach

                            <button wire:click="nextPage" wire:loading.attr="disabled" @class([
                                'p-2 rounded-lg border transition-colors',
                                'border-gray-200 text-gray-400 cursor-not-allowed' => !$bookings->hasMorePages(),
                                'border-gray-200 text-gray-700 hover:bg-gray-50' => $bookings->hasMorePages(),
                            ])
                                @disabled(!$bookings->hasMorePages())>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Change Status Modal -->
    <div id="status-modal" class="fixed inset-0 z-50 hidden" role="dialog" aria-modal="true"
        aria-labelledby="status-modal-title" wire:ignore.self>
        <div class="fixed inset-0 bg-black/50 transition-opacity" aria-hidden="true"></div>
        <div class="fixed inset-0 overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4">
                <div class="relative w-full max-w-md bg-white rounded-2xl shadow-xl transform transition-all">
                    <div class="flex items-center justify-between p-6 border-b border-gray-100">
                        <h2 id="status-modal-title" class="text-xl font-bold text-gray-900">Change Booking Status</h2>
                        <button
                            class="close-modal p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="mb-6">
                            <p class="text-sm text-gray-500 mb-1">Booking ID</p>
                            <p class="font-mono text-primary font-medium">#BK-2024-001 |
                                {{ $bookingInfo->id ?? 'No Id' }}</p>
                        </div>
                        <div class="mb-6">
                            <p class="text-sm text-gray-500 mb-1">Current Status</p>
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium {{ detectBookingStatus(optional($bookingInfo)->status) }}">{{ optional($bookingInfo)->status }}</span>
                        </div>
                        <div>
                            <label for="new-status" class="block text-sm font-medium text-gray-700 mb-2">New
                                Status</label>
                            <select id="new-status"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none" wire:model='bookingStatus'>
                                <option value="pending">Pending</option>
                                <option value="confirmed">Confirmed</option>
                                <option value="checked_in">Checked In</option>
                                <option value="checked_out">Checked Out</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <label for="status-note" class="block text-sm font-medium text-gray-700 mb-2">Note
                                (optional)</label>
                            <textarea id="status-note" rows="3" placeholder="Add a note about this status change..."
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none resize-none"></textarea>
                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-3 p-6 border-t border-gray-100">
                        <button
                            class="close-modal px-5 py-2.5 text-gray-600 hover:text-gray-800 font-medium transition-colors" onclick="closeModal(statusModal)">Cancel</button>
                        <button
                            class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-xl font-medium transition-colors" wire:click='updateStatus()'>Update
                            Status</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- View Booking Modal -->
    <div id="view-modal" class="fixed inset-0 z-50 hidden" role="dialog" aria-modal="true"
        aria-labelledby="view-modal-title" wire:ignore.self>
        <div class="fixed inset-0 bg-black/50 transition-opacity" aria-hidden="true"></div>
        <div class="fixed inset-0 overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4">
                <div class="relative w-full max-w-lg bg-white rounded-2xl shadow-xl transform transition-all">
                    <div class="flex items-center justify-between p-6 border-b border-gray-100">
                        <h2 id="view-modal-title" class="text-xl font-bold text-gray-900">Booking Details</h2>
                        <button
                            class="close-modal p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    @if ($bookingInfo)
                        <div class="p-6 space-y-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Booking ID</p>
                                    <p class="font-mono text-primary font-medium">#BK-2024-001 |
                                        {{ $bookingInfo->id ?? 'null' }}</p>
                                </div>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">{{ $bookingInfo->status ?? 'null' }}</span>
                            </div>

                            <div class="border-t border-gray-100 pt-6">
                                <h3 class="text-sm font-semibold text-gray-900 mb-3">Guest Information</h3>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <p class="text-sm text-gray-500">Name</p>
                                        <p class="font-medium text-gray-900">{{ $bookingInfo->user->name }}</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Phone</p>
                                        <p class="font-medium text-gray-900">
                                            {{ $bookingInfo->user->phone ?? 'No Phone Number' }}</p>
                                    </div>
                                    <div class="col-span-2">
                                        <p class="text-sm text-gray-500">Email</p>
                                        <p class="font-medium text-gray-900">{{ $bookingInfo->user->email }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-gray-100 pt-6">
                                <h3 class="text-sm font-semibold text-gray-900 mb-3">booking Details </h3>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <p class="text-sm text-gray-500">Room</p>
                                        <p class="font-medium text-gray-900">
                                            {{ 'Room ' . $bookingInfo->room->room_number }}</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Type</p>
                                        <p class="font-medium text-gray-900">
                                            {{ $bookingInfo->room->roomType->name ?? 'No Type' }} |
                                            {{ $bookingInfo->room->capacity . '-Bed Dorm' }}</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Check In</p>

                                        <p class="font-medium text-gray-900">
                                            {{ carbon\carbon::parse($bookingInfo->check_in_date)->format('M d D, Y') }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Check Out</p>
                                        <p class="font-medium text-gray-900">
                                            {{ carbon\carbon::parse($bookingInfo->check_out_date)->format('M d D, Y') }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Guests</p>
                                        <p class="font-medium text-gray-900">2</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Nights</p>
                                        <p class="font-medium text-gray-900">{{ $nightCount }} Night</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-gray-100 pt-6">
                                <h3 class="text-sm font-semibold text-gray-900 mb-3">Payment Summary</h3>
                                <div class="space-y-2">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-500">Room Rate ({{ $nightCount }} nights x
                                            {{ $roomPrice }} DA)</span>
                                        <span class="text-gray-900">{{ $bookingTotalAmount }} DA</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-500">Taxes & Fees</span>
                                        <span class="text-gray-900">{{ $bookingTaxes }}</span>
                                    </div>
                                    <div class="flex justify-between font-medium pt-2 border-t border-gray-100">
                                        <span class="text-gray-900">Total</span>
                                        <span class="text-primary">{{ $bookingTaxes + $bookingTotalAmount }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="flex items-center justify-end gap-3 p-6 border-t border-gray-100">
                        <button
                            class="close-modal px-5 py-2.5 text-gray-600 hover:text-gray-800 font-medium transition-colors">Close</button>
                        <button
                            class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-xl font-medium transition-colors flex items-center space-x-2"
                            wire:click='printBookingDetails'>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                            </svg>
                            <span>Print</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');
        const openSidebarBtn = document.getElementById('open-sidebar');
        const closeSidebarBtn = document.getElementById('close-sidebar');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            sidebarOverlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden', 'lg:overflow-auto');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden', 'lg:overflow-auto');
        }

        openSidebarBtn.addEventListener('click', openSidebar);
        closeSidebarBtn.addEventListener('click', closeSidebar);
        sidebarOverlay.addEventListener('click', closeSidebar);

        const statusModal = document.getElementById('status-modal');
        const viewModal = document.getElementById('view-modal');

        function openModal(modal) {
            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
            const firstInput = modal.querySelector('input, select, button');
            if (firstInput) firstInput.focus();
        }


        //-----------------------VERIFIED------------------------

        function closeModal(modal) {
            modal.classList.add('hidden');
            @this.call('resetAfterClosingModal')
        }

        document.addEventListener('openBookingDetailsModal', function() { // verified
            openModal(viewModal);
        })

        document.addEventListener('openChangeStatusModal', function() { // verified
            openModal(statusModal);
        })

        //-----------------------------------------------

        // document.querySelectorAll('.change-status-btn').forEach(btn => {
        //     btn.addEventListener('click', () => openModal(statusModal));
        // });

        // document.querySelectorAll('.view-booking-btn').forEach(btn => {
        //     btn.addEventListener('click', () => openModal(viewModal));
        // });

        document.querySelectorAll('.close-modal').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const modal = e.target.closest('[role="dialog"]');
                if (modal) closeModal(modal);
            });
        });

        [statusModal, viewModal].forEach(modal => {
            modal.addEventListener('click', (e) => {
                if (e.target === modal.querySelector('.fixed.inset-0.bg-black\\/50')) {
                    closeModal(modal);
                }
            });
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                [viewModal, statusModal].forEach(modal => {
                    if (!modal.classList.contains('hidden')) {
                        closeModal(modal);
                    }
                });
            }
        });
    </script>
</div>
