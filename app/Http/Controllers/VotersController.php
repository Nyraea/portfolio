<?php

namespace App\Http\Controllers;
use App\Models\Voters;
use Illuminate\Http\Request;

class VotersController extends Controller
{
    public function index()
    {
        $voters = Voters::all();
        return view('voters', compact('voters'));
    }
}
