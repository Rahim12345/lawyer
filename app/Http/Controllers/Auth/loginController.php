<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use App\Http\Requests\profileUpdate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class loginController extends Controller
{
    // Login səhifəsinə girəndə view nu göstərdim
    public function login ()
    {
        App::setLocale(Cookie::get('lang'));
        return view( 'Auth.login' );
    }

    // Login etmək üçün control etdim
    public function loginPost ( loginRequest $request )
    {
        App::setLocale(Cookie::get('lang'));
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
        App::setLocale(Cookie::get('lang'));
        auth()->logout();

        return redirect()->route( 'login' );
    }

    public function profile()
    {
        $user = User::whereId(auth()->user()->id)->first();
        return view('Admin.Pages.profile',[
            'user'=>$user
        ]);
    }

    public function profileUpdate(profileUpdate $request)
    {
        $user = User::whereId(auth()->user()->id)->first();
        if (password_verify($request->old_password,$user->password))
        {
            User::whereId(auth()->user()->id)->update([
                'email'=>$request->email,
                'name'=>$request->name,
                'password'=>bcrypt($request->new_password)
            ]);

            toastr()->success('Hesab uğurla redaktə edildi','Uğurlu əməliyyat');
            return redirect()->route('logout');
        }
        else
        {
            toastr()->error('Köhnə şifrə yanlışdır','Xəta');
            return redirect()->back();
        }
    }
}
