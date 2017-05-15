<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->insert([
          'user_id' => 1,
          'name' => 'plan',
          'description' => 'Project/Task Management Web Application',
          'user_email' => 'thomas@email.com',
          'user_password' => 'secret',
          'github_link' => 'https://github.com/t-lawan/plan',
          'site_link' => 'http://plan.lawanson.me/',
        ]);

        DB::table('projects')->insert([
          'user_id' => 1,
          'name' => 'talk',
          'description' => 'Diary/Post Feed Web Application',
          'user_email' => 'thomas@email.com',
          'user_password' => 'secret',
          'github_link' => 'https://github.com/t-lawan/talk',
          'site_link' => 'http://talk.lawanson.me/',
        ]);

        DB::table('projects')->insert([
          'user_id' => 1,
          'name' => 'lettings',
          'description' => 'Property Lettings Web Application',
          'user_email' => 'thomas@email.com',
          'user_password' => 'secret',
          'github_link' => 'https://github.com/t-lawan/lettings',
          'site_link' => 'http://lettings.lawanson.me/',
        ]);
    }
}
