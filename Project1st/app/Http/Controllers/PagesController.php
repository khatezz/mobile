<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Pages;
use App\User;
use App\Quiz;
use App\Announcement;
use App\Addtrue;
use App\Addidentify;
use App\Student;
use App\Code;
use Input;
use Validator;
use Redirect;
use App\FileTable;
use Session;
// use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
    //

     public function main(){

         $user = Auth::user();
        return view('user.main', compact('user'));
    }

    public function todo(){
       

    	return view('pages.todo');
    }


     public function assignment(){
        return view('pages.assignment');
    }


    


     public function lesson(){
    	return view('pages.lesson');
    }

    public function addquiz(){
        return view('pages.addquiz');
    }


     public function navbar(){ 
       
         $user = Auth::user();
        return view('layouts.navbar');
    }

     // ///////////////////////////// CRUD FOR ASSIGNMENT ////////////////////////////////// 

    public function announcement(){
        $question = DB::table('users')
                ->join('announcements', 'announcements.user_id', '=' , 'users.id')
                ->where('announcements.user_id', Auth::user()->id)
                ->paginate(5);

       
                
        return view('pages.announcement',compact('question'));
    }
    
    public function addassignment(Request $request){
        $this ->validate($request,[
            'announce' => 'required'
            ]);


        $user = User::find(Auth::id());
    
        $announce = new Announcement; 
        $announce->announce = $request['announce'];
       
        $user->addannounce()->save($announce);

        $success = array('ok'=>'Quiz Added Successfully!!');
        return redirect()->back()->with($success);
    }



      public function delete_announce(Request $request, $user_id){

           
        $quest = Announcement::where('id', $user_id)->delete();
 
         $success = array('ok'=>'Quiz Deleted Successfully!!');
        return redirect()->back()->with($success);
    }



     public function edit_announce($user_id){

        $quest = Announcement::where('id', $user_id)->first();
        if(!$quest){
            return 'no ID';
        }

            return view('pages.editannounce',compact('quest'));
    }






    public function update_announce(Request $request, $user_id){
        $this-> validate($request, [
                'announce' => 'required'

            ]);

        $quest = Announcement::where('id', $user_id)->update([
                'announce' => $request['announce'],
                

            ]);
         
        return redirect('/announcement');

    }


    //////////////////  CRUD FOR CODE     ////////////////////////////////



    public function edit_code(Request $request, $id)
    {
        

        $quest = Code::where('id', $id)->first();
        if(!$quest){
            return 'no ID';
        }

            return view('pages.editcode',compact('quest'));
   
    }

    public function update_code(Request $request,$id){
         $this-> validate($request, [
                'code' => 'required'

            ]);

        $quest = Code::where('id', $id)->update([
                'code' => $request['code'],
                

            ]);
         
        return redirect('/todo');
    }
   

    //////////////////     CRUD FOR ASSIGNMENT ///////////////////////


   public function add_assign(Request $request){
        return $request;
    }


    ////////////////////// CRUD FOR AddQuestion for True ///////////////////////////


    public function addt_quests(){

        $quizzes = DB::table('users')
                ->join('addtrues', 'addtrues.user_id', '=' , 'users.id')
                ->where('addtrues.user_id', Auth::user()->id)
                
                ->paginate(5);

        
                
        return view('pages.addt_quests',compact('quizzes'));
    }

    public function addquiz_t(Request $request){
         $this->validate($request,[
                'title_true' => 'required',
                'items_true' => 'required',
                
                
            ]);
       
    
        $quiz = new Addtrue;

        $quiz->user_id = Auth::user()->id;
        $quiz->title_true = $request['title_true'];
        $quiz->items_true = $request['items_true'];
        $quiz->sec_id = $request['sec_id'];
        $quiz->save();

        $success = array('ok'=>'Quiz Added Successfully!!');
        return redirect()->back()->with($success);  
    }

    public function delete_t(Request $request, $id){

         $quiz = Addtrue::where('id', $id)->delete();

         $success = array('ok'=>'Quiz Deleted Successfully!!');
        return redirect()->back()->with($success);
    }
    
    public function edit_t($id){
          $quiz= Addtrue::findOrFail($id);

            return view('pages.addedit_t',compact('quiz'));
    }


    public function update_t(Request $request, $id){
        $this->validate($request, [
            'title_true' => 'required',
            'items_true' => 'required',
            'sec_id' => 'required'
            ]);

        $quiz = Addtrue::where('id', $id)->update([
            'title_true' => $request['title_true'],
            'items_true' => $request['items_true'],
            'sec_id' => $request['sec_id']   

            ]);

        return redirect('/addt_quests');
    }


