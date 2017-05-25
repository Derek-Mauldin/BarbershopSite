<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class barber_shopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

			DB::table('barber_shops')->insert([
				 'barbershop_name'=> 'Harmony',
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('barber_shops')->insert([
				 'barbershop_name'=> 'Visible Changes',
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('barber_shops')->insert([
				 'barbershop_name'=> 'Supercuts',
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('barber_shops')->insert([
				 'barbershop_name'=> 'Hairmageddon',
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);
    }
}
