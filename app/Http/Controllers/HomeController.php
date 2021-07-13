<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Subfission\Cas\Facades\Cas;

class HomeController extends Controller
{

    /**
     * Destroy the CAS session and flush the session data
     */
    public function logout(Request $request)
    {
        $logout_url = env('CAS_LOGOUT_URL');
        $request->session()->flush();
        Cas::logout();
        return Redirect::away($logout_url);
    }
}
