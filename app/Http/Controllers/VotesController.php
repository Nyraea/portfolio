<?php

namespace App\Http\Controllers;
use App\Models\Votes;
use Illuminate\Http\Request;

class VotesController extends Controller
{
    public function index()
	{
       		$votes = Votes::all();
        	return view('votes', compact('votes'));
	}
}
