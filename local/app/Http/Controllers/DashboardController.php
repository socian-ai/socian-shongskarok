<?php

namespace App\Http\Controllers;
use App\Models\Wordlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ini_set('memory_limit', '2048M');
        $wordlist = Wordlist::all()->pluck('value')->toArray();;
        return view('dashboard', ['wordlist' => $wordlist]);
    }
}
