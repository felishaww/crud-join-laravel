<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(App\Event::class, 10)->create();
        factory(App\Company::class, 30)->create();
        factory(App\Staff::class, 100)->create();
    }
}
