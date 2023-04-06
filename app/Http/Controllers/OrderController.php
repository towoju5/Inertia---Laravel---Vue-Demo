<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Plan;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::query()
                    ->with('plan')
                    ->paginate(per_page())
                    ->withQueryString()
                    ->through(fn($order) => [
                        'plan_name' => $order->plan->plan_name,
                        'id'    =>  $order->id,
                        'created_at'    =>  date('j F Y', strtotime($order->created_at)),
                        'invested_amount' => $order->invested_amount,
                        'end_date'  =>  date('j F Y', strtotime($order->end_date))
                    ]);
        return inertia('Orders/index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plans = Plan::all()->map(fn($plan) => [
            'id'                =>  $plan->id,
            'plan_name'         =>  $plan->plan_name,
            'plan_duration'     =>  $plan->plan_duration,
            'plan_min_price'    =>  $plan->plan_min_price,
            'plan_max_price'    =>  $plan->plan_max_price,
            'plan_description'  =>  $plan->plan_description,
        ]);
        return inertia('Orders/Create', compact('plans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = Plan::findorFail($id);
        return inertia('Orders/Show', compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
