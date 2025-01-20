<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use App\Http\Requests\Employees\StoreRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = Employee::paginate(10);
        return view('admin/employees/index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/employees/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        $data=$request->all();
        Employee::create($data);
        return to_route('employees.index')->with ('status','Empleado Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
        return view('admin/employees/show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
        echo view('admin/employees/edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
        $data=$request->all();//Pasamos todos los datos
        $employee->update($data); //Actualizamos los datos en la base de datos
        return to_route('employees.index')->with ('status','Empleado Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Employee $employee){
        echo view('admin/employees/delete',compact('employee'));
    }
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
        return to_route('employees.index')->with('status','Empleado Eliminada');
    }
}
