<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class loginController extends Controller
{
    // Login səhifəsinə girəndə view nu göstərdim
    public function login ()
    {
        return view( 'Auth.login' );
    }

    // Login etmək üçün control etdim
    public function loginPost ( loginRequest $request )
    {
        request()->flash();
        $user = User::where( 'email', '=', $request->email )->first();

        if ( $user === NULL )
        {
            toastr()->error( __( 'login.email_not_found' ), __( 'login.attention' ) );
        }
        else
        {
            if ( password_verify( $request->password, $user->password ) )
            {
                if ( $request->remember_me === 'on' )
                {
                    Cookie::queue(
                        Cookie::make( 'email', $request->email, 10 * 365 * 24 * 60 )
                    );

                    Cookie::queue(
                        Cookie::make( 'password', $request->password, 10 * 365 * 24 * 60 )
                    );

                    Cookie::queue(
                        Cookie::make( 'rememberMe', 'checked', 10 * 365 * 24 * 60 )
                    );
                }
                else
                {
                    Cookie::queue(
                        Cookie::forget( 'email' )
                    );

                    Cookie::queue(
                        Cookie::forget( 'password' )
                    );

                    Cookie::queue(
                        Cookie::forget( 'rememberMe' )
                    );
                }

                auth()->loginUsingId( $user->id, TRUE );
                toastr()->success( $user->name, __( 'login.welcome' ) );

                return redirect()->route( 'admin.dashboard' );
            }
            else
            {
                toastr()->error( __( 'login.password_is_incorrect' ), __( 'login.attention' ) );
            }
        }

        return view( 'Auth.login' );
    }

    //Logout edirəm
    public function logout ( Request $request )
    {
        auth()->logout();

        return redirect()->route( 'login' );
    }
}
