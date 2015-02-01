<?php

class ProductTableSeeder extends Seeder {

    public function run()
    {
        DB::table('products')->delete();

        $products = array(
                array(
                    'prodName' => 'iPhone 6',
                    'prodPrice' => '699'
                ),
                array(
                    'prodName' => 'Doritos',
                    'prodPrice' => '3.5'
                ),
                array(
                    'prodName' => 'Pineapple Juice',
                    'prodPrice' => '2.99'
                ),
                array(
                    'prodName' => 'Beer - 6 Pack',
                    'prodPrice' => '12.99'
                ),
                array(
                    'prodName' => 'The Secret',
                    'prodPrice' => '24.99'
                ),
                array(
                    'prodName' => 'The Terminator - BlueRay',
                    'prodPrice' => '9.99'
                )
        );
        
        DB::table('products')->insert($products);
    }

}
