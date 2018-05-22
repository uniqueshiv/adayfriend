<?php

namespace App\Http\Controllers;;

use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
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

     public function index(){
       $id=Auth::id();
       //dd($id);
      $user=DB::table('users')
                ->where('id','=',$id)
                ->get();
                //dd($user);
        return view('profile.show',compact('user'));
     }
    public function show($id)
    {
       $user=Auth::user();

        return view('profile.show',compact('user'));
    }
}
