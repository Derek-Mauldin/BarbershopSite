<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class check_insTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('check_ins')->insert([
				 'barbershop_name'=> 'Harmony',
				 'customer_name' => 'Freddie Mercury',
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('check_ins')->insert([
				 'barbershop_name'=> 'Visible Changes',
				 'customer_name' => 'Clark Kent',
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('check_ins')->insert([
				 'barbershop_name'=> 'Supercuts',
				 'customer_name' => 'Bruce Wayne',
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('check_ins')->insert([
				 'barbershop_name'=> 'Hairmageddon',
				 'customer_name' => 'Oliver Queen',
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('check_ins')->insert([
				 'barbershop_name'=> 'Harmony',
				 'customer_name' => 'Barry Allen',
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('check_ins')->insert([
				 'barbershop_name'=> 'Visible Changes',
				 'customer_name' => 'Tony Stark',
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('check_ins')->insert([
				 'barbershop_name'=> 'Supercuts',
				 'customer_name' => 'Bruce Banner',
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('check_ins')->insert([
				 'barbershop_name'=> 'Hairmageddon',
				 'customer_name' => 'Peter Parker',
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);
    }
}
