<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			$this->call(barber_shopsTableSeeder::class);
			$this->call(check_insTableSeeder::class);
			$this->call(usersTableSeeder::class);
    }
}
