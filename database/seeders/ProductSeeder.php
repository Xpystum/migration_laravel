<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Guid\Fields;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Product::factory()->count(1)->create()
        // ->each(function($user)){
            
        // };
        // Order::factory()->count(1)->create();

        // $order = Order::all();

        // Product::factory()->count(1)
        // ->create()
        // ->each(function($product) use ($order)  {
        //     $order->random(1);
        // });

            //сложна хрень!! Как заполнять промежуточные таблицы блин
        Product::factory()->count(1)->create()->each(function($product) {
            Order::factory()->count(1)->make()->each(function($order) use($product) {
                $product->orders()->save($order);
            });
        });


        // $product = Product::all();
        // $order = Order::all();

        // dd($product->random()->id);

        // $order->each(function ($order) use ($product) { 
        //     $order->products()->attach(
        //         // $product->random()->pluck('id')->toArray()
        //         $product->random()->id
        //     ); 
        // });

    }

}


