<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Appointment;
use App\Http\Models\Customer;
use App\Http\Models\Service;
use App\Http\Models\Employee;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customerCount = Customer::count();
        $serviceCount = Service::count();
        $employeeCount = Employee::count();
        $appointmentCount = Appointment::count();

        return view ('dashboard.index' )->with(['customerCount ' => $customerCount,'serviceCount' => $serviceCount,'employeeCount' => $employeeCount,'appointmentCount' => $appointmentCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