///////////////////////         CRUD for Identification Questions and Quiz ////////////////////////////


    public function addi_quest(){

        $quizzes = DB::table('users')
                ->join('addidentifies', 'addidentifies.user_id', '=' , 'users.id')
                ->where('addidentifies.user_id', Auth::user()->id)
                ->paginate(5);
                
        return view('pages.addi_quest',compact('quizzes'));
    }

    public function addquiz_i(Request $request){


        $this->validate($request,[
                'title_identify' => 'required',
                'items_identify' => 'required',
                
                
            ]);
       
    
        $quiz = new Addidentify;

        $quiz->user_id = Auth::user()->id;
        $quiz->title_identify = $request['title_identify'];
        $quiz->items_identify = $request['items_identify'];
        $quiz->sec_id = $request['sec_id'];
        $quiz->save();

        $success = array('ok'=>'Quiz Added Successfully!!');
        return redirect()->back()->with($success);  


    }


    public function delete_i(Request $request, $id){


         $quiz = Addidentify::where('id', $id)->delete();

         $success = array('ok'=>'Quiz Deleted Successfully!!');
        return redirect()->back()->with($success);
    }


     public function edit_i($id){

        $quiz= Addidentify::findOrFail($id);

            return view('pages.edit_i',compact('quiz'));
     }


     public function update_i(Request $request, $id){

        $this-> validate($request, [
                'title_identify' => 'required',
                'items_identify'=> 'required',
                'sec_id' => 'required',
                

            ]);

        $quiz = Addidentify::where('id', $id)->update([
                'title_identify' => $request['title_identify'],
                'items_identify' => $request['items_identify'],
                'sec_id' => $request['sec_id'],

            ]);
         
        return redirect('/addi_quest');

     }


     ////////// REPORTS////////////////////


     

     public function postreports(){
        $post= DB::table('students')
            ->pluck('fname');
        
        $posts= $post->first();

            return view('pages.reports', compact('posts'));
     }











     /////////////////// CRUD for students ///////////////

     public function charles(){

          // $student = DB::table('users')
          //       ->join('sections', 'sections.id', '=' , 'users.sec_id')
          //       ->paginate(5);
          // $student = DB::table('users')
          //       ->join('sections', 'sections.id', '=' , 'users.sec_id')
          //       ->where('users.fname', '=', $search )
          //       ->paginate(5);


       
        $search = \Request::get('search');
       $student =DB::table('users')->where('type', '=', 0)->get();
       $student = User::where('fname', 'like', '%'.$search.'%')->where('type' , '=', 2)->orderBy('id')->paginate(5);

        return view('pages.charles' ,['student' => $student]);
     }


      public function addstudent(Request $request){

            $this->validate($request, [
                'fname' => 'required',
                'lname' => 'required',
                'sec_id' => 'required',
                'username'=> 'required|min:2|max:12',
                'password'=> 'required|min:6|max:12',
                
                ]);

           
           
         
            $user = new User;
            $user->type = $request['type'];
            $user->fname = ucfirst ($request['fname']);
            $user->lname = ucfirst($request['lname']);
            $user->sec_id = $request['sec_id'];  
            $user->username = ucfirst($request['username']);
            $user->password = bcrypt($request['password']);
            $user->save();
            
        $success = array('ok'=>'Student Added Successfully!!');
        return redirect()->back()->with($success);  
    }


    public function delete_stud($id){

        $student = User::where('id' , $id)->delete();

        $success = array('ok'=>'Quiz Deleted Successfully!!');
        return redirect()->back()->with($success);
    }


    public function edit_stud($id){

        $student= User::findOrFail($id);
            return view('pages.editstudent',compact('student'));
    }

    public function update_stud(Request $request, $id){

         $this->validate($request, [
                'fname' => 'required',
                'lname' => 'required',
                'sec_id' => 'required',
                'username'=> 'required|min:2|max:12',
                'password'=> 'required|min:6|max:12',
                
                ]);


          $student = User::where('id', $id)->update([
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'sec_id' => $request['sec_id'],
                'username' => $request['username'],
                'password' => $request['password'],
            ]);
         
        return redirect('/charles');
    }


    public function augustine(Request $request){
        $augustine = DB::table('users')
            ->join('sections','sections.id' , '=' , 'users.sec_id')
            ->where('sections.id', '=', 2)
            ->get();
        return view('pages.augustine', compact('augustine'));
    }

    public function printpreview(Request $request){
        $student= DB::table('users')
                ->join('sections', 'users.sec_id', '=' , 'sections.id')
                ->select('users.*','sections.section')
                ->get();

    return view('pages.printpreview', compact('student'));
    
    }


    ///////////////////////// UPlOAD files ////////////////////////////

    
    public function uploadfile(){
        return view('pages.sharefiles');
    }

    public function insertfile(Request $request){
        $filetitle = Input::get('file_title');
        $file = Input::file('filenam');

        // echo $filetitle;
        // echo $file;

        $rules = array(
            'file_title' => 'required' , 
            'filenam' => 'required|max:1000|mimes:doc,docx,jpeg,png,jpg,xlsx'  
            );

        $validator=Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            //redirect our users back with error messages

            $messages =$validator->messages();

            //send back to page with the input data and error
            return Redirect::to('uploadfile')->withInput()->withErrors($validator);

        }else if($validator->passes()){
            // echo "success validator";

            // checking file is valid
            if (Input::file('filenam')->isValid()) {
                
            // getting image extension
                $extension = Input::file('filenam')->getClientOriginalExtension(); 

            // renaming

            $filename = rand(11111,99999). '.' .$extension;

            $destinationPath = 'up_file';

            // destination public/upfile folder

            //uploading file to given path

            $file->move($destinationPath, $filename);
            
            
            //data INsert 
            $data =array(
                'file_title' =>$filetitle,
                'file_name' => $filename
                );


            FileTable::insert($data);

           $success = array('ok'=>'File Successfully Uploaded!!');

            return Redirect::to('uploadfile')->with($success);

            
            }else{
                
                return Redirect::to('uploadfile');

                 $success = array('error'=>'Upload Failed!!');

                  return Redirect::to('uploadfile')->with($success);
            }
        }


    }



    //////////////////////// DOWNLOAD FILES ///////////////////////////////////



    public function download(){

        $download = DB::table('filetables')->paginate(10);
    return view('pages.downloadfiles',compact('download'));
    
    }


    public function deldownload($id){

        $student = FileTable::where('id' , $id)->delete();

        $success = array('ok'=>'File Deleted Successfully!!');
        return redirect()->back()->with($success);
    }

    //////////////////////// REGISTERED CHARLES ///////////////////////////////


    public function studcharles(){
        $charles = DB::table('users')
                ->join('sections', 'sections.id' , '=', 'users.sec_id')
                ->get();

        return view('pages.studcharles', compact('charles'));
    }


    //////////////////// REGISTERED EDWARD ///////////////////////////////////


    public function edward(){

         $edward = DB::table('users')
                ->join('sections', 'sections.id' , '=', 'users.sec_id')
                ->where('sections.id' , '=', 3)
                ->get();

        return view('pages.edward', compact('edward'));
    }


    /////////////////////// REGISTERED DOMINIC ////////////////////////

    public function dominic(){

         $dominic = DB::table('users')
                ->join('sections', 'sections.id' , '=', 'users.sec_id')
                ->where('sections.id' , '=', 4)
                ->get();

        return view('pages.dominic', compact('dominic'));
    }


    /////////////////////// VIEW MULTIPLE //////////////////////////////////

    public  function viewmultiple($id){
    
    

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


       return view('pages.viewmultiple', compact('question','quiz','controls_count','item'));

       
    }

    /////////////////////// VIEW TRUE OR FALSE //////////////////////////////////


    public function viewtrue($id){
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

       return view('pages.viewtrue', compact('question','quiz','controls_count','item'));
    }

    /////////////////////// VIEW Identification //////////////////////////////////


    public function viewidentify($id){

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

       return view('pages.viewidentify', compact('question', 'quiz','counts','item'));
    }





    ///////////////////////  LESSON VIEWS //////////////////////////


    public function grade1st_a(){
        return view('pages.grade1st_a');
    }

     public function grade1st_b(){
        return view('pages.grade1st_b');
    }

     public function grade1st_c(){
        return view('pages.grade1st_c');
    }

     public function grade1st_d(){
        return view('pages.grade1st_d');
    }

     public function grade1st_e(){
        return view('pages.grade1st_e');
    }

     public function grade1st_f(){
        return view('pages.grade1st_f');
    }

    public function grade2nd_a(){
        return view('pages.grade2nd_a');
    }

    public function grade2nd_b(){
        return view('pages.grade2nd_b');
    }

    public function grade2nd_c(){
        return view('pages.grade2nd_c');
    }


    public function grade3rd_a(){
        return view('pages.grade3rd_a');
    }


    public function grade3rd_b(){
        return view('pages.grade3rd_b');
    }


    public function grade3rd_c(){
        return view('pages.grade3rd_c');
    }

     public function grade4th_a(){
        return view('pages.grade4th_a');
    }

     public function grade4th_b(){
        return view('pages.grade4th_b');
    }

     public function grade4th_c(){
        return view('pages.grade4th_c');
    }



     public function grade4th_d(){
        return view('pages.grade4th_d');
    }
///////////////// SUB PARTS OF LESSON //////////////



    public function balance(){
        return view('pages.fg_a');
    }

    public function act1first(){
        return view('pages.act1first');
    }


}




