<?php

use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{

    protected $technologies = array(
      'PHP',
      'Laravel',
      'SQL',
      'Eloquent',
      'Git',
      'Forge',
      'JQuery',
      'Vue.JS',
      'Dropzone.JS',
      'SweetAlert.JS',
      'HTML'
    );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach ($this->technologies as $technology)
        {
          DB::table('technologies')->insert([
            'name' => $technology,
          ]);
        }
    }
}
