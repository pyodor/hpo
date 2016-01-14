<?php

use Illuminate\Database\Seeder;
use App\Section;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->truncate();

        Section::create(['name' => 'Saint Paul']);
        Section::create(['name' => 'Saint Francis']);
        Section::create(['name' => 'Saint Therese']);
        Section::create(['name' => 'Saint John']);
        Section::create(['name' => 'Saint Peter']);
        Section::create(['name' => 'Saint Luke']);
    }
}
