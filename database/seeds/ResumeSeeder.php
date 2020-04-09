<?php

use Illuminate\Database\Seeder;

// use App\Resume;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newResume = factory(App\Resume::class, 10)->create();
        // $newResume = new Resume();
        // $newResume->name='123';
        // $newResume->resume='abcd';
        // $newResume->save();
    }
}
