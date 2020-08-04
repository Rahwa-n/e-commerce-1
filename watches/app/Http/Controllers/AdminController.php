<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Watch;
use App\Category;
use App\Order; 
use App\Customer; 


class AdminController extends Controller
{
    public function watches()
    {

    	$watches = Watch::all();
        //$categories = Category::all();
        $title = "Watches";

        return view('/admin/watches_table', compact('watches', 'title'));
        


        //return view('/admin/watches_table');
    }

    public function orders()
    {
    	$orders = Order::all();

    	// $orders['watch_id'] = Watch::where('watch_id')->get();

    	// $orders['customer_id'] = Customer::where('customer_id')->get(); 

        $title = "Orders";

        return view('/admin/orders_table', compact('orders', 'title'));


        //return view('/admin/orders_table');
    }

    public function customers()
    {
    	$customers = Customer::all();
        $title = "Customers";

        return view('/admin/customers_table', compact('customers', 'title'));
    }

    public function admin()
    {
        return view('/admin/admin_table');
    }

    public function taxes()
    {
        return view('/admin/taxes_table');
    }

    public function transactions()
    {
        return view('/admin/transactions_table');
    }

    public function categories()
    {
        return view('/admin/categories_table');
    }
}
