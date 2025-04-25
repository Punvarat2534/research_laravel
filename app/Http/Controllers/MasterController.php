<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;


class MasterController extends Controller
{
    public function index()
    {
        $activity = new Activity();

        $data["activity"] =  $activity::all();

        return view('master', $data);
    }
}
