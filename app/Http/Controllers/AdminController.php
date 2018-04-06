<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;

class AdminController extends Controller
{
    public function index(){
        $participants = Participant::all();
        return view('admin.index', compact('participants'));
    }
}
