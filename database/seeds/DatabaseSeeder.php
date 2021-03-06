<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(DoctorsTableSeeder::class);
         $this->call(DeadlinesTableSeeder::class);
         $this->call(DatabasePatientSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(VisitsTableSeeder::class);


    }
}
