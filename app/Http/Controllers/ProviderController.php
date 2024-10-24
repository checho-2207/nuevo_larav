<?php

namespace App\Http\Controllers;
use App\Models\Provider;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ //$product=Product::find(2);

       $provider=Provider::all();

       return view('proveedor.list', compact('providers'));

    }

    public function create (){

        return view('provider.create');

    }

    public function store(Request $request){

        $provider= new provider();

        $provider->name=$request->name;
        $provider->description=$request->description;
        $provider->price=$request->price;

        $provider->save();

        return $provider;


    }


}

