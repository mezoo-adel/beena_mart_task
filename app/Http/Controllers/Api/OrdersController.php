<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\OrderRequest;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * Summary of OrdersController
 */
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

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderRequest $request, Order $order)
    {
        //
        $order->update($request->validated());
        $this->dataAddedSuccessfully($order, 'Email Updated Successfully');
    }

    /**
     * Summary of dataAddedSuccessfully
     * @param \Illuminate\Database\Eloquent\Model $order
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function dataAddedSuccessfully(Model $order, String $message)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $order,
        ]);
    }
}
