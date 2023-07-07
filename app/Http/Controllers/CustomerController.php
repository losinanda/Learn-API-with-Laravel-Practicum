<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $customers = Customer::all();
        return response()->json([
            'data' => $customers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $customers = Customer::create([
            'name' => $request->name, 
            'email' => $request->email, 
            'address' => $request->address, 
        ]);
        return response()->json([
            'data' => "Data created successfully!"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
        $customer->name  = $request->name;
        $customer->email  = $request->email;
        $customer->address  = $request->address;
        $customer->save();
        return response()->json([
            'data' => "Data updated successfully!"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
        $customer->delete();
        return response()->json([
            'data' => "Data deleted successfully!"
        ]);
    }
}
