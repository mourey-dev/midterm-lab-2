<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    public function run()
    {
        Quote::factory()->count(50)->create(); // Generate 50 random quotes
    }    
}
