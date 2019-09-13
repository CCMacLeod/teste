<?php

namespace FederalSt\Http\Controllers;

use Illuminate\Http\Request;
use FederalSt\User;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = User::customers();
        return view('customer_list',['customers'=>$customers]);
    }
}
