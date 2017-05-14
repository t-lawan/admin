<?php

use Illuminate\Database\Seeder;

class DutiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('duties')->insert([
'experience_id' => 1,
'description' => 'Providing training and technical support on the two main platforms to clients',
]);

DB::table('duties')->insert([
'experience_id' => 1,
'description' => 'Assisting sales on new pitches with product demos and provide first line of technical support',
]);

DB::table('duties')->insert([
'experience_id' => 1,
'description' => 'Maintain and update product manuals and video walkthroughs',
]);

DB::table('duties')->insert([
'experience_id' => 1,
'description' => 'Manage and update client accounts ',
]);

DB::table('duties')->insert([
'experience_id' => 1,
'description' => 'Assist with product development',
]);

DB::table('duties')->insert([
'experience_id' => 1,
'description' => 'Product testing',
]);

DB::table('duties')->insert([
'experience_id' => 2,
'description' => 'Preparing market research reports',
]);

DB::table('duties')->insert([
'experience_id' => 2,
'description' => 'Working in a team to produce technical reports
',
]);

DB::table('duties')->insert([
'experience_id' => 2,
'description' => 'Contacting renewable energy companies to arrange meetings with potential clients to prospect for new business;
',
]);

DB::table('duties')->insert([
'experience_id' => 2,
'description' => 'Preparing bids for external projects',
]);

DB::table('duties')->insert([
'experience_id' => 3,
'description' => 'Researching and designing various methods for waste disposal project.',
]);

DB::table('duties')->insert([
'experience_id' => 3,
'description' => 'Presenting Research findings at Manager’s meeting',
]);

DB::table('duties')->insert([
'experience_id' => 3,
'description' => 'Organising Health and Safety awareness events',
]);

DB::table('duties')->insert([
'experience_id' => 3,
'description' => 'Researching and designing various methods for waste disposal project',
]);

DB::table('duties')->insert([
'experience_id' => 3,
'description' => 'Working with external audit committee
',
]);

DB::table('duties')->insert([
'experience_id' => 3,
'description' => 'Conducting, collating and presenting data for bi- weekly safety checks',
]);


DB::table('duties')->insert([
'experience_id' => 3,
'description' => 'Basic Administrative Duties',
]);
    }
}
