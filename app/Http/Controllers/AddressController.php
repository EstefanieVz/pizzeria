<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Http\Controllers\Controller;
use App\Http\Requests\Addresses\StoreRequest;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $addresses = Address::paginate(3);
        return view('admin/addresses/index',compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/addresses/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        $data=$request->all();
        Address::create($data);
        return to_route('addresses.index')->with ('status','Dirección Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        //
        return view('admin/addresses/show',compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        //
        echo view('admin/addresses/edit',compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        //
        $data=$request->all();//Pasamos todos los datos
        $address->update($data); //Actualizamos los datos en la base de datos
        return to_route('addresses.index')->with ('status','Dirección Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Address $address){
        echo view('admin/addresses/delete',compact('address'));
    }
    public function destroy(Address $address)
    {
        //
        $address->delete();
        return to_route('addresses.index')->with('status','Dirección Eliminada');
    
    }
}
