<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AddClassSchedule;

class AddClassScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            
                [
                    'CS_Class' => '9',
                    'CS_Subject' => 'math',
                    'CS_date' => '12-8-7',
                    'CS_StartTime' => '9',
                    'CS_EndTime' => '10',
                ],
                [
                    'CS_Class' => '10',
                    'CS_Subject' => 'math',
                    'CS_date' => '12-8-7',
                    'CS_StartTime' => '9',
                    'CS_EndTime' => '10',
                ]
                
        ];
        foreach($data as $info){
            AddClassSchedule::create($info);
        }
        
    }
}
