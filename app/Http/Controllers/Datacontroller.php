<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Datacontroller extends Controller
{
    public function index()
    {

        $test = "hi, Im Raeef!";
        return view('Dataviwe',compact('test'));

    }

    public function trans()
    {
        $tasks = DB::table('tasks')->get();
        return view('show',compact('tasks'));

    }
}
