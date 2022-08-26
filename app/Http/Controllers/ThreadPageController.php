<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadPageController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('Pages.ThreadPage');
    }
}
