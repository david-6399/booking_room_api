<div>
    <div class="flex min-h-screen">
        <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-40 lg:hidden hidden"></div>

        <div class="flex-1 flex flex-col min-w-0">
            <header class="sticky top-0 z-30">
                <div class="flex items-center justify-end h-16 px-4 sm:px-6 lg:px-8">

                    <div class="flex items-center space-x-4">
                        <button id="open-create-modal"
                            class="bg-primary hover:bg-primary-dark text-white px-4 py-2 rounded-lg font-medium transition-colors flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            <span class="hidden sm:inline">Add Room</span>
                        </button>
                    </div>
                </div>
            </header>

            <main class="flex-1 p-4 sm:p-6 lg:p-8">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-4 sm:p-6 border-b border-gray-100">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div class="relative flex-1 max-w-md">
                                <input type="text" placeholder="Search room number or capacity..."
                                    class="w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none" wire:model.live='searchRoom'>
                                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <div class="flex items-center space-x-3">
                                <select
                                    class="px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                    wire:model.live='perType'>
                                    <option value="">All Types</option>
                                    @foreach ($roomTypes as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>

                                <select
                                    class="px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                    wire:model.live='perStatus'>
                                    <option value=""> Select Status </option>
                                    <option value="available">Available</option>
                                    <option value="occupied">Occupied</option>
                                    <option value="maintenance">Maintenance</option>
                                </select>

                                <select
                                    class="px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                    wire:model.live='perPage'>
                                    <option value=""> 6 Per Page </option>
                                    <option value="10">10 Per Page</option>
                                    <option value="15">15 Per Page</option>
                                    <option value="20">20 Per Page</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Room</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Type</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Capacity</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Price</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                    <th
                                        class="px-6 py-4 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach ($rooms as $room)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center space-x-3">
                                                <img src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=80&h=60&dpr=1"
                                                    alt="Room" class="w-12 h-9 rounded-lg object-cover">
                                                <div>
                                                    <p class="font-medium text-gray-900">Room {{ $room->room_number }}
                                                    </p>
                                                    <p class="text-sm text-gray-500">Ground Floor</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-gray-600">{{ $room->roomType->name ?? 'null' }}</td>
                                        <td class="px-6 py-4 text-gray-600">{{ $room->capacity }} guests</td>
                                        <td class="px-6 py-4 text-gray-900 font-medium">{{ $room->price_per_night }}
                                            DA/night</td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium
                                            {{ detectRoomStatus($room->status) }} ">{{ $room->status }}</span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <div class="flex items-center justify-end space-x-2">
                                                <button
                                                    class=" p-2 text-gray-400 hover:text-primary hover:bg-gray-100 rounded-lg transition-colors"
                                                    title="Edit" wire:click='openEditRoomPopup({{ $room->id }})'>
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </button>
                                                <button
                                                    class="delete-room-btn p-2 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-colors"
                                                    title="Delete" wire:click='deleteRoom({{ $room->id }})'>
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="lg:px-20 lg:py-4">
                    {{ $rooms->links() }}
                </div>
            </main>
        </div>
    </div>

    <!-- Create Room Modal -->
    <div id="create-modal" class="fixed inset-0 z-50 hidden" role="dialog" aria-modal="true"
        aria-labelledby="create-modal-title" wire:ignore.self>

        <div class="fixed inset-0 bg-black/50 transition-opacity" aria-hidden="true"></div>
        <div class="fixed inset-0 overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4">
                <div class="relative w-full max-w-lg bg-white rounded-2xl shadow-xl transform transition-all">
                    <div class="flex items-center justify-between p-6 border-b border-gray-100">
                        <h2 id="create-modal-title" class="text-xl font-bold text-gray-900">Add New Room</h2>
                        <button
                            class="close-modal p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <form class="p-6 space-y-5" wire:submit='createRoom()'>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="room-number" class="block text-sm font-medium text-gray-700 mb-2">Room
                                    Number</label>
                                <input type="text" id="room-number" placeholder="e.g., 101"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent invalid:border-red-500  outline-none @error('room.room_number')
                                        border-red-500
                                    @enderror"
                                    wire:model='room.room_number'>
                                @error('room.room_number')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="room-floor"
                                    class="block text-sm font-medium text-gray-700 mb-2">Floor</label>
                                <select id="room-floor"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                                    <option>Ground Floor</option>
                                    <option>First Floor</option>
                                    <option>Second Floor</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="room-type" class="block text-sm font-medium text-gray-700 mb-2">Room
                                Type</label>
                            <select id="room-type"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                wire:model='room.room_type_id'>
                                @foreach ($roomTypes as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="room-capacity"
                                    class="block text-sm font-medium text-gray-700 mb-2">Capacity</label>
                                <input type="number" id="room-capacity" placeholder="4" min="1"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                    wire:model='room.capacity'>
                            </div>
                            <div>
                                <label for="room-price"
                                    class="block text-sm font-medium text-gray-700 mb-2">Price/Night</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">$</span>
                                    <input type="number" id="room-price" placeholder="25" min="0"
                                        class="w-full pl-8 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                        wire:model='room.price_per_night'>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Amenities</label>
                            <div class="grid grid-cols-2 gap-2">
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox"
                                        class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-gray-600">WiFi</span>
                                </label>
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox"
                                        class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-gray-600">AC</span>
                                </label>
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox"
                                        class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-gray-600">Locker</span>
                                </label>
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox"
                                        class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-gray-600">En-suite</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <label for="room-description"
                                class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                            <textarea id="room-description" rows="3" placeholder="Brief description of the room..."
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none resize-none"></textarea>
                        </div>
                        {{-- upload images --}}
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">A. Multiple Image Upload (Room Modal)
                            </h3>
                            <p class="text-sm text-gray-600 mb-4">Insert into Create/Edit Room modal</p>

                            <div class="bg-white p-6 rounded-xl border border-gray-200">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Room Images</label>

                                <!-- Upload Area -->
                                <label for="images" id="dropzone"
                                    class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center hover:border-primary hover:bg-gray-50 transition-all duration-300 cursor-pointer block">

                                    <div class="flex flex-col items-center pointer-events-none">
                                        <div
                                            class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mb-3">
                                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14 m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>

                                        <p class="text-sm text-gray-600 mb-1">
                                            <span class="text-primary font-medium">Click to upload</span> or drag and
                                            drop
                                        </p>
                                        <p class="text-xs text-gray-400">PNG, JPG up to 10MB (max 5 images)</p>
                                    </div>

                                    <!-- Hidden Input -->
                                    <input id="images" type="file" class="hidden" multiple
                                        wire:model='images'>
                                </label>
                                <button disabled class="border border-gray-200 w-full text-gray-700 px-5 py-2.5 rounded-lg font-medium flex items-center space-x-2 opacity-75 cursor-not-allowed" wire:loading wire:target='images'>
                                    <svg class="animate-spin h-4 w-full text-gray-600" fill="none"
                                        viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                            stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                        </path>
                                    </svg>
                                    <span>Loading ...</span>
                                </button>

                                <!-- Image Preview Grid -->
                                <div class="grid grid-cols-5 gap-3 mt-4">
                                    @if($images)
                                        @foreach ($images as $index => $image )
                                            <div class="relative group">
                                                <img src="{{ $image->temporaryUrl() }}"
                                                    alt="Preview" class="w-full h-20 object-cover rounded-lg">
                                                <button wire:click='removeImage({{ $index }})'
                                                    class="absolute top-1 right-1 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity" >
                                                    <svg class="w-3 h-3" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end gap-3 p-6 border-t border-gray-100">
                            <button
                                class="close-modal px-5 py-2.5 text-gray-600 hover:text-gray-800 font-medium transition-colors">Cancel</button>
                            <button type="submit"
                                class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-xl font-medium transition-colors">Create
                                Room</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Room Modal -->
    <div id="edit-modal" class="fixed inset-0 z-50 hidden" role="dialog" aria-modal="true"
        aria-labelledby="edit-modal-title" wire:ignore.self>
        <div class="fixed inset-0 bg-black/50 transition-opacity" aria-hidden="true"></div>

        @if ($errors->any())
            <div class="fixed top-4 right-4 z-50 space-y-2 max-w-md">
                @foreach ($errors->all() as $error)
                    <div class="bg-red-50 border border-red-200 rounded-lg p-4 flex items-start gap-3">
                        <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-red-800">{{ $error }}</p>
                        </div>
                        <button class="text-red-400 hover:text-red-600" onclick="this.closest('.bg-red-50').remove()">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="fixed inset-0 overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4">
                <div class="relative w-full max-w-lg bg-white rounded-2xl shadow-xl transform transition-all">
                    <div class="flex items-center justify-between p-6 border-b border-gray-100">
                        <h2 id="edit-modal-title" class="text-xl font-bold text-gray-900">Edit Room</h2>
                        <button
                            class="close-modal p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <form class="p-6 space-y-5" wire:submit='editRoom'>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="edit-room-number"
                                    class="block text-sm font-medium text-gray-700 mb-2">Room Number</label>
                                <input type="text" id="edit-room-number" value="101"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                    wire:model='updateRoom.room_number'>
                            </div>
                            <div>
                                <label for="edit-room-floor"
                                    class="block text-sm font-medium text-gray-700 mb-2">Floor</label>
                                <select id="edit-room-floor"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                                    <option selected>Ground Floor</option>
                                    <option>First Floor</option>
                                    <option>Second Floor</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="edit-room-type" class="block text-sm font-medium text-gray-700 mb-2">Room
                                Type</label>
                            <select id="edit-room-type"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                wire:model='updateRoom.room_type_id'>
                                <option value=""> ----- </option>
                                @foreach ($roomTypes as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="edit-room-capacity"
                                    class="block text-sm font-medium text-gray-700 mb-2">Capacity</label>
                                <input type="number" id="edit-room-capacity" value="4" min="1"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                    wire:model='updateRoom.capacity'>
                            </div>
                            <div>
                                <label for="edit-room-price"
                                    class="block text-sm font-medium text-gray-700 mb-2">Price/Night</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">$</span>
                                    <input type="number" id="edit-room-price" value="25" min="0"
                                        class="w-full pl-8 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                        wire:model='updateRoom.price_per_night'>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="edit-room-status"
                                class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                            <select id="edit-room-status"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none"
                                wire:model='updateRoom.status'>
                                @foreach (\App\Enums\roomStatus::cases() as $status)
                                    <option value="{{ $status->value }}">{{ ucfirst($status->value) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Amenities</label>
                            <div class="grid grid-cols-2 gap-2">
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" checked
                                        class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-gray-600">WiFi</span>
                                </label>
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" checked
                                        class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-gray-600">AC</span>
                                </label>
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" checked
                                        class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-gray-600">Locker</span>
                                </label>
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox"
                                        class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary">
                                    <span class="text-sm text-gray-600">En-suite</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-end gap-3 p-6 border-t border-gray-100">
                            <button type="submit"
                                class="close-modal px-5 py-2.5 text-gray-600 hover:text-gray-800 font-medium transition-colors">Cancel</button>
                            <button
                                class="bg-primary hover:bg-primary-dark text-white px-5 py-2.5 rounded-xl font-medium transition-colors">Save
                                Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="delete-modal" class="fixed inset-0 z-50 hidden" role="dialog" aria-modal="true"
        aria-labelledby="delete-modal-title">
        <div class="fixed inset-0 bg-black/50 transition-opacity" aria-hidden="true"></div>
        <div class="fixed inset-0 overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4">
                <div class="relative w-full max-w-md bg-white rounded-2xl shadow-xl transform transition-all">
                    <div class="p-6 text-center">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <h2 id="delete-modal-title" class="text-xl font-bold text-gray-900 mb-2">Delete Room</h2>
                        <p class="text-gray-500 mb-6">Are you sure you want to delete <span
                                class="font-medium text-gray-700">Room 101</span>? This action cannot be undone.</p>
                        <div class="flex items-center justify-center gap-3">
                            <button
                                class="close-modal px-5 py-2.5 text-gray-600 hover:text-gray-800 font-medium transition-colors">Cancel</button>
                            <button
                                class="bg-red-500 hover:bg-red-600 text-white px-5 py-2.5 rounded-xl font-medium transition-colors">Delete
                                Room</button>
                        </div>
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

        const createModal = document.getElementById('create-modal');
        const editModal = document.getElementById('edit-modal');
        const deleteModal = document.getElementById('delete-modal');

        function openModal(modal) { // verified
            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
            const firstInput = modal.querySelector('input, select, button');
            if (firstInput) firstInput.focus();
        }

        function closeModal(modal) { // verified
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        document.getElementById('open-create-modal').addEventListener('click', () => openModal(createModal));



        document.addEventListener('openEditRoomModal', () => { // verified 
            openModal(editModal);
        });

        document.addEventListener('closeEditRoomModal', () => { // verified 
            closeModal(editModal);
        });

        document.addEventListener('closeCreateRoomModal', function(){ // verified 
            closeModal(editModal);
        });

        document.querySelectorAll('.delete-room-btn').forEach(btn => {
            btn.addEventListener('click', () => openModal(deleteModal));
        });

        document.querySelectorAll('.close-modal').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const modal = e.target.closest('[role="dialog"]');
                if (modal) closeModal(modal);
            });
        });

        [createModal, editModal, deleteModal].forEach(modal => {
            modal.addEventListener('click', (e) => {
                if (e.target === modal.querySelector('.fixed.inset-0.bg-black\\/50')) {
                    closeModal(modal);
                }
            });
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                [createModal, editModal, deleteModal].forEach(modal => {
                    if (!modal.classList.contains('hidden')) {
                        closeModal(modal);
                    }
                });
            }
        });
    </script>
</div>
