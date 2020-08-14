<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 3;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('classrooms')->insert([
                'name' => $faker->numerify('lớp ##'),
                'subject_id' => Subject::all()->random()->id,
                'start_day' => $faker->date,
                'end_day' => $faker->date,
                'day_per_week' => $faker->numberBetween(2, 3),
            ]);
        }
    }
}
