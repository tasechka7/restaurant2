<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([

            [
                'name' => 'Grand Opening Celebration',
                'slug' => 'grand-opening-celebration',
                'description' => 'Join us for our big opening! Great food, music, and surprises await you here.',
                'photo' => 'news/grand_opening.jpg',
                'date' => '20 December',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Festive Holiday Menu',
                'slug' => 'festive-holiday-menu',
                'description' => 'Discover our festive menu with seasonal dishes, unique drinks, and desserts.',
                'photo' => 'news/holiday_menu.jpg',
                'date' => '25 December',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Live Music Night',
                'slug' => 'live-music-night',
                'description' => 'Spend an evening with live music, delicious meals, and a cozy atmosphere.',
                'photo' => 'news/live_music.jpg',
                'date' => '22 December',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Chef’s Special Week',
                'slug' => 'chefs-special-week',
                'description' => 'Taste exclusive chef-crafted dishes made with fresh, seasonal ingredients.',
                'photo' => 'news/chefs_special.jpg',
                'date' => '27 December',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'New Year’s Eve Gala',
                'slug' => 'new-years-eve-gala',
                'description' => 'Celebrate New Year’s Eve with a gourmet dinner, music, and sparkling drinks.',
                'photo' => 'news/new_year_gala.jpg',
                'date' => '31 December',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);
    }
}
