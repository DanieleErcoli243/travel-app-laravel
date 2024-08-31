<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $days = [
            ['name' => 'lunedì'],
            ['name' => 'martedì'],
            ['name' => 'mercoledì'],
            ['name' => 'giovedì'],
            ['name' => 'venerdì'],
            ['name' => 'sabato'],
            ['name' => 'domenica'],
            ['name' => 'lunedì'],
            ['name' => 'martedì'],
            ['name' => 'mercoledì'],
        ];

        foreach ($days as $day) {
            $new_day = new Day();
            $new_day->fill($day);
            $new_say->save();
        }
    }
}
