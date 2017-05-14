<?php

use Illuminate\Database\Seeder;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('institutions')->insert([
          'user_id' => 1,
          'name' => 'University of Nottingham',
          'degree' => 'Chemical Engineering MEng',
          'city' => 'Nottingham',
          'start_date' => '2011-09-26',
          'end_date' => '2015-07-01',
        ]);

        DB::table('institutions')->insert([
          'user_id' => 1,
          'name' => 'Davies Laing and Dick College',
          'degree' => 'A-Level',
          'city' => 'London',
          'start_date' => '2009-09-14',
          'end_date' => '2011-07-01',
        ]);

        DB::table('institutions')->insert([
          'user_id' => 1,
          'name' => 'Greensprings School Lagos',
          'degree' => 'IGCSE',
          'city' => 'Lagos',
          'start_date' => '2004-09-14',
          'end_date' => '2009-07-01',
        ]);
    }
}
