import { Component } from '@angular/core';
import { NavController, NavParams, AlertController } from 'ionic-angular';
import { UserService } from '../../services/user.service'; 
import { Questg2Page } from '../questg2/questg2';
import { Quizm1Page } from '../quizm1/quizm1';
/*
  Generated class for the Questg1 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-questg1',
  templateUrl: 'questg1.html'
})
export class Questg1Page {

	
  		min: number;
		  sec: number;
		  timeout: number;

  constructor(public navCtrl: NavController, public navParams: NavParams, public alertCtrl: AlertController, public userService: UserService) {
  	 this.min = 1;
     this.sec =59;
     this.timeout = setInterval(() => this.tick(), 1000);
  }


  ionViewDidLoad() {
    console.log('ionViewDidLoad Questg1Page');
  }

  ans = {
    answer:null,
    answer2:null,
    answer3:null,
    answer4:null,
    answer5:null,
    answer6:null,
    answer7:null,
    answer8:null,
    answer9:null,
    answer10:null,
    answer11:null,
    answer12:null,
    answer13:null,
    answer14:null,
    answer15:null,
    answer16:null,
    answer17:null,
    answer18:null,
    answer19:null,
    answer20:null,
    answer21:null,
    answer22:null,
    answer23:null,
    answer24:null,
    answer25:null,
   
  };

   answer(ans){
      this.userService.postQuestg1(ans);
      this.navCtrl.push(Questg2Page);
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
                this.navCtrl.push( Quizm1Page );
                }
              }

              
            ]
          });

          confirm.present();
        }

       
      }
    }

}
