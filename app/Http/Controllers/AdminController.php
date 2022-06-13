<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class AdminController extends Controller
{
    public function index(){

        $customer = Customer::all();
        $totalCustomer = count($customer);
        return view('index',compact('customer','totalCustomer'));
    }

    public function login(){

        return view('login');
    }

    public function loginStore(Request $request){
        $admin = Admin::where(['username' => $request->username, 'password' => $request->password])->first();
        $customer = Customer::all();
        $totalCustomer = count($customer);


        if($admin){
            return view('index', compact('customer','totalCustomer'));
        }else{
            return view('login');
        }
    }

    
}
