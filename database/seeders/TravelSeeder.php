<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Travel;


class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $travels = [
            [
                ['destination' => 'Londra'],
                ['destination' => 'Napoli'],
            ],
        ];

        foreach ($travels as $travel) {
            $new_travel= new Travel();
            $new_travel->fill($travel);
            $new_travel->save();
        }
    }
}
