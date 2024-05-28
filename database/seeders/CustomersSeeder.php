<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Customers;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        for( $i = 0; $i < 5; $i++ ) {
            $customer = new Customers;
            $customer->name     = $faker->name;
            $customer->email    = $faker->email;
            $customer->address  = $faker->address;
            $customer->state    = $faker->state;
            $customer->pincode  = $faker->postcode;
            $customer->gender   = "M";
            $customer->dob      = $faker->date;
            $customer->password = $faker->password;
            $customer->save();
        }
    }
}
