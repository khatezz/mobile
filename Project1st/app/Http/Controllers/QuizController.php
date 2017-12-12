<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use JWTAuth;
use Illuminate\Http\Request;
use App\Quiz;
use App\Addtrue;
use App\Addidentify;
use App\Announcement;
use App\Multiple;
use App\Defquiz;
use App\Trues;
use App\identifies;
use App\Userans;
use App\User;
use App\Answerstud;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Exceptions\JWTException;


class QuizController extends Controller
{ 

     public function test()
    {
        Announcement::createAnnouncement('test', 1, 'NEWS_CREATED', 'test', 1);
    }
    
    


    public function getNonSeenAnnounce(){

       $user = JWTAuth::toUser()->id;
       $announcements = Announcement::where('seen', '=', 0)
          ->where('user_id', '=', $user)
          ->get();

     
          $response = [
          'announcements' => $announcements,
          
        ];

        

        return response()->json($response, 200);
      

      }

     

    public function getAnnouncementByUser(Request $request){

         $user = JWTAuth::toUser()->id;

          $announcements =Announcement::where('user_id', '=', $user)
            ->latest()
            ->get();
        

            $response = [
            'announcements' => $announcements
        ];
        return response()->json($response,200);
    }


    public function seenAnnounceByUser(Request $request){

         $user = JWTAuth::toUser()->id;
        // $announcement =Announcement::where('user_id', '=', $user)
        //     ->select('user_id')
        //     ->get();

      
           $announcements = DB::table('announcements')
            ->where('user_id', '=', $user)
            ->update([
                'seen' => true
            ]);
           
            $response = [
              'announcements' => $announcements
            ];

            return response()->json($response, 200);

    }





     public function getQuizId($id){
     

      $multiples = Quiz::find($id);

        // if(!$multiples){
        //     return response()->(['message' => 'document not found'], 404);
        // }

      // $multiples = DB::table('multiples')
      //           ->where('quiz_id', '=', $id)
      //           ->get();
      

        $response =[
            'multiples' => $multiples
        ];
        return response()->json($response, 200);

    }
    



    public function getquiz(){

      // $user = JWTAuth::toUser()->sec_id;

    	$quiz = Quiz::all();
    	$response = [
    		'quizzes' => $quiz
    	];

    	return response()->json($response, 200);

    }





     public function gettrue(Request $request){

     $true = Addtrue::all();

      // $true = DB::table('addtrues')
      //   ->select('id')
      //   ->get();
     // $true = $request->id;

     $response = [
         'addtrues' => $true
     ];

     return response()->json($response, 200);
    }


      public function getidentify(){

     $identify = Addidentify::all();
     $response = [
         'addidentifies' => $identify
     ];

     return response()->json($response, 200);
    }



      public function getannounce(){

        $announce =Announcement::latest()
        ->get();

          // $announce =Announcement::all();
       
        $response = [
            'announcements' => $announce
        ];

        return response()->json($response, 200);
    }



    public function gettruequest(){

        $question = DB::table('trues')
                
                ->get();

                 $response =[
                'trues' => $question
                ];

                return response()->json($response,200);
    }

    public function getidenquest(){

        $question = DB::table('identifies')
                 
                ->get();

                 $response =[
                'identifies' => $question
                ];

                return response()->json($response,200);
    }


     public function questm1(){
    $quest = Defquiz::all();
        $response = [
            'defquizzes' => $quest
        ];

        return response()->json($response, 200);
  }


  


    public function manswer1(Request $request){
         
        $quest = new Userans();
        $quest->user_id = Auth::user()->id;
        $quest->answer = $request->input('answer');
        $quest->save();
        return response()->json(['quest' => $quest], 201);
            
    }

    public function answerm1(){

        // $quest = Defquiz::all();

        $quest = DB::table('defquizzes')
            ->join('answerstuds', 'answerstuds.id', '=', 'defquizzes.id')
            ->where('answerstuds.user_id', '=', JWTAuth::toUser()->id)
            ->select( 'defquizzes.answer', 'answerstuds.answeruser')
            ->get();

        

         $response =[
            'quest' => $quest
        ];

         return response()->json($response,200);

    }

    public function answerm1a(){

        
        
        
        $quest = DB::table('defquizzes')
            ->join('answerstuds', 'answerstuds.id', '=', 'defquizzes.id')
            ->where('answerstuds.user_id', '=', JWTAuth::toUser()->id)
            ->select( 'defquizzes.answer', 'answerstuds.answeruser')
            ->get();
    
          $response =[
                'quest' => $quest
                 ];

         return response()->json($response,200);
         
    }


    public function postanswer(Request $request){

        $answer = new Answerstud();
        $answer->answeruser = $request->input('answeruser');
        $answer->user_id = JWTAuth::toUser()->id;
        $answer->sec_id = JWTAuth::toUser()->sec_id;
        $answer->save();
        return response()->json(['answer' => $answer], 201);

    }


    public function quiz_a(){

        $quiz = Answerstud::where('user_id' , '=' , JWTAuth::toUser()->id)
                ->select('answeruser')->limit(5)->get();

                
         $response =[
                'quiz' => $quiz
                 ];

         return response()->json($response,200);

    }

}