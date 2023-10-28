<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index')->with([
            'employees' => $employees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'fullname'=> 'required',
        'registration_number'=> 'required|numeric|unique:employees,registration_number',
        'deparetement'=> 'required',
        'phone'=> 'required|numeric',
        'address'=> 'required',
        'city'=> 'required',
        'hire_date'=> 'required',
    ]);
    Employee::create($request->except('_token'));
    return redirect()->route('employees.index')->with([
        'success' =>'Employee added successfully'
    ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::where('registration_number',$id)->first();
        return view('employees.show')->with([
            'employee'=>$employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::where('registration_number',$id)->first();
        return view('employees.edit')->with([
            'employee'=>$employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::where('registration_number',$id)->first();
        $this->validate($request, [
            'fullname'=> 'required',
            'registration_number'=> 'required|numeric|unique:employees,id,' . $employee->registration_number,
            'deparetement'=> 'required',
            'phone'=> 'required|numeric',
            'address'=> 'required',
            'city'=> 'required',
            'hire_date'=> 'required',
        ]);
        $employee->update($request->except('_token','_method'));
        return redirect()->route('employees.index')->with([
            'success' =>'Employee updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::where('registration_number',$id)->first();
        $employee->delete();
        return redirect()->route('employees.index')->with([
            'success' =>'Employee deleted successfully'
        ]);
    }
    public function vacationRequest($id)
    {
        $employee = Employee::where('registration_number',$id)->first();
        return view('employees.vacation-request')->with([
            'employee'=>$employee
        ]);
    }
    public function certificateRequest($id)
    {
        $employee = Employee::where('registration_number',$id)->first();
        return view('employees.certificate-request')->with([
            'employee'=>$employee
        ]);
    }
}
