<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'room_number' => '101',
                'room_type' => 'Single Room',
                'price_per_night' => 79.99,
                'status' => 'available',
                'capacity' => 1,
                'description' => 'Cozy single room perfect for solo travelers.',
            ],
            [
                'room_number' => '102',
                'room_type' => 'Double Room',
                'price_per_night' => 129.99,
                'status' => 'available',
                'capacity' => 2,
                'description' => 'Comfortable double room with a queen-size bed.',
            ],
            [
                'room_number' => '103',
                'room_type' => 'Twin Room',
                'price_per_night' => 129.99,
                'status' => 'available',
                'capacity' => 2,
                'description' => 'Spacious room with two single beds.',
            ],
            [
                'room_number' => '104',
                'room_type' => 'Suite',
                'price_per_night' => 199.99,
                'status' => 'available',
                'capacity' => 4,
                'description' => 'Luxury suite with living area and bedroom.',
            ],
            [
                'room_number' => '105',
                'room_type' => 'Deluxe Room',
                'price_per_night' => 159.99,
                'status' => 'available',
                'capacity' => 2,
                'description' => 'Premium room with premium amenities.',
            ],
            [
                'room_number' => '201',
                'room_type' => 'Single Room',
                'price_per_night' => 79.99,
                'status' => 'available',
                'capacity' => 1,
                'description' => 'Quiet single room with city view.',
            ],
            [
                'room_number' => '202',
                'room_type' => 'Double Room',
                'price_per_night' => 129.99,
                'status' => 'occupied',
                'capacity' => 2,
                'description' => 'Comfortable double room with garden view.',
            ],
            [
                'room_number' => '203',
                'room_type' => 'Suite',
                'price_per_night' => 249.99,
                'status' => 'available',
                'capacity' => 4,
                'description' => 'Presidential suite with all premium features.',
            ],
        ];

        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}
