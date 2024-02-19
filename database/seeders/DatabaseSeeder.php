<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Course;
use App\Models\UserCourse;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'andi',
            'email' => 'andi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'budi',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('67890')
        ]);

        User::create([
            'name' => 'caca',
            'email' => 'caca@gmail.com',
            'password' => bcrypt('abcde')
        ]);

        User::create([
            'name' => 'deni',
            'email' => 'deni@gmail.com',
            'password' => bcrypt('fghij')
        ]);

        User::create([
            'name' => 'euis',
            'email' => 'euis@gmail.com',
            'password' => bcrypt('klmno')
        ]);

        User::create([
            'name' => 'fafa',
            'email' => 'fafa@gmail.com',
            'password' => bcrypt('pqrst')
        ]);

        Course::create([
            'course' => 'C++',
            'mentor' => 'Ari',
            'tittle' => 'Dr.'
        ]);

        Course::create([
            'course' => 'C#',
            'mentor' => 'Ari',
            'tittle' => 'Dr.'
        ]);

        Course::create([
            'course' => 'C#',
            'mentor' => 'Ari',
            'tittle' => 'Dr.'
        ]);

        Course::create([
            'course' => 'CSS',
            'mentor' => 'Cania',
            'tittle' => 'S.kom'
        ]);

        Course::create([
            'course' => 'HTML',
            'mentor' => 'Cania',
            'tittle' => 'S.kom'
        ]);

        Course::create([
            'course' => 'Javascript',
            'mentor' => 'Cania',
            'tittle' => 'S.kom'
        ]);

        Course::create([
            'course' => 'Python',
            'mentor' => 'Berry',
            'tittle' => 'S.T'
        ]);

        Course::create([
            'course' => 'MicroPython',
            'mentor' => 'Berry',
            'tittle' => 'S.T'
        ]);

        Course::create([
            'course' => 'Java',
            'mentor' => 'Darren',
            'tittle' => 'M.T'
        ]);

        Course::create([
            'course' => 'Ruby',
            'mentor' => 'Darren',
            'tittle' => 'M.T'
        ]);


        UserCourse::create([
            'id_user' => '1',
            'id_course' => '1'
        ]);

        UserCourse::create([
            'id_user' => '1',
            'id_course' => '2'
        ]);

        UserCourse::create([
            'id_user' => '1',
            'id_course' => '3'
        ]);

        UserCourse::create([
            'id_user' => '2',
            'id_course' => '4'
        ]);

        UserCourse::create([
            'id_user' => '2',
            'id_course' => '5'
        ]);

        UserCourse::create([
            'id_user' => '2',
            'id_course' => '6'
        ]);

        UserCourse::create([
            'id_user' => '3',
            'id_course' => '7'
        ]);

        UserCourse::create([
            'id_user' => '3',
            'id_course' => '8'
        ]);

        UserCourse::create([
            'id_user' => '3',
            'id_course' => '9'
        ]);

        UserCourse::create([
            'id_user' => '4',
            'id_course' => '1'
        ]);

        UserCourse::create([
            'id_user' => '4',
            'id_course' => '3'
        ]);

        UserCourse::create([
            'id_user' => '4',
            'id_course' => '5'
        ]);

        UserCourse::create([
            'id_user' => '5',
            'id_course' => '2'
        ]);

        UserCourse::create([
            'id_user' => '5',
            'id_course' => '4'
        ]);

        UserCourse::create([
            'id_user' => '5',
            'id_course' => '6'
        ]);

        UserCourse::create([
            'id_user' => '6',
            'id_course' => '7'
        ]);

        UserCourse::create([
            'id_user' => '6',
            'id_course' => '8'
        ]);

        UserCourse::create([
            'id_user' => '6',
            'id_course' => '9'
        ]);
    }


}
