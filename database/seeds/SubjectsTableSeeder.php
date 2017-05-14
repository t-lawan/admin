<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('subjects')->insert([
          'institution_id' => 1,
          'name' => 'Chemical Enginering with Environmental Engineering, Masters in Engineering',
          'grade' => 'Second Class Honours',
        ]);

        DB::table('subjects')->insert([
          'institution_id' => 2,
          'name' => 'Mathematics',
          'grade' => 'A',
        ]);

        DB::table('subjects')->insert([
          'institution_id' => 2,
          'name' => 'Physics',
          'grade' => 'B',
        ]);

        DB::table('subjects')->insert([
          'institution_id' => 2,
          'name' => 'Chemistry',
          'grade' => 'B',
        ]);

        DB::table('subjects')->insert([
          'institution_id' => 3,
          'name' => 'Mathematics',
          'grade' => 'A*',
        ]);

        DB::table('subjects')->insert([
          'institution_id' => 3,
          'name' => 'Physics',
          'grade' => 'A*',
        ]);

        DB::table('subjects')->insert([
          'institution_id' => 3,
          'name' => 'English',
          'grade' => 'A*',
        ]);

        DB::table('subjects')->insert([
          'institution_id' => 3,
          'name' => 'Chemistry',
          'grade' => 'A',
        ]);

        DB::table('subjects')->insert([
          'institution_id' => 3,
          'name' => 'Biology',
          'grade' => 'B',
        ]);

        DB::table('subjects')->insert([
          'institution_id' => 3,
          'name' => 'ICT',
          'grade' => 'B',
        ]);

        DB::table('subjects')->insert([
          'institution_id' => 3,
          'name' => 'Geography',
          'grade' => 'B',
        ]);

        DB::table('subjects')->insert([
          'institution_id' => 3,
          'name' => 'Business Studies',
          'grade' => 'B',
        ]);
    }
}
