import { Component } from '@angular/core';
import { NavController, NavParams, ActionSheetController } from 'ionic-angular';
import { Lessonthird1Page } from '../lessonthird1/lessonthird1';
import { Lessonthird2Page } from '../lessonthird2/lessonthird2';
import { Lessonthird3Page } from '../lessonthird3/lessonthird3';
import { LessonthirdvideoPage } from '../lessonthirdvideo/lessonthirdvideo';
import { SimulationPage } from '../simulation/simulation';
import { Drills1Page } from '../drills1/drills1';

/*
  Generated class for the Lessonthird page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lessonthird',
  templateUrl: 'lessonthird.html'
})
export class LessonthirdPage {

  constructor(public navCtrl: NavController, public navParams: NavParams ,public actionSheetCtrl: ActionSheetController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad LessonthirdPage');
  }

  	click1(){
  	this.navCtrl.push(Lessonthird1Page);
  }

   click2(){
  	this.navCtrl.push(Lessonthird2Page);
  }

   click3(){
  	this.navCtrl.push(Lessonthird3Page);
  }


   presentActionSheet() {
   let actionSheet = this.actionSheetCtrl.create({
     title: 'Go To',
     buttons: [
       {
         text: 'Activities and Drills',
         handler: () => {
           this.navCtrl.push(Drills1Page);
         }
       },

        {
         text: 'Simulation',
         handler: () => {
           this.navCtrl.push(SimulationPage);
         }
       },

       {
         text: 'Videos',
         handler: () => {
           this.navCtrl.push(LessonthirdvideoPage);
         }
       },
       
     ]
   });

   actionSheet.present();
 }



}
