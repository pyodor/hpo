<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->truncate();

        Student::create([
            'first_name' => 'Gabino',
            'last_name' => 'Ang',
            'address' => 'taga davao',
            'city' => 'Davao City',
            'zip' => '9999',
            'state_id' => 1,
            'phone_number' => '123456789',
            'mobile_number' => '987654321',
            'email' => 'csicebu@gmail.com',
            'year_level' => 4,
            'section_id' => 2
        ]);
    }
}
