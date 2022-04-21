<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index()
    {
        $date = changeDateFormat(date("Y-m-d"),"d/m/Y");
        dd($date);
    }
}
