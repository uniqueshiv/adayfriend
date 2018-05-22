<?php

namespace App\Http\Controllers;
use Socialite;
use Illuminate\Support\Facades\Auth;
use App\User;

class FacebookController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $suser = Socialite::driver('facebook')->user();

        $fuser=User::where('email',$suser->email)->first();
// echo $fuser;
// echo $suser->name;
// echo $suser->getName();
// echo $suser->getEmail();

        if($fuser){
          Auth::login($fuser,true);
          //  return redirect('home');
            return redirect()->action('HomeController@index');
        }else{
          $user=new User;

          $user->name=$suser->name;
          $user->email=$suser->email;
          $user->password=bcrypt('assss');
          $user->save();

          Auth::login($suser->email);
          return redirect('home');
        }

    }
}
