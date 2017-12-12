import { Component, OnInit } from '@angular/core';
import { NavController, NavParams, AlertController } from 'ionic-angular';
import { StudentService } from '../../services/student.service';
import { Multiple } from '../multiples.interface';
import { Response } from '@angular/http';
import { QuizPage } from '../quiz/quiz';
import { NgForm } from '@angular/forms';


/*
  Generated class for the Multiple page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-multiple',
  templateUrl: 'multiple.html'
})
export class MultiplePage {
	 quizzes=[];
 
  quest: string;
  a: string;
  b: string;
  c: string;
	d: string;
	quiz_id: number;
	id:number;
  min: number;
  sec: number;
  timeout: number;
  ans = '';
  

  constructor(public navCtrl: NavController, public navParams: NavParams, public studentService: StudentService, public alertCtrl: AlertController) {

     this.min = 29;
    this.sec =59;
     this.timeout = setInterval(() => this.tick(), 1000);
  }


   

  


   private tick(): void {

      if(--this.sec < 0){
        this.sec =59;

        if(--this.min < 0){
           clearInterval(this.timeout);
           let confirm = this.alertCtrl.create({
            title: 'Message',
            subTitle: 'Times Up',
            buttons: [
              {
              text: 'OK',
              handler: () => {
                this.navCtrl.setRoot( QuizPage );
                }
              }

              
            ]
          });

          confirm.present();
        }

       
      }
    }




  answer(ans){
    
  }
  

    


     ngOnInit(){
    // this.studentService.getmultipleQuest(this.quizzes.id)
    //   .subscribe(
    //     quizzes => this.quizzes = quizzes,
    //     (error: Response) => console.log(error)
    //   );

  }

}
