<?php

use Illuminate\Database\Seeder;
use App\Customer;
use Faker\Factory as Faker;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=0; $i<50; $i++)
        {
        	$customer = new Customer([
        		'name'=>$faker->name,
        		'address'=>$faker->address,
        		'phone'=>$faker->phoneNumber,
        	]);
        	$customer->save();
        }
    }
}
