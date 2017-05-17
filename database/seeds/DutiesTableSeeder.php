<?php

use Illuminate\Database\Seeder;

class DutiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     protected $streamamgDuties = array(
       'Providing training and technical support to both prospective and current clients',
       'Assisting sales department with technical presentations (i.e first line of technical support/queries and providing product demos)',
       'Maintaining and updating product manuals and video walkthroughs',
       'Managing live stream events',
       'Gathering technical specifications for events from the clients and relaying this information to the production technicians and development team if needed',
       'Creating microsites for live events',
       'Attending marketing events to promote products',
       'Managing and updating client accounts',
       'Carrying out market research',
       'Writing email newsletters to clients',
       'Assisting with product development',
       'Testing software updates and new product releases');

      protected $isotrolDuties = array(
        'Preparing market research reports',
        'Working in a team to produce technical reports',
        'Contacting renewable energy companies to arrange meetings with potential clients to prospect for new business',
        'Preparing bids for external projects');

      protected $panDuties = array(
        'Researching and designing various methods for waste disposal project',
        'Presenting Research findings at Manager’s meeting',
        'Organising Health and Safety awareness events',
        'Working with external audit committee',
        'Conducting, collating and presenting data for bi- weekly safety checks',
        'Basic Administrative Duties'
      );



    public function run()
    {
        //
        foreach ($this->streamamgDuties as $streamDuty)
        {
          DB::table('duties')->insert([
            'experience_id' => 1,
            'description' => $streamDuty,
          ]);
        }

        foreach ($this->isotrolDuties as $isotrolDuty)
        {
          DB::table('duties')->insert([
            'experience_id' => 2,
            'description' => $isotrolDuty,
          ]);
        }

        foreach ($this->panDuties as $panDuty)
        {
          DB::table('duties')->insert([
            'experience_id' => 3,
            'description' => $panDuty,
          ]);
        }

    }
}
