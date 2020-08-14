<?php

use Illuminate\Database\Seeder;
use App\Models\Classroom;

class StudentsTableSeeder extends Seeder
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
            DB::table('students')->insert([
                'name' => $faker->name,
                'dob' => $faker->date,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'classrooms_id' => Classroom::all()->random()->id,
            ]);
        }
    }
}
