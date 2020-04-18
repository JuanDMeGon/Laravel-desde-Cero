<?php

namespace Database\Seeders;

use App\Order;
use App\Payment;
use App\Product;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::factory(50)->create();

        $users = User::factory(20)->create();

        $orders = Order::factory(10)
            ->make()
            ->each(function($order) use ($users) {
                $order->customer_id = $users->random()->id;
                $order->save();

                $payment = Payment::factory()->make();

                // $payment->order_id = $order->id;
                // $payment->save();

                $order->payment()->save($payment);
            });
    }
}
