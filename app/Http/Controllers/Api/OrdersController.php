<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\OrderRequest;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class OrdersController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $order = Order::create([
            'item_id' => $request->itemId,
        ]);
        $this->dataAddedSuccessfully($order, 'Order added Successfully');

    }


    public function update(OrderRequest $request, Order $order)
    {

        $order->update($request->validated());
        $this->dataAddedSuccessfully($order, 'Email Updated Successfully');
    }


    public function dataAddedSuccessfully(Model $order, String $message)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $order,
        ]);
    }
}
