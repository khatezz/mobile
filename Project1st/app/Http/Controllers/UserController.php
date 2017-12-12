<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

use Image;
use App\Quiz;
use App\User;
use App\True;
use App\Identify;
use App\Multiple;
use App\Addtrue;
use App\Addidentify;
use Storage;
use App\Announcement;



class UserController extends Controller
{
    //

    public function update_avatar(Request $request){

        if ($request->hasFile('avatar')){
            $avatar = $request->file('avatar');

            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('uploads/avatars/' . $filename) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('pages.profile', array('user' => Auth::user()));
    }


  

    

    public function profile(){

        return view('pages.profile', array('user' => Auth::user() ));
    }



    public function addlesson(){  
         
         $quizzes = DB::table('users')
                ->join('quizzes', 'quizzes.user_id', '=' , 'users.id')
                ->where('quizzes.user_id', Auth::user()->id)
                ->paginate(5);
                
        return view('pages.addlesson',compact('quizzes'));
    }






    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }


    ////////////////////////// CRUD FOR SET OF QUIZ     ////////////////////////////////

    public function add_quiz(Request $request){
        $this->validate($request,[
                'title' => 'required',
                'items' => 'required',
                
               
            ]);
       
    
        $quiz = new Quiz;


        $quiz->user_id = Auth::user()->id;
        $quiz->title = $request['title'];
        $quiz->items = $request['items'];
        $quiz->sec_id = $request['sec_id'];
        $quiz->save();

        $success = array('ok'=>'Quiz Added Successfully!!');
        return redirect()->back()->with($success);
        

    }

    public function delete_quiz(Request $request, $quiz_id){
        $quiz = Quiz::findOrFail($quiz_id);
         // $success = array('ok'=>'Quiz Deleted Successfully!!');
        return view('pages.addlesson', compact('quiz'));
    }


     public function del_quiz(Request $request, $quiz_id){
       
        $quiz = Quiz::where('id', $quiz_id)->delete();
         $success = array('ok'=>'Quiz Deleted Successfully!!');
        return redirect()->back()->with($success, $quiz);
    }

    public function edit_quiz($quiz_id){
       
            $quiz= Quiz::findOrFail($quiz_id);
            return view('pages.editquiz',compact('quiz'));
    }

    public function update_quiz(Request $request, $quiz_id){
       $this->validate($request, [
            'title' => 'required',
            'items' => 'required',
            'sec_id' => 'required'
        ]);

       $quiz = Quiz::where('id', $quiz_id)->update([
            'title' => $request['title'],
            'items' => $request['items'],
            'sec_id' => $request['sec_id']
        ]);


        return redirect('/addlesson');

    }

    //////////////////////////////////////// CRUD FOR MULTIPLE CHOICE /////////////////////////////////

   
    public function addmultiple(Request $request, $id){
       $quiz = Quiz::where('id' , $id)->first();
       
      $items= DB::table('quizzes')
                ->join('multiples', 'multiples.quiz_id','=', 'quizzes.id')
                ->where('multiples.quiz_id' ,'=', $id )
                ->pluck('quizzes.items');

        $item= $items->first();
        
       $question = DB::table('quizzes')
                ->join('multiples', 'multiples.quiz_id', '=' , 'quizzes.id')
                ->where('multiples.user_id', Auth::user()->id)
                ->where('multiples.quiz_id', '=' , $id)      
                ->get();

        $controls_count= $question->count();


       return view('pages.addmultiple', compact('question','quiz','controls_count','item'));
    }


     public function multiple(){
        $question = Multiple::all();
        return view('pages.addquiz',compact('question'));
    }

        public function add_quest(Request $request){
            $this->validate($request,[

                'quest' => 'required',
                'a' => 'required',
                'b' => 'required',
                'c' => 'required',
                'd' => 'required',
                'answer' => 'required'
            ]);

           
            

           

              $multiple = new Multiple;
              $multiple->user_id = Auth::user()->id;
              $multiple->quest = $request['quest'];
              $multiple->quiz_id= $request['quiz_id'];  
              $multiple->a = $request['a'];
              $multiple->b = $request['b'];
              $multiple->c = $request['c'];
              $multiple->d = $request['d'];
              $multiple->answer = $request['answer'];
            $multiple->save();

        $success = array('ok'=>'Quiz Added Successfully!!');
        return redirect()->back()->with($success);

        }



      
        public function delete_quest(Request $request, $quest_id){

           
        $quest = Multiple::where('id', $quest_id)->delete();
 
         $success = array('ok'=>'Quiz Deleted Successfully!!');
        return redirect()->back()->with($success);
    }


         public function edit_quest($quest_id){

        $quest = Multiple::where('id', $quest_id)->first();
        if(!$quest){
            return 'no ID';
        }

            return view('pages.editquest',compact('quest'));
    }


