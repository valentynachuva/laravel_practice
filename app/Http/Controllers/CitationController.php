<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitationController extends Controller
{
    public function show()
    {
        $citation = 'bla bla bla';

        return view('inspire', compact('citation'));
    }
}
