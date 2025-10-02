<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Keyword;

class KeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $items = ['Urgente', 'Bug', 'Soporte', 'Mejora', 'BA', 'Backend', 'Frontend'];
        foreach ($items as $name) {
            Keyword::firstOrCreate(['name' => $name], ['created_at' => $now, 'updated_at' => $now]);
        }
    }
}
