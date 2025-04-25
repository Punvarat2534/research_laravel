<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {

        $data = [];     
        return view('master', $data);
    }
}
