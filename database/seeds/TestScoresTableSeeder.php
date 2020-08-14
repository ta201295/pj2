<?php

use Illuminate\Database\Seeder;
use App\Models\Student;

class TestScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 15;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('test_scores')->insert([
                'student_id' => Student::all()->random()->id,
                'point_1' => $faker->numberBetween(0, 10),
                'point_2' => $faker->numberBetween(0, 10),
                'point_3' => $faker->numberBetween(0, 10),
            ]);
        }
    }
}
