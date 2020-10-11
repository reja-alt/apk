<?php

use Illuminate\Database\Seeder;
use App\Model\Product;
use App\Model\Review;

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
        factory(App\Model\Product::class,55)->create();
        factory(App\Model\Review::class,300)->create();
    }
}
