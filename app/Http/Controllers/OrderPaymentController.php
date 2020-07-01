<?php

namespace App\Http\Controllers;

use App\Order;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderPaymentController extends Controller
{
    public $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function create(Order $order)
    {
        return view('payments.create')->with([
            'order' => $order,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $order)
    {
        return DB::transaction(function() use($order) {
            //PaymentService::handlePayment();

            $this->cartService->getFromCookie()->products()->detach();

            $order->payment()->create([
                'amount' => $order->total,
                'payed_at' => now(),
            ]);

            $order->status = 'payed';
            $order->save();

            return redirect()
                ->route('main')
                ->withSuccess("Thanks! Your payment for \${$order->total} was successful.");
        }, 5);
    }
}
