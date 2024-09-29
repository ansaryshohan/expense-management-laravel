<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view("master.pages.allClient");
    }

    public function create()
    {
        return view("master.pages.addClient");
    }
    public function store()
    {
        
    }
    public function show()
    {
        
    }
}
