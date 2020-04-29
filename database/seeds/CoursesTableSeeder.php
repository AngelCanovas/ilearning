<?php

use App\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Course::class, 50)->create()
            ->each(function (Course $c) {
                $c->goals()->saveMany(factory(\App\Goals::class, 2)->create());
                $c->requirements()->saveMany(factory(\App\Requirement::class, 4)->create());
            });
    }
}
