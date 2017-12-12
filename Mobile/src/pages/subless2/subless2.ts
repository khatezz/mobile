import { Component } from '@angular/core';
import { NavController, NavParams, ActionSheetController } from 'ionic-angular';
import { Less21Page } from '../less21/less21';
import { Less22Page } from '../less22/less22';
import { Less23Page } from '../less23/less23';
import { Less24Page } from '../less24/less24';
import { Less25Page } from '../less25/less25';
import { GuessPage } from '../guess/guess';
import { MotionanimatePage } from '../motionanimate/motionanimate';
import { ImagesmotionPage } from '../imagesmotion/imagesmotion';

import { Lesson1Page } from '../lesson1/lesson1';
import { BalancePage } from '../balance/balance';


/*
  Generated class for the Subless2 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-subless2',
  templateUrl: 'subless2.html'
})
export class Subless2Page {

  constructor(public navCtrl: NavController, public navParams: NavParams, public actionSheetCtrl: ActionSheetController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Subless2Page');
  }

  pict(){
    this.navCtrl.push(GuessPage);
  }

  click(){
  	this.navCtrl.push(Less21Page);
  }

   click1(){
  	this.navCtrl.push(Less22Page);
  }

   click2(){
  	this.navCtrl.push(Less23Page);
  }

   click3(){
  	this.navCtrl.push(Less24Page);
  }
   click4(){
  	this.navCtrl.push(Less25Page);
  }

  presentActionSheet() {
   let actionSheet = this.actionSheetCtrl.create({
     title: 'Go To',
     buttons: [
       {
         text: 'Lessons',
         handler: () => {
           this.navCtrl.push(Lesson1Page);
         }
       },
       {
         text: 'Grading Lessons',
         handler: () => {
         this.navCtrl.push(BalancePage);
          
         }
       },

       {
         text: 'Cancel',
         role: 'cancel',
         handler: () => {
           console.log('cancel');
         }
       }
     ]
   });

   actionSheet.present();
 }


}
