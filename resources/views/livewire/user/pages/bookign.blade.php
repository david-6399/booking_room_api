<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complete Your Booking - StayEasy</title>
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
<body class="bg-gray-50 text-gray-800 font-sans">
  <!-- Navbar -->
  <nav class="sticky top-0 z-50 bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <a href="index.html" class="flex items-center space-x-2">
          <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
          </div>
          <span class="text-xl font-bold text-gray-900">StayEasy</span>
        </a>

        <div class="hidden md:flex items-center space-x-8">
          <a href="index.html" class="text-gray-600 hover:text-primary transition-colors">Home</a>
          <a href="rooms.html" class="text-gray-600 hover:text-primary transition-colors">Rooms</a>
          <a href="index.html#contact" class="text-gray-600 hover:text-primary transition-colors">Contact</a>
        </div>

        <div class="hidden md:block">
          <a href="rooms.html" class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-lg font-medium transition-colors">
            Book Now
          </a>
        </div>

        <div>
          <button class="relative p-2 text-gray-600 hover:text-primary hover:bg-gray-100 rounded-lg transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
            </svg>
            <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">3</span>
          </button>

          <div class="absolute right-0 mt-2 w-80 bg-white rounded-xl shadow-lg border border-gray-200 z-50">
            <div class="p-4 border-b border-gray-100">
              <div class="flex items-center justify-between">
                <h3 class="font-semibold text-gray-900">Notifications</h3>
                <span class="text-xs text-primary hover:text-primary-dark cursor-pointer font-medium">Mark all read</span>
              </div>
            </div>

            <div class="max-h-96 overflow-y-auto">
              <!-- Unread Notification -->
              <div class="p-4 hover:bg-gray-50 cursor-pointer border-b border-gray-100 bg-cyan-50">
                <div class="flex items-start space-x-3">
                  <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                  <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900">New booking confirmed</p>
                    <p class="text-xs text-gray-600 mt-1">Room 201 - Private Double has been booked</p>
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
                    <p class="text-xs text-gray-600 mt-1">New 5-star review for Private Double Room</p>
                    <p class="text-xs text-gray-400 mt-1">3 hours ago</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="p-3 border-t border-gray-100 text-center">
              <a href="#" class="text-sm text-primary hover:text-primary-dark font-medium">View all notifications</a>
            </div>
          </div>

          <!-- Empty State Alternative -->
          <div class="absolute right-0 mt-2 w-80 bg-white rounded-xl shadow-lg border border-gray-200 z-50 hidden">
            <div class="p-4 border-b border-gray-100">
              <h3 class="font-semibold text-gray-900">Notifications</h3>
            </div>
            <div class="p-8 text-center">
              <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
              </div>
              <p class="text-gray-600 text-sm">No notifications yet</p>
              <p class="text-gray-400 text-xs mt-1">We'll notify you when something arrives</p>
            </div>
          </div>
        </div>
        </div>

        <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
          <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>

      <div id="mobile-menu" class="hidden md:hidden pb-4">
        <div class="flex flex-col space-y-3">
          <a href="index.html" class="text-gray-600 hover:text-primary transition-colors py-2">Home</a>
          <a href="rooms.html" class="text-gray-600 hover:text-primary transition-colors py-2">Rooms</a>
          <a href="index.html#contact" class="text-gray-600 hover:text-primary transition-colors py-2">Contact</a>
          <a href="rooms.html" class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-lg font-medium transition-colors text-center mt-2">
            Book Now
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <div class="bg-white border-b border-gray-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
      <div class="flex items-center space-x-4">
        <a href="room-details.html" class="p-2 rounded-lg hover:bg-gray-100 transition-colors">
          <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
          </svg>
        </a>
        <div>
          <h1 class="text-2xl font-bold text-gray-900">Complete Your Booking</h1>
          <p class="text-gray-500 text-sm mt-1">Please fill in your details to confirm your reservation</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Booking Form -->
      <div class="lg:col-span-2">
        <form action="confirmation.html" method="get" id="booking-form" class="space-y-6">
          <!-- Guest Information -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-5">Guest Information</h2>

            <div class="space-y-5">
              <!-- Full Name -->
              <div>
                <label for="fullname" class="block text-sm font-medium text-gray-700 mb-2">
                  Full Name <span class="text-red-500">*</span>
                </label>
                <input
                  type="text"
                  id="fullname"
                  name="fullname"
                  required
                  placeholder="Enter your full name"
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
                >
              </div>

              <!-- Email -->
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                  Email Address <span class="text-red-500">*</span>
                </label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  required
                  placeholder="you@example.com"
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
                >
                <p class="mt-1.5 text-xs text-gray-500">We'll send your booking confirmation here</p>
              </div>

              <!-- Phone -->
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                  Phone Number <span class="text-red-500">*</span>
                </label>
                <input
                  type="tel"
                  id="phone"
                  name="phone"
                  required
                  placeholder="+1 (555) 000-0000"
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-gray-400"
                >
              </div>
            </div>
          </div>

          <!-- Booking Details -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-5">Booking Details</h2>

            <div class="grid sm:grid-cols-2 gap-5">
              <!-- Check-in -->
              <div>
                <label for="checkin" class="block text-sm font-medium text-gray-700 mb-2">
                  Check-in Date <span class="text-red-500">*</span>
                </label>
                <input
                  type="date"
                  id="checkin"
                  name="checkin"
                  required
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                >
              </div>

              <!-- Check-out -->
              <div>
                <label for="checkout" class="block text-sm font-medium text-gray-700 mb-2">
                  Check-out Date <span class="text-red-500">*</span>
                </label>
                <input
                  type="date"
                  id="checkout"
                  name="checkout"
                  required
                  class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
                >
              </div>

              <!-- Guests -->
              <div class="sm:col-span-2">
                <label for="guests" class="block text-sm font-medium text-gray-700 mb-2">
                  Number of Guests <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                  <select
                    id="guests"
                    name="guests"
                    required
                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all appearance-none bg-white cursor-pointer"
                  >
                    <option value="1">1 Guest</option>
                    <option value="2">2 Guests</option>
                  </select>
                  <svg class="w-5 h-5 text-gray-400 absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                  </svg>
                </div>
              </div>
            </div>
          </div>

          <!-- Special Requests -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-5">Special Requests</h2>

            <div>
              <label for="requests" class="block text-sm font-medium text-gray-700 mb-2">
                Any special requests? (Optional)
              </label>
              <textarea
                id="requests"
                name="requests"
                rows="4"
                placeholder="Early check-in, late check-out, dietary requirements, etc."
                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all resize-none placeholder:text-gray-400"
              ></textarea>
              <p class="mt-1.5 text-xs text-gray-500">Special requests are subject to availability</p>
            </div>
          </div>

          <!-- Terms & Submit (Mobile) -->
          <div class="lg:hidden space-y-5">
            <div class="flex items-start space-x-3">
              <input
                type="checkbox"
                id="terms-mobile"
                name="terms"
                required
                class="w-5 h-5 rounded border-gray-300 text-primary focus:ring-primary mt-0.5"
              >
              <label for="terms-mobile" class="text-sm text-gray-600">
                I agree to the <a href="#" class="text-primary hover:underline">Terms of Service</a> and <a href="#" class="text-primary hover:underline">Privacy Policy</a>
              </label>
            </div>

            <button
              type="submit"
              class="w-full bg-primary hover:bg-primary-dark text-white py-4 rounded-xl font-semibold transition-colors text-lg"
            >
              Confirm Booking
            </button>
          </div>
        </form>
      </div>

      <!-- Booking Summary (Sidebar) -->
      <div class="lg:col-span-1">
        <div class="sticky top-24">
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <!-- Room Image -->
            <div class="h-40 overflow-hidden">
              <img
                src="https://images.pexels.com/photos/1743231/pexels-photo-1743231.jpeg?auto=compress&cs=tinysrgb&w=600"
                alt="Private Double Room"
                class="w-full h-full object-cover"
              >
            </div>

            <div class="p-5">
              <h3 class="font-semibold text-gray-900">Private Double Room</h3>
              <div class="flex items-center text-gray-500 text-sm mt-1">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <span>Up to 2 Guests</span>
              </div>

              <!-- Booking Summary -->
              <div class="mt-5 pt-5 border-t border-gray-100 space-y-3">
                <div class="flex justify-between text-sm">
                  <span class="text-gray-600">Check-in</span>
                  <span class="text-gray-900 font-medium" id="summary-checkin">Dec 22, 2024</span>
                </div>
                <div class="flex justify-between text-sm">
                  <span class="text-gray-600">Check-out</span>
                  <span class="text-gray-900 font-medium" id="summary-checkout">Dec 25, 2024</span>
                </div>
                <div class="flex justify-between text-sm">
                  <span class="text-gray-600">Guests</span>
                  <span class="text-gray-900 font-medium" id="summary-guests">2 Guests</span>
                </div>
              </div>

              <!-- Price Breakdown -->
              <div class="mt-5 pt-5 border-t border-gray-100 space-y-3">
                <div class="flex justify-between text-sm">
                  <span class="text-gray-600">$45 x <span id="summary-nights">3</span> nights</span>
                  <span class="text-gray-900" id="summary-subtotal">$135</span>
                </div>
                <div class="flex justify-between text-sm">
                  <span class="text-gray-600">Service fee</span>
                  <span class="text-gray-900">$10</span>
                </div>
                <div class="flex justify-between font-semibold text-lg pt-3 border-t border-gray-100">
                  <span class="text-gray-900">Total</span>
                  <span class="text-primary" id="summary-total">$145</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Terms & Submit (Desktop) -->
          <div class="hidden lg:block mt-6 space-y-4">
            <div class="flex items-start space-x-3">
              <input
                type="checkbox"
                id="terms-desktop"
                form="booking-form"
                name="terms"
                required
                class="w-5 h-5 rounded border-gray-300 text-primary focus:ring-primary mt-0.5"
              >
              <label for="terms-desktop" class="text-sm text-gray-600">
                I agree to the <a href="#" class="text-primary hover:underline">Terms of Service</a> and <a href="#" class="text-primary hover:underline">Privacy Policy</a>
              </label>
            </div>

            <button
              type="submit"
              form="booking-form"
              class="w-full bg-primary hover:bg-primary-dark text-white py-4 rounded-xl font-semibold transition-colors text-lg"
            >
              Confirm Booking
            </button>

            <p class="text-center text-xs text-gray-500">You will receive a confirmation email shortly</p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 py-12 mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="sm:col-span-2 lg:col-span-1">
          <a href="index.html" class="flex items-center space-x-2 mb-4">
            <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
              </svg>
            </div>
            <span class="text-xl font-bold text-white">StayEasy</span>
          </a>
          <p class="text-sm text-gray-400">Comfortable and affordable hostel rooms for travelers worldwide.</p>
        </div>

        <div>
          <h4 class="text-white font-semibold mb-4">Quick Links</h4>
          <ul class="space-y-2 text-sm">
            <li><a href="index.html" class="hover:text-white transition-colors">Home</a></li>
            <li><a href="rooms.html" class="hover:text-white transition-colors">Rooms</a></li>
            <li><a href="#" class="hover:text-white transition-colors">About Us</a></li>
            <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-white font-semibold mb-4">Contact</h4>
          <ul class="space-y-2 text-sm">
            <li class="flex items-center space-x-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
              <span>hello@stayeasy.com</span>
            </li>
            <li class="flex items-center space-x-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
              <span>+1 (555) 123-4567</span>
            </li>
          </ul>
        </div>

        <div>
          <h4 class="text-white font-semibold mb-4">Follow Us</h4>
          <div class="flex space-x-4">
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
              </svg>
            </a>
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
              </svg>
            </a>
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="border-t border-gray-800 mt-10 pt-8 text-center text-sm text-gray-500">
        <p>2024 StayEasy. All rights reserved.</p>
      </div>
    </div>
  </footer>

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
    const checkinInput = document.getElementById('checkin');
    const checkoutInput = document.getElementById('checkout');
    const guestsInput = document.getElementById('guests');

    checkinInput.setAttribute('min', today);

    const defaultCheckin = new Date();
    const defaultCheckout = new Date();
    defaultCheckout.setDate(defaultCheckout.getDate() + 3);

    checkinInput.value = defaultCheckin.toISOString().split('T')[0];
    checkoutInput.value = defaultCheckout.toISOString().split('T')[0];

    function formatDate(dateStr) {
      const date = new Date(dateStr);
      return date.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
    }

    function updateSummary() {
      const checkin = new Date(checkinInput.value);
      const checkout = new Date(checkoutInput.value);
      const nights = Math.ceil((checkout - checkin) / (1000 * 60 * 60 * 24));

      document.getElementById('summary-checkin').textContent = formatDate(checkinInput.value);
      document.getElementById('summary-checkout').textContent = formatDate(checkoutInput.value);
      document.getElementById('summary-guests').textContent = guestsInput.value + ' Guest' + (guestsInput.value > 1 ? 's' : '');

      if (nights > 0) {
        document.getElementById('summary-nights').textContent = nights;
        const subtotal = nights * 45;
        document.getElementById('summary-subtotal').textContent = '$' + subtotal;
        document.getElementById('summary-total').textContent = '$' + (subtotal + 10);
      }
    }

    checkinInput.addEventListener('change', function() {
      const nextDay = new Date(this.value);
      nextDay.setDate(nextDay.getDate() + 1);
      checkoutInput.setAttribute('min', nextDay.toISOString().split('T')[0]);
      if (checkoutInput.value && new Date(checkoutInput.value) <= new Date(this.value)) {
        checkoutInput.value = nextDay.toISOString().split('T')[0];
      }
      updateSummary();
    });

    checkoutInput.addEventListener('change', updateSummary);
    guestsInput.addEventListener('change', updateSummary);

    updateSummary();
  </script>
</body>
</html>
