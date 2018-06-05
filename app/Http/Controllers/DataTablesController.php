<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Datatables;

class DataTablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('datatables.index',compact('products')); 
    }

    public function show()
    {
        $data=Product::all();
      return datatables::of($data)
       ->addColumn('action', function ($user) {
                return '<button data-id="editproduct'.$user->id.'" class="btn btn-xs btn-primary btn-edit" value="abcdef"><i class="glyphicon glyphicon-edit"></i> Edit</button>';
            })
            ->editColumn('id', '{{$id}}')
           ->make(true);
    }

   
}
