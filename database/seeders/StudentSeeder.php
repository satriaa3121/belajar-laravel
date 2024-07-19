<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
  
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {

    //     Schema::disableForeignKeyConstraints();
    //     Student::truncate();

    //     Schema::enableForeignKeyConstraints();

    //     $data = [
    //         ['name' => 'siregar', 'gender' => 'L', 'nis' => '12345', 'class_id' => 1],

    //         ['name' => 'tony', 'gender' => 'L', 'nis' => '14445', 'class_id' => 2],
    //         ['name' => 'susanti', 'gender' => 'P', 'nis' => '19450', 'class_id' => 3],
    //         ['name' => 'meimei', 'gender' => 'P', 'nis' => '19850', 'class_id' => 4],
    //     ];

    //     foreach ($data as $value) {
    //         Student::insert([
    //             'name' => $value['name'],
    //             'gender' => $value['gender'],
    //             'nis' => $value['nis'],
    //             'class_id' => $value['class_id'],
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),
    //         ]);
    //     }


    Student::factory()->count(20)->create();
    

      }
}


