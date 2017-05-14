<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $toTruncate = array('users', 'projects', 'institutions', 'experiences', 'duties', 'subjects');
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach ($this->toTruncate as $table) {
        DB::table($table)->truncate();
      }

      $this->call(UsersTableSeeder::class);
      $this->call(ProjectsTableSeeder::class);
      $this->call(InstitutionsTableSeeder::class);
      $this->call(ExperiencesTableSeeder::class);
      $this->call(DutiesTableSeeder::class);
      $this->call(SubjectsTableSeeder::class);
    }
}
