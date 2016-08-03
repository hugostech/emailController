<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Ex_old_customer;
use Illuminate\Http\Request;

use App\Http\Requests;

class customerController extends Controller
{
    public function customerTransfer(){
        $old_customers = Ex_old_customer::all();
        foreach($old_customers as $old_customer){
            $customer  = new Customer();
            $customer->gender = $old_customer->customers_gender;
            $customer->email = $old_customer->customers_email_address;
            $customer->first_name = $old_customer->customers_firstname;
            $customer->last_name = $old_customer->customers_lastname;
            $customer->birth_date = $old_customer->customers_dob;
            $customer->phone = $old_customer->customers_telephone;
        }
    }

    public function customerDisable($id){
        $customer = Customer::find($id);
        $customer->newsletter = 0;
        $customer->save();
    }
}
