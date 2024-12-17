<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DrinkSeeder extends Seeder
{
    public function run()
    {
        // Get all category IDs for drinks
        $categoryIds = DB::table('drinks_categories')->pluck('id');

        // Specific drink data for each category
        $drinks = [
            // For the "Lemonades" category
            [
                'name' => 'Aloe vera lemonade',
                'slug' => 'aloe-vera-lemonade',
                'ingredients' => 'aloe vera jam with honey, green apple, sparkling water, lime',
                'price' => 90,
                'photo' => 'drinks/aloe-vera-lemonade.jpg',
                'category_id' => $categoryIds[0],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Raspberry Lemonade',
                'slug' => 'raspberry-lemonade',
                'ingredients' => 'raspberry puree, lychee syrup, sparkling water, grapefruit',
                'price' => 90,
                'photo' => 'drinks/raspberry_lemonade.jpg',
                'category_id' => $categoryIds[0],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sea buckthorn lemonade',
                'slug' => 'sea-buckthorn-lemonade',
                'ingredients' => 'Mint, lemon, sugar, water',
                'price' => 90,
                'photo' => 'drinks/sea-buckthorn.jpg',
                'category_id' => $categoryIds[0],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


            [
                'name' => 'Milkshake Snickers',
                'slug' => 'snickers-milkshake',
                'ingredients' => 'Snickers chocolate, ice cream, chocolate sauce, caramel sauce, milk, confectionery cream, peanuts',
                'price' => 98,
                'photo' => 'drinks/snickers-milkshake.jpg',
                'category_id' => $categoryIds[1],  // Category "Milkshakes"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Strawberry Milkshake',
                'slug' => 'strawberry-milkshake',
                'ingredients' => 'Strawberry, milk, ice cream',
                'price' => 98,
                'photo' => 'drinks/strawberry-milkshake.jpg',
                'category_id' => $categoryIds[1],  // Category "Milkshakes"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Vanilla Milkshake',
                'slug' => 'vanilla-milkshake',
                'ingredients' => 'Vanilla, milk, ice cream',
                'price' => 98,
                'photo' => 'drinks/vanilla-milkshake.jpg',
                'category_id' => $categoryIds[1],  // Category "Milkshakes"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // For the "Cold Drinks" category
            [
                'name' => 'Coca-Cola',
                'slug' => 'coca-cola',
                'ingredients' => '',
                'price' => 35,
                'photo' => 'drinks/coca-cola.jpg',
                'category_id' => $categoryIds[2],  // Category "Cold drinks"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Fanta',
                'slug' => 'fanta',
                'ingredients' => '',
                'price' => 35,
                'photo' => 'drinks/fanta.jpg',
                'category_id' => $categoryIds[2],  // Category "Cold drinks"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sprite',
                'slug' => 'sprite',
                'ingredients' => '',
                'price' => 35,
                'photo' => 'drinks/sprite.jpg',
                'category_id' => $categoryIds[2],  // Category "Cold drinks"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // For the "Hot Drinks" category
            [
                'name' => 'Hot Chocolate',
                'slug' => 'hot-chocolate',
                'ingredients' => 'Chocolate, milk, sugar',
                'price' => 65,
                'photo' => 'drinks/hot_chocalate.jpg',
                'category_id' => $categoryIds[3],  // Category "Hot drinks"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Espresso',
                'slug' => 'espresso',
                'ingredients' => 'Coffee, water',
                'price' => 40,
                'photo' => 'drinks/espresso.jpg',
                'category_id' => $categoryIds[3],  // Category "Hot drinks"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cappuccino',
                'slug' => 'cappuccino',
                'ingredients' => 'Espresso, steamed milk, milk foam',
                'price' => 60,
                'photo' => 'drinks/cappuccino.jpg',
                'category_id' => $categoryIds[3],  // Category "Hot drinks"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mint Tea with Ginger',
                'slug' => 'mint-tea-ginger',
                'ingredients' => 'Mint leaves, ginger, hot water, honey',
                'price' => 80,
                'photo' => 'drinks/mint_tea_ginger.png',
                'category_id' => $categoryIds[4],  // Category "Hot drinks"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Raspberry Tea',
                'slug' => 'raspberry-tea',
                'ingredients' => 'Raspberry leaves, hot water, honey, lemon',
                'price' => 80,
                'photo' => 'drinks/raspberry_tea.png',
                'category_id' => $categoryIds[4],  // Category "Hot drinks"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pineapple Tea',
                'slug' => 'pineapple-tea',
                'ingredients' => 'Pineapple pieces, green tea, hot water, mint',
                'price' => 80,
                'photo' => 'drinks/pineapple_tea.png',
                'category_id' => $categoryIds[4],  // Category "Hot drinks"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Lychee-li & Grapefruit Spritz',
                'slug' => 'lychee-grapefruit-spritz',
                'ingredients' => 'Grapefruit liqueur, lychee syrup, grapefruit, Italian sparkling wine',
                'price' => 94,
                'photo' => 'drinks/lychee_grapefruit_spritz.jpg',
                'category_id' => $categoryIds[5],  // Category "Cold drinks"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'White Tropicano Sangria',
                'slug' => 'white-tropicano-sangria',
                'ingredients' => 'Portuguese wine, passion fruit puree, mango liqueur',
                'price' => 99,
                'photo' => 'drinks/white_tropicano_sangria.jpg',
                'category_id' => $categoryIds[5],  // Category "Cold drinks"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Gin Lemonade Rhubarb & Rose',
                'slug' => 'gin-lemonade-rhubarb-rose',
                'ingredients' => 'Gin infused with ginger and rhubarb with the addition of naturally carbonated lemonade with rose flavor',
                'price' => 125,
                'photo' => 'drinks/gin_lemonade_rhubarb_rose.jpg',
                'category_id' => $categoryIds[5],  // Category "Cold drinks"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


            [
                'name' => 'Chardonnay Blanc Reserve',
                'slug' => 'chardonnay-blanc-reserve',
                'ingredients' => 'Premium Chardonnay grapes, oak-aged for a smooth finish',
                'price' => 110,
                'photo' => 'drinks/chardonnay_blanc_reserve.jpg',
                'category_id' => $categoryIds[6],  // Category "Wines"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Rosé Delight',
                'slug' => 'rose-delight',
                'ingredients' => 'Handpicked rosé grapes, crisp and refreshing taste',
                'price' => 115,
                'photo' => 'drinks/rose_delight.jpg',
                'category_id' => $categoryIds[6],  // Category "Wines"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Merlot Noir Classic',
                'slug' => 'merlot-noir-classic',
                'ingredients' => 'Rich Merlot grapes, deep red with notes of black cherry',
                'price' => 120,
                'photo' => 'drinks/merlot_noir_classic.jpg',
                'category_id' => $categoryIds[6],  // Category "Wines"
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


        ];

        // Insert the data into the drinks table
        foreach ($drinks as $drink) {
            DB::table('drinks')->insert([
                'name' => $drink['name'],
                'slug' => $drink['slug'],
                'ingredients' => $drink['ingredients'],
                'price' => $drink['price'],
                'photo' => $drink['photo'],
                'category_id' => $drink['category_id'],
                'created_at' => $drink['created_at'],
                'updated_at' => $drink['updated_at'],
            ]);
        }
    }
}
