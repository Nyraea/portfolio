<?php

namespace App\Http\Controllers;
use App\Models\Candidates;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    public function index()
	{
       		$candidates = Candidates::all();
        	return view('candidates', compact('candidates'));
	}
}
