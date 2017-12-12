<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Section;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class PupilsController extends Controller
{
    //


    // public function postanswer(Request $request){

    //     $answer = new Answerstud();
    //     $answer->answeruser = bcrypt($request->input('answeruser'));
    //     $answer->user_id = JWTAuth::toUser()->id;
    //     $answer->sec_id = JWTAuth::toUser()->sec_id;
    //     $answer->save();
    //     return response()->json(['answer' => $answer], 201);

    // }

	public function signup(Request $request){

			$pupil = new User();
			
		 	$pupil->code = $request->input('code');
		 	$pupil->fname = $request->input('fname');
		 	$pupil->lname = $request->input('lname');
		 	$pupil->username = $request->input('username');
		 	$pupil->password = bcrypt($request->input('password'));

		 		

      		$pupil->save();	
		 	return response()->json(['pupil' => $pupil], 201);

			}

		//  $this->validate($request, [
		//  		'type' => 'required',
		//  		'code' => 'required',
  //               'fname' => 'required',
  //               'lname' => 'required',
  //              'sec_id' => 'required',
  //               'username'=> 'required|min:2|max:12',
  //               'password'=> 'required|min:6|max:12',
            
  //               ]);

		//  $pupil = new User([

		//  	 $pupil->type = $request->input('type'),
		//  	 $pupil->code = $request->input('code'),
		//  	 $pupil->fname = $request->input('fname'),
		//  	 $pupil->lname = $request->input('lname'),
		//  	 $pupil->sec_id = $request->input('sec_id'),
		//  	 $pupil->username = $request->input('username'),
		//  	 $pupil->password = bcrypt($request->input('password'))

		//  	]);

		//   $pupil->save();
  //       return response()->json(['pupil' => $pupil], 201);

		// }


		 // $pupil = new Section([

		 // 	 $pupil->code = $request->input('code'),
		 // 	]);

		 	
		 

		   // $credentials = DB::table('users')
     //            ->join('sections', 'sections.code' , '=', 'users.code')
     //            ->get();


			
			// }
			public function code(Request $request){

				 $this->validate($request, [
                
                'code'=> 'required', 
                'username'=> 'required', 
                'password'=> 'required|min:6|max:12',            
                ]);

					$credentials = $request->only('code', 'password','username');

			try {

			 	if(!$token = JWTAuth::attempt($credentials)){
			 		return response()->json([
			 				'error' => 'invalid credentials'
			 			], 401);
			 	}
			 	
			 } catch (JWTException $e) {
			 	return response()->json([
			 			'error' => 'could not create token '
			 		], 500);
			 }

			 $user = JWTAuth::toUser($token);

			 return response()->json([
			 		'token' => $token,
			 		'user' => $user
			 	], 200);


			}




	public function signin(Request $request){

			 $this->validate($request, [
                
                'username'=> 'required|min:2|max:12',
                'password'=> 'required|min:6|max:12',
                'code'=> 'required',
               
                
                ]);
			 $credentials = $request->only('username', 'password','code');
			 

			 	 
 				try {

			 	if(!$token = JWTAuth::attempt($credentials)){
			 		return response()->json([
			 				'error' => 'invalid credentials'
			 			], 401);
			 	}
			 	
			 } catch (JWTException $e) {
			 	return response()->json([
			 			'error' => 'could not create token '
			 		], 500);
			 }

			 $user = JWTAuth::toUser($token);

			 return response()->json([
			 		'token' => $token,
			 		'user' => $user
			 	], 200);
	

	}



	public function users()
    {
        $user = JWTAuth::toUser();
        $response = [
            'user' => $user
        ];
        return response()->json($response,200);
    }

	
}
