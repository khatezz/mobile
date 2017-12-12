import { Component } from '@angular/core';
import { NavController, NavParams, ActionSheetController } from 'ionic-angular';
import { Lessonfour1Page } from '../lessonfour1/lessonfour1';
import { Lessonfour2Page } from '../lessonfour2/lessonfour2';
import { Lessonfour3Page } from '../lessonfour3/lessonfour3';
import { Lessonfour4Page } from '../lessonfour4/lessonfour4';
import { LessonfourvideoPage } from '../lessonfourvideo/lessonfourvideo';
import { SimulationPage } from '../simulation/simulation';
import { Drills1Page } from '../drills1/drills1';

/*
  Generated class for the Lessonfour page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lessonfour',
  templateUrl: 'lessonfour.html'
})
export class LessonfourPage {

  constructor(public navCtrl: NavController, public navParams: NavParams, public actionSheetCtrl: ActionSheetController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad LessonfourPage');
  }


  click1(){
  	this.navCtrl.push(Lessonfour1Page);
  }

   click2(){
  	this.navCtrl.push(Lessonfour2Page);
  }

   click3(){
  	this.navCtrl.push(Lessonfour3Page);
  }

   click4(){
  	this.navCtrl.push(Lessonfour4Page);
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
           this.navCtrl.push(LessonfourvideoPage);
         }
       },
       
     ]
   });

   actionSheet.present();
 }


}
