<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;

class TestController extends Controller
{
    public function mostrar($nombre = "defecto")
    {
    	$categories = Category::all();

		return view('admin.index', compact('categories'));
    }
}
