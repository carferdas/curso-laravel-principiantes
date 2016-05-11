<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class TestController extends Controller
{
    public function mostrar($nombre = "defecto")
    {
    	return $nombre;
    }
}
