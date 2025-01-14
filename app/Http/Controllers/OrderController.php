<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Client;
use App\Models\Pizza;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $orders = Order::paginate(3);
        return view('admin/orders/index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $addresses=Address::pluck('id','street');
        $clients=Client::pluck('id','name');
        $pizzas=Pizza::pluck('id','name');
        return view('admin/orders/create',compact('addresses','clients','pizzas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data=$request->all();
        Order::create($data);
        return to_route('orders.index')->with ('status','Pedido Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
        return view('admin/orders/show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
        $addresses=Address::pluck('id','street');
        $clients=Client::pluck('id','name');
        $pizzas=Pizza::pluck('id','name');
        return view('admin/orders/create',compact('order','addresses','clients','pizzas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
        $data=$request->all();//Pasamos todos los datos
        $order->update($data); //Actualizamos los datos en la base de datos
        return to_route('orders.index')->with ('status','Pedido Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Order $order){
        echo view('admin/orders/delete',compact('order'));
    }
    public function destroy(Order $order)
    {
        //
        $order->delete();
        return to_route('orders.index')->with('status','Pedido Eliminado');
    }
}
