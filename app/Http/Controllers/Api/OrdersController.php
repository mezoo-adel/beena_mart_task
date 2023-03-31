<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Order::create($request->validated());
        //  dd($request->all() );

        $order = Order::create([
            'itemId' => $request->itemId,
            'email' => ' ',
            'status' => 'draft',
        ]);
        // $item =  Order::where('itemId',$request->itemId)->first();
        // dd($request->all(), $item->item->first()->name );
        return response()->json([
            'success' => true,
            'message' => 'Order added Successfully',
            'data' => $order,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderRequest $request, Order $order)
    {
        //
       $order->update($request->validated());
        return response()->json([
        'success' => true,
        'message' => 'Email Updated Successfully',
        'data' => $order,
    ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
