<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class WebController extends Controller
{

    
    public function login_user(Request $request)
    {   
        $validate = Validator::make($request->all(), [
            'email_address' => 'required',
            'password' => 'required',
        ]);
        if($validate->fails()){
           return back()->withErrors($validate->errors())->withInput();
        }
        $data = $request->all();
        if (Auth::attempt(['email_address' => $data['email_address'],'password' => $data['password']])) {
            return redirect('home');
        }
        return redirect()->back()->with('error', 'The provided credentials do not match our records.');
       
    }

    public function user_register(Request $request)
    {   
        $validate = Validator::make($request->all(), [
            'email_address' => 'required',
            'password' => 'required',
        ]);
        if($validate->fails()){
           return back()->withErrors($validate->errors())->withInput();
        }
        $data = $request->all();
        $user = User::create([
            
            'name' => $data['first_name'].' '.$data['last_name'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email_address'],
            'password' => Hash::make($data['password'])
          ]);

        if($user){
            return redirect('login');
        }else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
    
        }

    }

    public function get_query($data){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://www.sportsdrive.in/api/query_fetch',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => $data,
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
        

    }
}
