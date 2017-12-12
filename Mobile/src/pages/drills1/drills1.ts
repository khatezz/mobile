import { Component } from '@angular/core';
import { NavController, NavParams, ActionSheetController } from 'ionic-angular';
import { GuessPage } from '../guess/guess';
import { Lesson1Page } from '../lesson1/lesson1';
import { Hurry1Page } from '../hurry1/hurry1';


/*
  Generated class for the Drills1 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-drills1',
  templateUrl: 'drills1.html'
})
export class Drills1Page {

  constructor(public navCtrl: NavController, public navParams: NavParams, public actionSheetCtrl: ActionSheetController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Drills1Page');
  }

  click(){
  	this.navCtrl.push(GuessPage);
  }

  click1(){
    this.navCtrl.push(Hurry1Page);
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
       
     ]
   });

   actionSheet.present();
 }

}
