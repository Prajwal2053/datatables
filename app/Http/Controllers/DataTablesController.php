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
        
        return view('datatables.index'); 
    }

    public function show()
    {
        $data=Product::all();
      return datatables::of($data)
       ->addColumn('action', function ($user) {
                return '<button id="edit'.$user->id.'" class="btn btn-xs btn-primary" value="abcdef"><i class="glyphicon glyphicon-edit"></i> Edit</button>';
            })
            ->editColumn('id', '{{$id}}')
           ->make(true);
    }

   
}
