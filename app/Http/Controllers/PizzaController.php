<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Http\Controllers\Controller;
use App\Http\Requests\Pizzas\StoreRequest;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pizzas = Pizza::paginate(3);
        return view('admin/pizzas/index',compact('pizzas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/pizzas/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        $data=$request->all();
        Pizza::create($data);
        return to_route('pizzas.index')->with ('status','Pizza Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pizza $pizza)
    {
        //
        return view('admin/pizzas/show',compact('pizza'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pizza $pizza)
    {
        //
        echo view('admin/pizzas/edit',compact('pizza'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pizza $pizza)
    {
        //
        $data=$request->all();//Pasamos todos los datos
        $pizza->update($data); //Actualizamos los datos en la base de datos
        return to_route('pizzas.index')->with ('status','Pizza Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Pizza $pizza){
        echo view('admin/pizzas/delete',compact('pizza'));
    }
    public function destroy(Pizza $pizza)
    {
        //
        $pizza->delete();
        return to_route('pizzas.index')->with('status','Pizza Eliminada');
    }
}
