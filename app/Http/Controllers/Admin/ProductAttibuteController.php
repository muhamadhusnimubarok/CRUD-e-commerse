<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductAttibuteController extends Controller
{
    public function index(){
        return view('admin.product_attribute.crate');
    }
    public function manage(){
        return view('admin.product_attribute.manage');
    }
}
