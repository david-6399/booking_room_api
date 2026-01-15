<div>
  
  <!-- Main Content -->
  <main class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
    <!-- Success Icon & Message -->
    <div class="text-center mb-10">
      <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6 animate-bounce-once">
        <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
      </div>
      <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Booking Passed Successfully!</h1>
      <p class="text-gray-600 max-w-md mx-auto">Thank you for your reservation. A confirmation email has been sent to your inbox.</p>
    </div>

    <!-- Booking Reference -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 mb-6">
      <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pb-6 border-b border-gray-100">
        <div class="text-center sm:text-left">
          <p class="text-sm text-gray-500 mb-1">Booking Reference</p>
          <p class="text-2xl font-bold text-gray-900 tracking-wide" id="booking-ref">{{ 'SH-'.'26' . $booking->id }}</p>
        </div>
        <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-amber-100 text-amber-700">
          <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          {{ $booking->status }}
        </span>
      </div>

      <!-- Room Info -->
      <div class="flex items-start gap-4 py-6 border-b border-gray-100">
        <div class="w-24 h-24 rounded-xl overflow-hidden flex-shrink-0">
          <img
            src="https://images.pexels.com/photos/1743231/pexels-photo-1743231.jpeg?auto=compress&cs=tinysrgb&w=400"
            alt="Private Double Room"
            class="w-full h-full object-cover"
          >
        </div>
        <div>
          <h2 class="font-semibold text-gray-900 text-lg">Private Double Room</h2>
          <div class="flex items-center text-gray-500 text-sm mt-1">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <span>Up to {{ $room->capacity }} Guests</span>
          </div>
          <p class="text-primary font-semibold mt-2">{{ $room->roomType->price_per_night }} DA <span class="text-gray-500 font-normal text-sm">/night</span></p>
        </div>
      </div>

      <!-- Booking Details -->
      <div class="py-6 border-b border-gray-100">
        <h3 class="font-semibold text-gray-900 mb-4">Booking Details</h3>
        <div class="grid sm:grid-cols-2 gap-4">
          <div class="bg-gray-50 rounded-xl p-4">
            <p class="text-sm text-gray-500 mb-1">Check-in</p>
            <p class="font-semibold text-gray-900" id="conf-checkin">{{ $checkInDate }}</p>
            <p class="text-sm text-gray-500">From 2:00 PM</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-4">
            <p class="text-sm text-gray-500 mb-1">Check-out</p>
            <p class="font-semibold text-gray-900" id="conf-checkout">{{ $checkOutDate }}</p>
            <p class="text-sm text-gray-500">Until 11:00 AM</p>
          </div>
        </div>
        <div class="mt-4 grid sm:grid-cols-2 gap-4">
          <div>
            <p class="text-sm text-gray-500 mb-1">Total Nights</p>
            <p class="font-medium text-gray-900" id="conf-nights">{{ $totalNights }} nights</p>
          </div>
          <div>
            <p class="text-sm text-gray-500 mb-1">Guests</p>
            <p class="font-medium text-gray-900" id="conf-guests">2 Guests</p>
          </div>
        </div>
      </div>

      <!-- Guest Information -->
      <div class="py-6 border-b border-gray-100">
        <h3 class="font-semibold text-gray-900 mb-4">Guest Information</h3>
        <div class="space-y-3">
          <div class="flex items-center space-x-3">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
            <span class="text-gray-700" id="conf-name">{{ $guestInfo->name }}</span>
          </div>
          <div class="flex items-center space-x-3">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <span class="text-gray-700" id="conf-email">{{ $guestInfo->email }}</span>
          </div>
          <div class="flex items-center space-x-3">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            <span class="text-gray-700" id="conf-phone">{{ $guestInfo->phone ?? 'No Phone Number Has Been Setted !'}}</span>
          </div>
        </div>
      </div>

      <!-- Price Summary -->
      <div class="pt-6">
        <h3 class="font-semibold text-gray-900 mb-4">Price Summary</h3>
        <div class="space-y-3">
          <div class="flex justify-between text-sm">
            <span class="text-gray-600">{{ $room->roomType->price_per_night }} DA x <span id="conf-nights-count">{{ $totalNights }}</span> nights</span>
            <span class="text-gray-900" id="conf-subtotal">{{ $booking->total_amount }} DA</span>
          </div>
          <div class="flex justify-between text-sm">
            <span class="text-gray-600">Service fee</span>
            <span class="text-gray-900">10 DA</span>
          </div>
          <div class="flex justify-between font-semibold text-lg pt-3 border-t border-gray-100">
            <span class="text-gray-900">Total Paid</span>
            <span class="text-primary" id="conf-total">{{ $booking->total_amount + 10}}</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Important Info -->
    <div class="bg-cyan-50 rounded-2xl p-6 mb-6">
      <h3 class="font-semibold text-gray-900 mb-3 flex items-center">
        <svg class="w-5 h-5 text-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        Important Information
      </h3>
      <ul class="space-y-2 text-sm text-gray-600">
        <li class="flex items-start">
          <svg class="w-4 h-4 text-primary mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
          Check-in is available from 2:00 PM. Late check-in can be arranged upon request.
        </li>
        <li class="flex items-start">
          <svg class="w-4 h-4 text-primary mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
          Please bring a valid ID or passport for check-in verification.
        </li>
        <li class="flex items-start">
          <svg class="w-4 h-4 text-primary mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
          Free cancellation available up to 24 hours before check-in.
        </li>
      </ul>
    </div>

    <!-- Actions -->
    <div class="flex flex-col sm:flex-row gap-4">
      <a
        href="/"
        class="flex-1 bg-primary hover:bg-primary-dark text-white py-4 rounded-xl font-semibold transition-colors text-center"
      >
        Back to Home
      </a>
      <button
        onclick="window.print()"
        class="flex-1 bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 py-4 rounded-xl font-semibold transition-colors flex items-center justify-center space-x-2"
      >
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
        </svg>
        <span>Print Confirmation</span>
      </button>
    </div>

    <!-- Contact Support -->
    <div class="text-center mt-8">
      <p class="text-gray-500 text-sm">
        Need help? <a href="mailto:support@stayeasy.com" class="text-primary hover:underline">Contact our support team</a>
      </p>
    </div>
  </main>

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


    

    function formatDateLong(dateStr) {
      if (!dateStr) return 'December 22, 2024';
      const date = new Date(dateStr);
      return date.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
    }

    const checkin = urlParams.get('checkin');
    const checkout = urlParams.get('checkout');

    if (checkin) {
      document.getElementById('conf-checkin').textContent = formatDateLong(checkin);
    }
    if (checkout) {
      document.getElementById('conf-checkout').textContent = formatDateLong(checkout);
    }

    if (checkin && checkout) {
      const checkinDate = new Date(checkin);
      const checkoutDate = new Date(checkout);
      const nights = Math.ceil((checkoutDate - checkinDate) / (1000 * 60 * 60 * 24));

      if (nights > 0) {
        document.getElementById('conf-nights').textContent = nights + ' night' + (nights > 1 ? 's' : '');
        document.getElementById('conf-nights-count').textContent = nights;
        const subtotal = nights * 45;
        document.getElementById('conf-subtotal').textContent = '$' + subtotal;
        document.getElementById('conf-total').textContent = '$' + (subtotal + 10);
      }
    }

    const guests = urlParams.get('guests');
    if (guests) {
      document.getElementById('conf-guests').textContent = guests + ' Guest' + (guests > 1 ? 's' : '');
    }
  </script>

  <style>
    @keyframes bounce-once {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    .animate-bounce-once {
      animation: bounce-once 0.6s ease-in-out;
    }
    @media print {
      nav, footer, button { display: none !important; }
      main { padding: 0 !important; }
      body { background: white !important; }
    }
  </style>
</div>