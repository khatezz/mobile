import { Component, OnInit, Input, EventEmitter, Output } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { MultiplePage } from '../multiple/multiple';
import { StudentService } from '../../services/student.service';
import { Response } from '@angular/http';
import { Multiple } from '../multiples.interface';
import { TruePage } from '../true/true';
import { IdentifyPage } from '../identify/identify';

/*
  Generated class for the Quiz page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-quiz',
  templateUrl: 'quiz.html'
})
export class QuizPage implements OnInit{
  
   quizId = new EventEmitter<Multiple>();
    
    title:string;
    title_identify: string;
    title_true: string;
    id: number;
	 
   quizzes: Multiple[];


   identifies= [];

   choose= [];  
   name: number;
   quiz:any;
   
  


  constructor(public navCtrl: NavController, public navParams: NavParams,public studentService: StudentService) { 
    this.name;
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad QuizPage');
  }

  	 ngOnInit(){
           this.studentService.getMultiple()
          .subscribe(
            quizzes => this.quizzes = quizzes,
            (error: Response) => console.log(error)
          ); 

          this.studentService.getTrue()
          .subscribe(
             choose => this.choose = choose,
            (error: Response) => console.log(error)
          ); 


          this.studentService.getIdentify()
          .subscribe(
             identifies => this.identifies = identifies,
            (error: Response) => console.log(error)
          ); 


           

     }

    


  
     clickMultiple(){

          // this.studentService.getmultipleQuest(this.quizzes.id)
          // .subscribe(
          //     ()=>console.log('Get the id')
          //   );
        this.navCtrl.push( MultiplePage );
      
     }

     clickTrue(){
      this.navCtrl.push( TruePage );
     }

     clickIdentify(){
      this.navCtrl.push( IdentifyPage );
     }

}
