import { Component, OnInit } from '@angular/core';
import { NavController, NavParams, AlertController } from 'ionic-angular';
import { StudentService } from '../../services/student.service';
import { Response } from '@angular/http';
import { QuizPage } from '../quiz/quiz';


/*
  Generated class for the Identify page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-identify',
  templateUrl: 'identify.html'
})
export class IdentifyPage {

	identifies = [];
	quest: string;
	answer: string;
   min: number;
  sec: number;
  timeout: number;

  constructor(public navCtrl: NavController, public navParams: NavParams, public studentService: StudentService, public alertCtrl: AlertController) {
     this.resetTimer();
    this.timeout = setInterval(() => this.tick(), 1000);
  }

     resetTimer(): void{
    this.min = 29;
    this.sec =59;

  }


   private tick(): void {

      if(--this.sec < 0){
        this.sec =59;

        if(--this.min < 0){
         clearInterval(this.timeout);
           let alert = this.alertCtrl.create({
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

          alert.present();

        }

       
      }
    }

  ionViewDidLoad() {
    console.log('ionViewDidLoad IdentifyPage');
  }


  ngOnInit(){
  	this.studentService.getidentifyQuest()
  		.subscribe(
            identifies => this.identifies = identifies,
            (error: Response) => console.log(error)
          );
  	}
  
}
