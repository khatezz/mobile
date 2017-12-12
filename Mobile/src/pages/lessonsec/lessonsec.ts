import { Component } from '@angular/core';
import { NavController, NavParams, ActionSheetController } from 'ionic-angular';
import { Lessonsec1Page } from '../lessonsec1/lessonsec1';
import { Lessonsec2Page } from '../lessonsec2/lessonsec2';
import { Lessonsec3Page } from '../lessonsec3/lessonsec3';
import { VideosecPage } from '../videosec/videosec';
import { SimulationPage } from '../simulation/simulation';
import { Drills1Page } from '../drills1/drills1';


/*
  Generated class for the Lessonsec page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lessonsec',
  templateUrl: 'lessonsec.html'
})
export class LessonsecPage {

  constructor(public navCtrl: NavController, public navParams: NavParams, public actionSheetCtrl: ActionSheetController) {}

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
           this.navCtrl.push(VideosecPage);
         }
       },
       
     ]
   });

   actionSheet.present();
 }

  ionViewDidLoad() {
    console.log('ionViewDidLoad LessonsecPage');
  }

  click1(){
  	this.navCtrl.push(Lessonsec1Page);
  }

   click2(){
  	this.navCtrl.push(Lessonsec2Page);
  }

   click3(){
  	this.navCtrl.push(Lessonsec3Page);
  }

}
