<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Reservation;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getReservations(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $status   = $request->input('status');
       
        if (Auth::attempt(['email' => $username, 'password' => $password])){
            $res = Reservation::where('status', $status)->get();
            $result =  array('status' => "true" , 'res' => $res);
        }else{
            $result = array('status' => false , 'message' => 'Please check user name and passwd');
        }
        return  json_encode($result);
    }
}
