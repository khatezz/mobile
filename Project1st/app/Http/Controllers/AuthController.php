<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Teacher;
use Input;
use Validator;
use Redirect;
class AuthController extends Controller
{
    //

    public function main(){
    	if(!Auth::check()){
    		return view('auth.login');
    	}

    		return redirect()->route('user');
    }

   

    public function register(){
            return view('auth.register');
    }
     

    public function register_ok(Request $request){

    		$fname = Input::get('fname');
            $lname = Input::get('lname');
            $code = Input::get('code');
            $username = Input::get('username');
            $password = Input::get('password');

             $rules = array(
                'fname' => 'required',
                'lname' => 'required',
                'code' => 'required',
                'username'=> 'required|min:2|max:12',
                //'email' => 'required',
                'password'=> 'required|min:6|max:12',
                'repeat_password'=>'required|same:password'
            );

        $validator=Validator::make(Input::all(), $rules);

           if ($validator->fails()) {

            //redirect our users back with error messages

            $messages =$validator->messages();

            //send back to page with the input data and error
            return Redirect::to('register')->withInput()->withErrors($validator);

    }

            
            $user = new User;
            $user->fname = ucfirst($request['fname']);
            $user->lname = ucfirst($request['lname']);
            $user->code = $request['code'];
            $user->username = ucfirst($request['username']);
            $user->password = bcrypt($request['password']);
            $user->save();

            return redirect()->route('index');	
}


    public function login(Request $request){
            $this->validate($request, [
                'username' => 'required|min:2|max:12',
                'password' => 'required|min:6|max:12',
                'code' => 'required',
                ]);
 
            if(Auth::attempt(['username'=>$request['username'], 'password'=>$request['password'],'code'=>$request['code']])){
                return redirect()->route('index');
            }else{
                $args = array('info' => 'Invalid Username and Password!' );
                return redirect()->back()->with($args); 
            }
    }
}
