<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-6">Welcome, {{ Auth::user()->name }}!</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                        <a href="{{ route('rooms.index') }}" class="bg-blue-50 p-6 rounded-lg hover:bg-blue-100 transition">
                            <h4 class="font-semibold text-blue-900 mb-2">View Rooms</h4>
                            <p class="text-sm text-blue-700">Browse available rooms</p>
                        </a>

                        <a href="{{ route('bookings.index') }}" class="bg-green-50 p-6 rounded-lg hover:bg-green-100 transition">
                            <h4 class="font-semibold text-green-900 mb-2">My Bookings</h4>
                            <p class="text-sm text-green-700">View your bookings</p>
                        </a>

                        <a href="{{ route('bookings.create') }}" class="bg-purple-50 p-6 rounded-lg hover:bg-purple-100 transition">
                            <h4 class="font-semibold text-purple-900 mb-2">New Booking</h4>
                            <p class="text-sm text-purple-700">Create a booking</p>
                        </a>

                        <a href="{{ route('guest.show') }}" class="bg-orange-50 p-6 rounded-lg hover:bg-orange-100 transition">
                            <h4 class="font-semibold text-orange-900 mb-2">Guest Info</h4>
                            <p class="text-sm text-orange-700">Update your profile</p>
                        </a>

                        <a href="{{ route('profile.edit') }}" class="bg-pink-50 p-6 rounded-lg hover:bg-pink-100 transition">
                            <h4 class="font-semibold text-pink-900 mb-2">Account</h4>
                            <p class="text-sm text-pink-700">Manage account</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
