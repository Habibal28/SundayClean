<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Promo;
use App\Models\Customer;
use App\Models\Service;
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
            return view('index', compact('customer','totalCustomer','admin'));
        }else{
            return view('login');
        }
    }

    public function logout(){
        return view("login");
    }

    public function promo(){
        return view('promo');
    }

    public function promoStore(Request $request){
        $name = $request->image->store("images");
        // dd($name);
        $data = [
            'image' => $name
        ];
        Promo::create($data);

        return redirect()->back();
    }

    public function serviceAdmin(){
        $service = Service::all();
        // dd($service);
        return view('admin-service',compact('service'));
    }

    public function serviceStore(Request $request){
        $name = $request->image->store("images");
        $data = [
            'nama' => $request->nama,
            'isi' => $request->isi,
            'harga' => $request->harga,
            'image' => $name
        ];

        Service::create($data);
        return redirect()->back();
    }

    public function serviceEdit(Request $request){
       
        $service = Service::findOrFail($request->id);

        if($request->image){
            $image =  $request->image->store("images");
      
        }else{
            $image = $service->image;
        }

        $data = [
            'nama' => $request->nama,
            'isi' => $request->isi,
            'harga' => $request->harga,
            'image' => $image,
        ];
        $service->update($data);
        return redirect()->back();
  
    }

    public function hapusService($id){
        $service = Service::find($id);
        $service->delete();
        return redirect()->back();
    }
   

    
}
