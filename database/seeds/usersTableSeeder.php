<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('users')->insert([
				 'barbershop_name'=> 'Harmony',
				 'name' => 'Derek Mauldin',
				 'email' => 'dm@gmail.com',
				 'password' => bcrypt('secret'),
				 'remember_token' => str_random(10),
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('users')->insert([
				 'barbershop_name'=> 'Harmony',
				 'name' => 'Fred Johnson',
				 'email' => 'fred@gmail.com',
				 'password' => bcrypt('secret'),
				 'remember_token' => str_random(10),
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('users')->insert([
				 'barbershop_name'=> 'Visible Changes',
				 'name' => 'Diana Prince',
				 'email' => 'diana@gmail.com',
				 'password' => bcrypt('secret'),
				 'remember_token' => str_random(10),
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('users')->insert([
				 'barbershop_name'=> 'Visible Changes',
				 'name' => 'Kira Jor El',
				 'email' => 'kira@jl.com',
				 'password' => bcrypt('secret'),
				 'remember_token' => str_random(10),
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('users')->insert([
				 'barbershop_name'=> 'Visible Changes',
				 'name' => 'Johnny Storm',
				 'email' => 'johnny@ff.com',
				 'password' => bcrypt('secret'),
				 'remember_token' => str_random(10),
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('users')->insert([
				 'barbershop_name'=> 'Supercuts',
				 'name' => 'Sue Storm',
				 'email' => 'sue@ff.com',
				 'password' => bcrypt('secret'),
				 'remember_token' => str_random(10),
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('users')->insert([
				 'barbershop_name'=> 'Hairmageddon',
				 'name' => 'Bob Ross',
				 'email' => 'bob@gmail.com',
				 'password' => bcrypt('secret'),
				 'remember_token' => str_random(10),
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

			DB::table('users')->insert([
				 'barbershop_name'=> 'Hairmageddon',
				 'name' => 'Alfred Pennyworth',
				 'email' => 'alfred@bc.com',
				 'password' => bcrypt('secret'),
				 'remember_token' => str_random(10),
				 'created_at' => Carbon::now()->toDateTimeString(),
				 'updated_at' => Carbon::now()->toDateTimeString()
			]);

    }
}
