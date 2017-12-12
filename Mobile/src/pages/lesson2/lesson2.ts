import { Component } from '@angular/core';
import { NavController, NavParams, AlertController, ActionSheetController } from 'ionic-angular';
import { Act2Page } from '../act2/act2';
import { Act2aPage } from '../act2a/act2a';
import { Act2bPage } from '../act2b/act2b';
import { Illus1Page } from '../illus1/illus1';
import { SubpartPage } from '../subpart/subpart';
import { Lesson1Page } from '../lesson1/lesson1';
import { BalancePage } from '../balance/balance';
import { BalPage } from '../bal/bal';
import { LmotionPage } from '../lmotion/lmotion';
import { InertiaPage } from '../inertia/inertia';
import { InteractionPage } from '../interaction/interaction';
import { AccelPage } from '../accel/accel';



/*
  Generated class for the Lesson2 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson2',
  templateUrl: 'lesson2.html'
})

export class Lesson2Page {
    
    pages: Array<{title: string, component: any, icon: string}>;
   ans='';
    
  constructor(public navCtrl: NavController, public navParams: NavParams, public alertCtrl: AlertController, public actionSheetCtrl: ActionSheetController) {
    
     this.pages = [

      {title: 'What is Force and Motion', component: SubpartPage, icon: 'book'},
      
  ];

  }

  openPage(page) {
    // Reset the content nav to have just this page
    // we wouldn't want the back button to show in this scenario
    this.navCtrl.push(page.component);
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
 

  click() {
    
    this.navCtrl.push(BalPage);
            
  }


  click1() {
   
    this.navCtrl.push(LmotionPage);
            
  }



click2() {
    
    this.navCtrl.push(InertiaPage);
           
  }




  click3() {
   
    this.navCtrl.push(InteractionPage);
           
  }





  click4() {
    
    this.navCtrl.push(AccelPage);
          
  }
 

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson2Page');
  }


  nextPage(){
  	this.navCtrl.push(Act2Page);
  }


  nextPage1(){
  	this.navCtrl.push(Act2aPage);
  }

  nextPage2(){
  	this.navCtrl.push(Act2bPage);
  }
  	
 

}
