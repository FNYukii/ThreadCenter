<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountPageController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('Pages.AccountPage');
    }
}
