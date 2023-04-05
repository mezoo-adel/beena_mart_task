<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [[
            "name" => "Ketchup",
            "price" => "13",
        ], [
            "name" => "Flour",
            "price" => "21",
        ], [
            "name" => "Pasta",
            "price" => "11",
        ], [
            "name" => "Milk",
            "price" => "23",
        ], [
            "name" => "Peanut Butter",
            "price" => "35",
        ],
        ];

        Item::upsert($items,['name'],['price']);

    }
}
