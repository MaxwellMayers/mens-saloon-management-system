<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Service;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        
        return view('customer.index', ['customers' => $customers]);
    }

    public function create()
    {
        $customers = Customer::all();
        $services = Service::all(); 
        
        return view('customer.create', compact('customers','services'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required|string',
        ]);

        return redirect('/customer/create')->with('success', 'Customer information has been saved.');
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customers.show', compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the customer data.
    }

    public function destroy($id)
    {
        // Delete the customer record.
    }
}



