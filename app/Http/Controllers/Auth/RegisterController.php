<?php

namespace App\Http\Controllers\Auth;

use App\User;
use DB;
use App\interest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'interest'    => 'required',
            // 'gender'     => '',
            // 'about'      =>'',
            // 'location'=>''
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $data= User::create([
            'name'        =>  $data['name'],
            'email'       =>  $data['email'],
            'password'    =>  Hash::make($data['password']),
            'age'         =>  $data['age'],

            'gender'      =>  $data['gender'],
            'work'        =>  $data['work'],
            'about'       =>  $data['about'],
        ]);
        $id=$data->id;
        //dd($id);
        //dd($data['interest']);
        foreach($data['interest'] as $intr){
          //$arra=[]
        }
    }

    public function showRegistrationForm() {
    //$data = [1, 2, 3, 4];
    $interests=DB::table('interests')
            ->orderBy('created_at','DESC')
            ->get();
    return view ('auth.register', compact('interests'));
}
}
