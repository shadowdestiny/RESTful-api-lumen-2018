<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,20) as $index) {
            DB::table('bookings')->insert([
                [
                    'first_name'                => $faker->streetName(50),
                    'street_address'            => $faker->streetAddress(255),
                    'booking_price'             => $faker->randomFloat(null,1,4),
                    'created_at'                => Carbon::now(),
                ],
            ]);
        }

    }
}
