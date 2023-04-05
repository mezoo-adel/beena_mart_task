<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ItemCollection;
use App\Http\Resources\ItemResource;
use App\Models\Item;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return new ItemCollection($items);
    }

    public function show(Item $item)
    {
        return new ItemResource($item);
    }

}
