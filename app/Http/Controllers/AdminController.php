<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Barber;
use App\Models\Produk;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\BarberDescription;
use App\Models\CustomerDescription;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        // $data = User::all();
        // dd($data);
        $dataUser = User::all();

        $dataBarber = Barber::all();

        $dataCustomer = Customer::all();

        $dataBarberDesc = BarberDescription::all();

        $dataCustomerDesc = CustomerDescription::all();

        $dataProduk = Product::all();

        return view('admin.admin',compact('dataUser', 'dataBarber', 'dataCustomer', 'dataBarberDesc', 'dataCustomerDesc', 'dataProduk'));
    }

    public function admindelete($id)
    {
        $datadataUser = User::find($id);
        $datadataUser->delete();
        return redirect()->route('admin');
    }

    public function produkterjual()
    {
        $orders = Order::with('products')->get();

        // $id = Auth::user()->id_user;
        // $dataCustomerDesc = CustomerDescription::where('customer_desc_id', '=', $id)->first();
        // $dataUser = User::where('id_user', '=', $id)->first();
        // $dataCustomer = Customer::where('customer_id', '=', $id)->get();
        // $dataPemesanan = Pemesanan::where('pemesanan_id_cust', '=', $id)->get();

        // $invoice = Invoice::where('customer_id', '=', $id)->get();
        // $orders = Order::where('order_id_cust', '=', $id)->get();

        return view('admin.produkterjual', compact('orders'));
    }

    public function adminstatusproceed($id)
    {   
        $dataPemesanan = Order::select('status_id')->where('id', $id)->first();
        
        $status_id = 2;

        Order::where('id', $id)->update([
            'status_id'=> $status_id
        ]);
        return redirect()->route('produkterjual');
    }

    public function adminstatusreject($id)
    {   
        $dataPemesanan = Order::select('status_id')->where('id', $id)->first();
        
        $status_id = 3;

        Order::where('id', $id)->update([
            'status_id'=> $status_id
        ]);
        return redirect()->route('produkterjual');
    }

    public function adminstatuspending($id)
    {   
        $dataPemesanan = Order::select('status_id')->where('id', $id)->first();
        
        $status_id = 1;

        Order::where('id', $id)->update([
            'status_id'=> $status_id
        ]);
        return redirect()->route('produkterjual');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