         public function update_quest(Request $request, $quest_id){
        $this-> validate($request, [
                'quest' => 'required',
                'a'=> 'required',
                'b' => 'required',
                'c' => 'required',
                'd' => 'required',
                'answer' => 'required'

            ]);

        $quest = Multiple::where('id', $quest_id)->update([
                'quest' => $request['quest'],
                'a' => $request['a'],
                'b' => $request['b'],
                'c' => $request['c'],
                'd' => $request['d'],
                'answer' => $request['answer'],

            ]);
         
        return redirect('/addlesson');

    }


    /////////////         CRUD FOR TRUE OR FALSE ///////////////////////////

    public function true(){
        $question = True::all();
        return view('pages.true',compact('question'));
    }

    public function addfalse($id){  

        $quiz = Addtrue::where('id', $id)->first();    
       $question = DB::table('addtrues')
                ->join('trues', 'trues.quiz_id', '=' , 'addtrues.id')
                ->where('trues.user_id', Auth::user()->id)
                ->where('trues.quiz_id', '=' , $id)       
                ->get();

        $items= DB::table('addtrues')
                ->join('trues', 'trues.quiz_id','=', 'addtrues.id')
                ->where('trues.quiz_id' ,'=', $id )
                ->pluck('addtrues.items_true');

        $item=$items->first();

        $controls_count= $question->count();

       return view('pages.addfalse', compact('question','quiz','controls_count','item'));

    }

     public function addtrue(Request $request){
            $this->validate($request,[

                'question' => 'required',
                'answer' => 'required'
            ]);

           
           
                
                $true = new True;

                $true->user_id = Auth::user()->id;
               
                $true->quiz_id= $request['quiz_id'];
                $true->question = $request['question'];
                $true->answer = $request['answer'];
                $true->save();

        $success = array('ok'=>'Quiz Added Successfully!!');
        return redirect()->back()->with($success);

    }

        public function delete_true(Request $request, $userId){
        $quest = True::where('id', $userId)->delete();

         $success = array('ok'=>'Quiz Deleted Successfully!!');
        return redirect()->back()->with($success);
    }



         public function edit_true($userId){

        $quest = True::where('id', $userId)->first();
        if(!$quest){
            return 'no ID';
        }

            return view('pages.editTrue',compact('quest'));
    }
    

    public function update_true(Request $request, $userId){
        $this-> validate($request, [
                'question' => 'required',
                'answer' => 'required'

            ]);

        $quest = True::where('id', $userId)->update([
                'question' => $request['question'],
                'answer' => $request['answer'],

            ]);
         
        return redirect('/addt_quests');

    }





    ///////////////////// CRUD FOR IDENTIFICATION /////////////////////////////////

    public function identify(){
        $question = Identify::all();
        return view('pages.identify',compact('question'));
    }


    public function addidentify($id){

        $quiz = Addidentify::where('id', $id)->first();
       $question = DB::table('addidentifies')
                ->join('identifies', 'identifies.quiz_id', '=' , 'addidentifies.id')
                ->where('identifies.user_id', Auth::user()->id) 
                ->where('identifies.quiz_id','=', $id)      
                ->paginate(5);

        $counts= $question->count();

        $items= DB::table('addidentifies')
                ->join('identifies', 'identifies.quiz_id','=','addidentifies.id')
                ->where('identifies.quiz_id', '=', $id)
                ->pluck('addidentifies.items_identify');

        $item=$items->first();

       return view('pages.addidentify', compact('question', 'quiz','counts','item'));
    }


    public function add_identify(Request $request){
        $this->validate($request,[
                
                'quest' => 'required',
                'answer' => 'required'
            ]);

          
            

              $true = new Identify;

              $true ->user_id = Auth::user()->id;
               
                $true->quiz_id = $request['quiz_id'];
              $true->quest = $request['quest'];
              $true->answer = $request['answer'];
            $true->save();

        $success = array('ok'=>'Quiz Added Successfully!!');
        return redirect()->back()->with($success);
    }


         public function delete_identify(Request $request, $quizId){
        $quest = Identify::where('id', $quizId)->delete();

         $success = array('ok'=>'Quiz Deleted Successfully!!');
        return redirect()->back()->with($success);
    }



         public function edit_identify($quizId){

        $quest = Identify::where('id', $quizId)->first();
        if(!$quest){
            return 'no ID';
        }

            return view('pages.editIdentify',compact('quest'));
    }


         public function update_identify(Request $request, $quizId){
        $this-> validate($request, [
                'quest' => 'required',
                'answer' => 'required'

            ]);

        $quest = Identify::where('id', $quizId)->update([
                'quest' => $request['quest'],
                'answer' => $request['answer'],

            ]);
         
        return redirect('/addi_quest');

    }



}
