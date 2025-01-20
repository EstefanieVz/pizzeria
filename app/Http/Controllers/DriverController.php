<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Http\Controllers\Controller;
use App\Http\Requests\Drivers\StoreRequest;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $drivers = Driver::paginate(10);
        return view('admin/drivers/index',compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/drivers/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        $data=$request->all();
        Driver::create($data);
        return to_route('drivers.index')->with ('status','Repartidor Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        //
        return view('admin/drivers/show',compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        //
        echo view('admin/drivers/edit',compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        //
        $data=$request->all();//Pasamos todos los datos
        $driver->update($data); //Actualizamos los datos en la base de datos
        return to_route('drivers.index')->with ('status','Repartidor Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */

     public function delete(Driver $driver){
        echo view('admin/drivers/delete',compact('driver'));
    }
    public function destroy(Driver $driver)
    {
        //
        $driver->delete();
        return to_route('drivers.index')->with('status','Repartidor Eliminado');
    }
}
