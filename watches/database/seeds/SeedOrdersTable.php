<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeedOrdersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('orders')->insert([

         	'user_id' => 1, 
            'watch_id' => 1, 

         	'first_name' => 'Milad', 
         	'email_address' => 'milad-dirani@shaw.net', 
         	'billing_address' => '1411 Ashburn st.', 
         	'shipping_address' => '1411 Ashburn st.', 
         	'subtotal' => 1399.99, 
            'GST' => 0.05, 
            'PST' => 0.07, 
            'total' => 1567.99, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
         ]); 

        DB::table('orders')->insert([

            'user_id' => 1, 
            'watch_id' => 2, 

            'first_name' => 'Milad', 
            'email_address' => 'milad-dirani@shaw.net', 
            'billing_address' => '1411 Ashburn st.', 
            'shipping_address' => '1411 Ashburn st.', 
            'subtotal' => 1699.99, 
            'GST' => 0.05, 
            'PST' => 0.07, 
            'total' => 1903.99, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
         ]); 

        DB::table('orders')->insert([

            'user_id' => 2, 
            'watch_id' => 2, 

            'first_name' => 'Dawn', 
            'email_address' => 'dawn-baker@bellmts.com', 
            'billing_address' => '88 Hargrave Bay', 
            'shipping_address' => '88 Hargrave Bay', 
            'subtotal' => 1699.99, 
            'GST' => 0.05, 
            'PST' => 0.06, 
            'total' => 1886.99, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
         ]); 

        DB::table('orders')->insert([

            'user_id' => 3, 
            'watch_id' => 3, 

            'first_name' => 'Inna', 
            'email_address' => 'inna-solda@gmail.com', 
            'billing_address' => '12 Abbots Cresent', 
            'shipping_address' => '12 Abbots Cresent', 
            'subtotal' => 599.99, 
            'GST' => 0.05, 
            'PST' => 0.07, 
            'total' => 671.99, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
         ]); 

        DB::table('orders')->insert([

            'user_id' => 3, 
            'watch_id' => 4, 

            'first_name' => 'Inna', 
            'email_address' => 'inna-solda@gmail.com', 
            'billing_address' => '12 Abbots Cresent', 
            'shipping_address' => '12 Abbots Cresent', 
            'subtotal' => 199.99, 
            'GST' => 0.05, 
            'PST' => 0.07, 
            'total' => 223.99, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
         ]); 

        DB::table('orders')->insert([

            'user_id' => 4, 
            'watch_id' => 4, 
            'first_name' => 'Alexandr', 
            'email_address' => 'alex-the-great@gmail.com', 
            'billing_address' => '43 Inkster st', 
            'shipping_address' => '43 Inkster st', 
            'subtotal' => 199.99, 
            'GST' => 0.05, 
            'PST' => 0.00, 
            'total' => 209.99, 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
         ]); 

    }
}
