<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Contact;
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
        // \App\Models\User::factory(10)->create();
        Contact::factory(500)->create();
        Post::factory(500)->create();
    }
}
