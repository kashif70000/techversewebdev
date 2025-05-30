<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function admin_items_index(){

        
        return view('admin.items',get_defined_vars());

    }
}
