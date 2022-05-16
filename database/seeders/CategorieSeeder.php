<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        DB::table('categories')->insert(
            array(
                array(
                    'name' => 'Xbox',
                    'slug' => 'xbox',
                ),
                array(
                    'name' => 'Playstation',
                    'slug' => 'playstation',
                ),
                array(
                    'name' => 'PC',
                    'slug' => 'pc',
                ),
                array(
                    'name' => 'Switch',
                    'slug' => 'switch',
                ),
            )
        );
    }
}
