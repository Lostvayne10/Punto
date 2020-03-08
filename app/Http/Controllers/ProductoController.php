<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class ProductoController extends Controller
{
    public function store(Request $response)
    {
        $this->validate($response, [
            'barcode'=>'required',
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'qty_stock'=>'required'
        ]);
        Productos::create($response->all());
        return;
    }

    public function showall()
    {
        return Productos::get();
    }

    public function show(Request $response)
    {
        return Productos::get()->where('barcode',$response.codigo);
    }

}
