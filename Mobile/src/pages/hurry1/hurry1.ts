import { Component } from '@angular/core';
import { NavController, NavParams, AlertController } from 'ionic-angular';
import { Drills1Page } from '../drills1/drills1';
import { TimeqPage } from '../timeq/timeq';

/*
  Generated class for the Hurry1 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-hurry1',
  templateUrl: 'hurry1.html'
})
export class Hurry1Page {

 min: number;
  sec: number;
  timeout: number;

  answers1:string;
  answers2:string;
  answers3:string;
  answers4:string;
  answers5:string;
  average:number;

  anss = ["a","b","c","a","a"];
  q =["answers1","answer2s","answers3","answers4","answers5"];
  key:number;
  

  constructor(public navCtrl: NavController, public navParams: NavParams, public alertCtrl: AlertController) {
  	 this.min = 0;
    this.sec =59;
     this.timeout = setInterval(() => this.tick(), 1000);
     this.answers1='';
     this.answers2='';
     this.answers3='';
     this.answers4='';
     this.answers5='';
     this.key=1;
  }

  ans(q){
    this.navCtrl.push(TimeqPage);
   

  }



  

  ionViewDidLoad() {
    console.log('ionViewDidLoad Hurry1Page');
  }


   private tick(): void {

      if(--this.sec < 0){
        this.sec =59;

        if(--this.min < 0){
           setTimeout(this.timeout);
           let confirm = this.alertCtrl.create({
            title: 'Message',
            subTitle: 'Times Up',
            buttons: [
              {
              text: 'OK',
              handler: () => {
                this.navCtrl.push( Drills1Page );
                }
              }

              
            ]
          });

          confirm.present();
        }

       
      }
    }

}