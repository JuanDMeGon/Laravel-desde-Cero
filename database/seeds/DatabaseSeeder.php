<?php

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
        $users = factory(User::class, 20)->create();

        $orders = factory(Order::class, 10)
            ->make()
            ->each(function ($order) use ($users) {
                $order->customer_id = $users->random()->id;
                $order->save();

                $payment = factory(Payment::class)->make();
                // $payment->order_id = $order->id;
                // $payment->save();
                $order->payment()->save($payment);
            });

        $products = factory(Product::class, 50)->create();
    }
}
