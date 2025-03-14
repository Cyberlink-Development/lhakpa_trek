<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function login(Request $request){
        $g_recaptcha_response = $request->input('g_recaptcha_response');
        $result = $this->getCaptcha($g_recaptcha_response);
        // // Check if success is true and Score is greater than 0.5 [ $result->score > 0.5 ]
        if($result->success == true && $result->score > 0.5){
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'pin' => $request->pin])) {

            // Authentication passed...
            if(Auth::user()->suspended){
                return redirect('account-suspended');
            }
            return redirect()->intended('admin/dashboard');
        }
         return redirect()->intended('adminisclient')->with('status', 'Invalid Username, Password or PIN!');
        }else{
            return redirect('adminisclient')->with('status', 'You are Robot!');
        } 
    }


        private function getCaptcha($secretKey){
        $secret_key = env('SECRET_KEY');
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret_key."&response={$secretKey}");
        $result = json_decode($response);
        return $result; 
    }

    public function login_user(Request $request)  
    {
        if ($request->isMethod('post')) {   
            $request->validate([
                'email' => 'required',
                'password' => 'required'  
            ]);
            $email = $request->email;
            $password = $request->password;

            $remember = $request->has('remember') ? true : false;  
            // if($remember==false)
            // {
            //     return back()->with('error',"Please check remember me!");
            // }

            if (Auth::attempt(['email' => $email, 'password' => $password],$remember)) {
                if (Auth::user()->verified == '1' && Auth::user()->roles == 'user') {
                    return redirect()->route('user-profile')->with('success', 'Logged in');
                }
                if (Auth::user()->verified == '0') {
                    Auth::logout();
                    return back()->with('error', 'Please verify first');
                }
            } else {
                return back()->with('error', 'No account found with this email!'); 
            }
        }
    }

    public function user_profile()
    {
        return view('themes.default.user.profile');  
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended(route('index.front'));

    }

}
