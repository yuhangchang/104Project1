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
        factory(App\Resume::class, 20)->create();
        factory(App\Tag::class, 10)->create();
        $tags = App\Tag::all();

        App\Resume::all()->each(function ($resume) use ($tags) {
            $resume->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
        // $this->call(UsersTableSeeder::class);
    }
}
