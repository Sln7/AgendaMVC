<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('events')->insert([
            [
                'title' => 'Reunião',
                'start' => '2020-01-29 21:30:00',
                'end' => '2020-01-30 21:30:00',
                'color' => '#c40233',
                'description' => 'Reunião'
            ],
            [
            'title' => 'Ligar para cliente',
            'start' => '2020-01-30',
            'end' => '2020-01-31',
            'color' => '#20fdf2',
            'description' => 'Falar cm cliente'
        ]
        ]);
    }
}
