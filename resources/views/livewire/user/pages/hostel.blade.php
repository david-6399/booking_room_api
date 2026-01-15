<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Downtown Central Hostel - StayEasy</title>
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
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
  <style>
    html { scroll-behavior: smooth; }
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
  </style>
</head>
<body class="bg-white text-gray-800 font-sans">
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
          <a href="contact.html" class="text-gray-600 hover:text-primary transition-colors">Contact</a>
        </div>

        <div class="hidden md:flex items-center space-x-4">
          <a href="login.html" class="text-gray-600 hover:text-primary font-medium transition-colors">Sign In</a>
          <a href="rooms.html" class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-lg font-medium transition-colors">
            Book Now
          </a>
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
          <a href="contact.html" class="text-gray-600 hover:text-primary transition-colors py-2">Contact</a>
          <a href="login.html" class="text-gray-600 hover:text-primary transition-colors py-2">Sign In</a>
          <a href="rooms.html" class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-lg font-medium transition-colors text-center mt-2">
            Book Now
          </a>
        </div>
      </div>
    </div>
  </nav>

  <section id="hero" class="relative">
    <div class="h-64 sm:h-80 md:h-96 relative overflow-hidden">
      <img src="https://images.pexels.com/photos/1838554/pexels-photo-1838554.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="Downtown Central Hostel" class="w-full h-full object-cover">
      <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
      <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-6 lg:p-8">
        <div class="max-w-7xl mx-auto">
          <div class="flex items-start justify-between flex-wrap gap-4">
            <div class="text-white">
              <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold">Downtown Central Hostel</h1>
              <div class="flex items-center mt-2 text-white/90 text-sm sm:text-base">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <span>123 Main Street, New York, NY 10001</span>
              </div>
            </div>
            <div class="flex items-center bg-white rounded-xl px-4 py-2 shadow-lg">
              <div class="text-right mr-3">
                <div class="text-sm text-gray-500">Rating</div>
                <div class="font-bold text-gray-900">Excellent</div>
              </div>
              <div class="bg-primary text-white font-bold text-lg px-3 py-1.5 rounded-lg">8.9</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <nav id="internal-nav" class="bg-white border-b border-gray-200 transition-shadow duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex overflow-x-auto hide-scrollbar -mb-px">
        <a href="#overview" class="internal-tab flex-shrink-0 px-4 py-4 text-sm font-medium text-primary border-b-2 border-primary transition-colors whitespace-nowrap" data-section="overview">
          Overview
        </a>
        <a href="#rooms" class="internal-tab flex-shrink-0 px-4 py-4 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300 transition-colors whitespace-nowrap" data-section="rooms">
          Rooms
        </a>
        <a href="#facilities" class="internal-tab flex-shrink-0 px-4 py-4 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300 transition-colors whitespace-nowrap" data-section="facilities">
          Facilities
        </a>
        <a href="#rules" class="internal-tab flex-shrink-0 px-4 py-4 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300 transition-colors whitespace-nowrap" data-section="rules">
          House Rules
        </a>
        <a href="#legal" class="internal-tab flex-shrink-0 px-4 py-4 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300 transition-colors whitespace-nowrap" data-section="legal">
          Legal & Policies
        </a>
        <a href="#reviews" class="internal-tab flex-shrink-0 px-4 py-4 text-sm font-medium text-gray-500 hover:text-gray-700 border-b-2 border-transparent hover:border-gray-300 transition-colors whitespace-nowrap" data-section="reviews">
          Reviews <span class="ml-1 bg-gray-100 text-gray-600 text-xs px-2 py-0.5 rounded-full">156</span>
        </a>
      </div>
    </div>
  </nav>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <section id="overview" class="scroll-mt-32 mb-12">
      <h2 class="text-2xl font-bold text-gray-900 mb-6">Overview</h2>
      <div class="grid lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
          <div class="prose prose-gray max-w-none">
            <p class="text-gray-600 leading-relaxed">
              Welcome to Downtown Central Hostel, your perfect base for exploring the heart of New York City. Located just steps away from Times Square and major subway lines, our hostel offers the ideal combination of comfort, convenience, and affordability.
            </p>
            <p class="text-gray-600 leading-relaxed mt-4">
              Whether you're a solo traveler looking to meet new friends or a group seeking adventure, our vibrant common areas and social events make it easy to connect. Enjoy our rooftop terrace with stunning city views, fully-equipped guest kitchen, and 24-hour reception.
            </p>
          </div>

          <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-4">
            <div class="bg-cyan-50 rounded-xl p-4 text-center">
              <div class="text-2xl font-bold text-primary">24</div>
              <div class="text-sm text-gray-600 mt-1">Rooms</div>
            </div>
            <div class="bg-cyan-50 rounded-xl p-4 text-center">
              <div class="text-2xl font-bold text-primary">120</div>
              <div class="text-sm text-gray-600 mt-1">Beds</div>
            </div>
            <div class="bg-cyan-50 rounded-xl p-4 text-center">
              <div class="text-2xl font-bold text-primary">8.9</div>
              <div class="text-sm text-gray-600 mt-1">Rating</div>
            </div>
            <div class="bg-cyan-50 rounded-xl p-4 text-center">
              <div class="text-2xl font-bold text-primary">156</div>
              <div class="text-sm text-gray-600 mt-1">Reviews</div>
            </div>
          </div>
        </div>

        <div class="bg-gray-50 rounded-2xl p-6">
          <h3 class="font-semibold text-gray-900 mb-4">Location</h3>
          <div class="aspect-video bg-gray-200 rounded-xl mb-4 overflow-hidden">
            <img src="https://images.pexels.com/photos/2816323/pexels-photo-2816323.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Map location" class="w-full h-full object-cover">
          </div>
          <div class="space-y-3 text-sm">
            <div class="flex items-start space-x-3">
              <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span class="text-gray-600">123 Main Street, New York, NY 10001</span>
            </div>
            <div class="flex items-start space-x-3">
              <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              <span class="text-gray-600">5 min walk to Times Square Station</span>
            </div>
            <div class="flex items-start space-x-3">
              <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
              </svg>
              <span class="text-gray-600">15 min to Central Park</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="rooms" class="scroll-mt-32 mb-12">
      <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Available Rooms</h2>
        <a href="rooms.html" class="text-primary hover:text-primary-dark font-medium text-sm flex items-center space-x-1 transition-colors">
          <span>View all rooms</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
          </svg>
        </a>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <a href="room-details.html" class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow overflow-hidden border border-gray-100">
          <div class="relative h-48 overflow-hidden">
            <img src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=800" alt="4-Bed Dorm" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-semibold px-3 py-1 rounded-full">Available</span>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-900 group-hover:text-primary transition-colors">4-Bed Mixed Dorm</h3>
            <div class="flex items-center text-gray-500 text-sm mt-1">
              <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span>4 Beds</span>
            </div>
            <div class="flex items-center justify-between mt-3">
              <div>
                <span class="text-xl font-bold text-primary">$25</span>
                <span class="text-gray-500 text-sm">/night</span>
              </div>
              <span class="text-primary text-sm font-medium">View Details</span>
            </div>
          </div>
        </a>

        <a href="room-details.html" class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow overflow-hidden border border-gray-100">
          <div class="relative h-48 overflow-hidden">
            <img src="https://images.pexels.com/photos/1743231/pexels-photo-1743231.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Private Room" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-semibold px-3 py-1 rounded-full">Available</span>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-900 group-hover:text-primary transition-colors">Private Double Room</h3>
            <div class="flex items-center text-gray-500 text-sm mt-1">
              <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span>2 Guests</span>
            </div>
            <div class="flex items-center justify-between mt-3">
              <div>
                <span class="text-xl font-bold text-primary">$45</span>
                <span class="text-gray-500 text-sm">/night</span>
              </div>
              <span class="text-primary text-sm font-medium">View Details</span>
            </div>
          </div>
        </a>

        <a href="room-details.html" class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow overflow-hidden border border-gray-100">
          <div class="relative h-48 overflow-hidden">
            <img src="https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Family Suite" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            <span class="absolute top-3 left-3 bg-orange-500 text-white text-xs font-semibold px-3 py-1 rounded-full">2 Left</span>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-900 group-hover:text-primary transition-colors">Deluxe Family Suite</h3>
            <div class="flex items-center text-gray-500 text-sm mt-1">
              <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span>6 Guests</span>
            </div>
            <div class="flex items-center justify-between mt-3">
              <div>
                <span class="text-xl font-bold text-primary">$85</span>
                <span class="text-gray-500 text-sm">/night</span>
              </div>
              <span class="text-primary text-sm font-medium">View Details</span>
            </div>
          </div>
        </a>
      </div>
    </section>

    <section id="facilities" class="scroll-mt-32 mb-12">
      <h2 class="text-2xl font-bold text-gray-900 mb-6">Facilities & Amenities</h2>
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
          <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
            </svg>
          </div>
          <span class="text-gray-700 font-medium">Free WiFi</span>
        </div>
        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
          <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
          </div>
          <span class="text-gray-700 font-medium">Rooftop Terrace</span>
        </div>
        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
          <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <span class="text-gray-700 font-medium">24/7 Reception</span>
        </div>
        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
          <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
          </div>
          <span class="text-gray-700 font-medium">Secure Lockers</span>
        </div>
        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
          <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
            </svg>
          </div>
          <span class="text-gray-700 font-medium">Luggage Storage</span>
        </div>
        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
          <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"/>
            </svg>
          </div>
          <span class="text-gray-700 font-medium">Guest Kitchen</span>
        </div>
        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
          <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
          </div>
          <span class="text-gray-700 font-medium">Common Area</span>
        </div>
        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
          <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707"/>
            </svg>
          </div>
          <span class="text-gray-700 font-medium">Air Conditioning</span>
        </div>
        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
          <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            </svg>
          </div>
          <span class="text-gray-700 font-medium">Daily Cleaning</span>
        </div>
        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
          <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
          </div>
          <span class="text-gray-700 font-medium">TV Lounge</span>
        </div>
        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
          <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
            </svg>
          </div>
          <span class="text-gray-700 font-medium">Towel Rental</span>
        </div>
        <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-xl">
          <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
          </div>
          <span class="text-gray-700 font-medium">Power Outlets</span>
        </div>
      </div>
    </section>

    <section id="rules" class="scroll-mt-32 mb-12">
      <h2 class="text-2xl font-bold text-gray-900 mb-6">House Rules</h2>
      <div class="bg-gray-50 rounded-2xl p-6">
        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <h3 class="font-semibold text-gray-900 mb-4">Check-in / Check-out</h3>
            <div class="space-y-3">
              <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                  <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                  </svg>
                </div>
                <div>
                  <p class="font-medium text-gray-900">Check-in</p>
                  <p class="text-sm text-gray-500">2:00 PM - 10:00 PM</p>
                </div>
              </div>
              <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-red-100 rounded-lg flex items-center justify-center">
                  <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                  </svg>
                </div>
                <div>
                  <p class="font-medium text-gray-900">Check-out</p>
                  <p class="text-sm text-gray-500">Before 11:00 AM</p>
                </div>
              </div>
            </div>
          </div>

          <div>
            <h3 class="font-semibold text-gray-900 mb-4">General Rules</h3>
            <div class="space-y-2">
              <div class="flex items-center space-x-2 text-sm">
                <svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
                <span class="text-gray-600">No smoking in rooms or common areas</span>
              </div>
              <div class="flex items-center space-x-2 text-sm">
                <svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
                <span class="text-gray-600">No pets allowed</span>
              </div>
              <div class="flex items-center space-x-2 text-sm">
                <svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
                <span class="text-gray-600">Quiet hours: 10:00 PM - 8:00 AM</span>
              </div>
              <div class="flex items-center space-x-2 text-sm">
                <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <span class="text-gray-600">Valid ID required at check-in</span>
              </div>
              <div class="flex items-center space-x-2 text-sm">
                <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <span class="text-gray-600">Guests must be 18+ years old</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="legal" class="scroll-mt-32 mb-12">
      <h2 class="text-2xl font-bold text-gray-900 mb-6">Legal & Policies</h2>
      <div class="space-y-4">
        <details class="group bg-gray-50 rounded-xl">
          <summary class="flex items-center justify-between p-4 cursor-pointer list-none">
            <span class="font-semibold text-gray-900">Cancellation Policy</span>
            <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </summary>
          <div class="px-4 pb-4 text-sm text-gray-600 leading-relaxed">
            <ul class="list-disc list-inside space-y-2">
              <li>Free cancellation up to 48 hours before check-in</li>
              <li>Cancellations made within 48 hours will be charged 50% of the total booking</li>
              <li>No-shows will be charged the full amount</li>
              <li>Refunds are processed within 5-7 business days</li>
            </ul>
          </div>
        </details>

        <details class="group bg-gray-50 rounded-xl">
          <summary class="flex items-center justify-between p-4 cursor-pointer list-none">
            <span class="font-semibold text-gray-900">Privacy Policy</span>
            <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </summary>
          <div class="px-4 pb-4 text-sm text-gray-600 leading-relaxed">
            <p>We collect and process your personal data in accordance with GDPR regulations. Your information is used solely for booking management, communication, and improving our services. We do not share your data with third parties without your consent.</p>
          </div>
        </details>

        <details class="group bg-gray-50 rounded-xl">
          <summary class="flex items-center justify-between p-4 cursor-pointer list-none">
            <span class="font-semibold text-gray-900">Terms & Conditions</span>
            <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </summary>
          <div class="px-4 pb-4 text-sm text-gray-600 leading-relaxed">
            <p>By making a reservation, you agree to our house rules and policies. The hostel reserves the right to refuse service or terminate stays for violations. Guests are responsible for their belongings and any damages caused during their stay.</p>
          </div>
        </details>

        <details class="group bg-gray-50 rounded-xl">
          <summary class="flex items-center justify-between p-4 cursor-pointer list-none">
            <span class="font-semibold text-gray-900">Liability & Insurance</span>
            <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </summary>
          <div class="px-4 pb-4 text-sm text-gray-600 leading-relaxed">
            <p>The hostel is not responsible for loss or theft of personal belongings. We recommend using the secure lockers provided. Travel insurance is strongly recommended for all guests.</p>
          </div>
        </details>
      </div>
    </section>

    <section id="reviews" class="scroll-mt-32 mb-12">
      <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Guest Reviews</h2>
        <span class="text-gray-500 text-sm">156 reviews</span>
      </div>

      <div class="bg-gray-50 rounded-2xl p-6 mb-6">
        <div class="flex flex-wrap items-center gap-6">
          <div class="text-center">
            <div class="text-4xl font-bold text-primary">8.9</div>
            <div class="text-sm text-gray-500 mt-1">Excellent</div>
          </div>
          <div class="flex-1 min-w-[200px]">
            <div class="space-y-2">
              <div class="flex items-center space-x-3">
                <span class="text-sm text-gray-600 w-24">Cleanliness</span>
                <div class="flex-1 bg-gray-200 rounded-full h-2">
                  <div class="bg-primary h-2 rounded-full" style="width: 92%"></div>
                </div>
                <span class="text-sm font-medium text-gray-900 w-8">9.2</span>
              </div>
              <div class="flex items-center space-x-3">
                <span class="text-sm text-gray-600 w-24">Location</span>
                <div class="flex-1 bg-gray-200 rounded-full h-2">
                  <div class="bg-primary h-2 rounded-full" style="width: 95%"></div>
                </div>
                <span class="text-sm font-medium text-gray-900 w-8">9.5</span>
              </div>
              <div class="flex items-center space-x-3">
                <span class="text-sm text-gray-600 w-24">Staff</span>
                <div class="flex-1 bg-gray-200 rounded-full h-2">
                  <div class="bg-primary h-2 rounded-full" style="width: 90%"></div>
                </div>
                <span class="text-sm font-medium text-gray-900 w-8">9.0</span>
              </div>
              <div class="flex items-center space-x-3">
                <span class="text-sm text-gray-600 w-24">Value</span>
                <div class="flex-1 bg-gray-200 rounded-full h-2">
                  <div class="bg-primary h-2 rounded-full" style="width: 85%"></div>
                </div>
                <span class="text-sm font-medium text-gray-900 w-8">8.5</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="space-y-4">
        <div class="bg-white border border-gray-100 rounded-xl p-5">
          <div class="flex items-start justify-between mb-3">
            <div class="flex items-center space-x-3">
              <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                <span class="text-primary font-semibold">JS</span>
              </div>
              <div>
                <p class="font-medium text-gray-900">John Smith</p>
                <p class="text-sm text-gray-500">United States</p>
              </div>
            </div>
            <div class="flex items-center space-x-1">
              <div class="bg-primary text-white text-sm font-bold px-2 py-1 rounded">9.0</div>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">Great location and friendly staff! The room was clean and comfortable. Perfect for a short stay in NYC. The rooftop terrace was a nice bonus.</p>
          <p class="text-xs text-gray-400 mt-3">December 2024</p>
        </div>

        <div class="bg-white border border-gray-100 rounded-xl p-5">
          <div class="flex items-start justify-between mb-3">
            <div class="flex items-center space-x-3">
              <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                <span class="text-primary font-semibold">EM</span>
              </div>
              <div>
                <p class="font-medium text-gray-900">Emma Mueller</p>
                <p class="text-sm text-gray-500">Germany</p>
              </div>
            </div>
            <div class="flex items-center space-x-1">
              <div class="bg-primary text-white text-sm font-bold px-2 py-1 rounded">8.5</div>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">Really enjoyed my stay here. The common area is great for meeting other travelers. Only minor complaint is the bathroom could use an update, but overall excellent value.</p>
          <p class="text-xs text-gray-400 mt-3">November 2024</p>
        </div>

        <div class="bg-white border border-gray-100 rounded-xl p-5">
          <div class="flex items-start justify-between mb-3">
            <div class="flex items-center space-x-3">
              <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                <span class="text-primary font-semibold">AT</span>
              </div>
              <div>
                <p class="font-medium text-gray-900">Akira Tanaka</p>
                <p class="text-sm text-gray-500">Japan</p>
              </div>
            </div>
            <div class="flex items-center space-x-1">
              <div class="bg-primary text-white text-sm font-bold px-2 py-1 rounded">9.5</div>
            </div>
          </div>
          <p class="text-gray-600 text-sm leading-relaxed">Best hostel experience in New York! The staff went above and beyond to help with recommendations. Very clean, modern facilities, and amazing location near subway.</p>
          <p class="text-xs text-gray-400 mt-3">November 2024</p>
        </div>
      </div>

      <div class="text-center mt-6">
        <button class="text-primary hover:text-primary-dark font-medium text-sm flex items-center space-x-1 mx-auto transition-colors">
          <span>See all 156 reviews</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>
      </div>
    </section>
  </main>

  <footer class="bg-gray-900 text-gray-300 py-12">
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
            <li><a href="contact.html" class="hover:text-white transition-colors">Contact</a></li>
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

    const internalNav = document.getElementById('internal-nav');
    const heroSection = document.getElementById('hero');
    const mainNav = document.querySelector('nav.sticky');
    let isSticky = false;

    function handleScroll() {
      const heroBottom = heroSection.getBoundingClientRect().bottom;
      const mainNavHeight = mainNav.offsetHeight;

      if (heroBottom <= mainNavHeight && !isSticky) {
        isSticky = true;
        internalNav.classList.add('sticky', 'top-16', 'z-40', 'shadow-sm');
      } else if (heroBottom > mainNavHeight && isSticky) {
        isSticky = false;
        internalNav.classList.remove('sticky', 'top-16', 'z-40', 'shadow-sm');
      }
    }

    const tabs = document.querySelectorAll('.internal-tab');
    const sections = ['overview', 'rooms', 'facilities', 'rules', 'legal', 'reviews'];

    function updateActiveTab() {
      const scrollPos = window.scrollY + 200;

      let currentSection = sections[0];
      sections.forEach(sectionId => {
        const section = document.getElementById(sectionId);
        if (section && section.offsetTop <= scrollPos) {
          currentSection = sectionId;
        }
      });

      tabs.forEach(tab => {
        const isActive = tab.dataset.section === currentSection;
        if (isActive) {
          tab.classList.add('text-primary', 'border-primary');
          tab.classList.remove('text-gray-500', 'border-transparent');
        } else {
          tab.classList.remove('text-primary', 'border-primary');
          tab.classList.add('text-gray-500', 'border-transparent');
        }
      });
    }

    window.addEventListener('scroll', () => {
      handleScroll();
      updateActiveTab();
    });

    handleScroll();
    updateActiveTab();
  </script>
</body>
</html>
