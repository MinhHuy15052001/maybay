<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Flight;
use App\Models\Airplane;
use App\Models\Passenger;
use App\Models\Booking;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Airplane::factory(10)->create();//hàm factory là hàm tĩnh cho phép thực thi mà ko cần tạo ra đối tượng
        Passenger::factory(10)->create();
        Flight::factory(10)->create();
        Booking::factory(10)->create();
    }
}
