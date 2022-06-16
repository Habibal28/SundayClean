<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Promo;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::all();
        return view('customer',compact('customer'));
    }

    public function tambahCustomer(Request $request){
        $data = [
            'nama' => $request->nama,
            'telp' => $request->notelp,
            'alamat' => $request->alamat,
        ];
        Customer::create($data);
        return redirect()->route('adminCustomer');
    }
    public function hapusCustomer($id){
        $status = Customer::find($id);
        $status->delete();
        return redirect()->route('adminCustomer');
    }

    public function editCustomer(Request $request){
        $customer =  Customer::FindOrFail($request->id);
        $data = [
            'nama' => $request->nama,
            'telp' => $request->notelp,
            'alamat' => $request->alamat,
        ];
        $customer->update($data);
        return redirect()->route('adminCustomer');
    }

    public function storeCustomer(Request $request){
        $data = [
            'nama' => $request->nama,
            'telp' => $request->telp,
            'alamat' => ''
        ];
        Customer::create($data);
        return redirect()->route('landing-page');
    }

    public function landingPage(){
        $promo = Promo::all();
        return view("landing-page",compact('promo'));
    }

    public function service(){
        $service = Service::all();
        // dd($service);
        return view("service",compact('service'));
    }
}
