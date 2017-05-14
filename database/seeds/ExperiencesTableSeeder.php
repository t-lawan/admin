<?php

use Illuminate\Database\Seeder;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('experiences')->insert([
          'user_id' => 1,
          'company_name' => 'StreamAMG',
          'role' => 'Technical Account Manager',
          'city' => 'London',
          'start_date' => '2016-05-09',
          'end_date' => '2017-04-23',
        ]);

        DB::table('experiences')->insert([
          'user_id' => 1,
          'company_name' => 'Isotrol',
          'role' => 'Technical Assistant',
          'city' => 'Sevilla',
          'start_date' => '2016-01-15',
          'end_date' => '2016-04-13',
        ]);

        DB::table('experiences')->insert([
          'user_id' => 1,
          'company_name' => 'Pan Ocean Oil',
          'role' => 'Health Safety and Environment Officer',
          'city' => 'Lagos',
          'start_date' => '2013-07-01',
          'end_date' => '2013-08-14',
        ]);
    }
}
