import { Component } from '@angular/core';
import { NavController, NavParams, ActionSheetController  } from 'ionic-angular';
import { MotionanimatePage } from '../motionanimate/motionanimate';
import { ImagesmotionPage } from '../imagesmotion/imagesmotion';

/*
  Generated class for the Illus1 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-illus1',
  templateUrl: 'illus1.html'
})
export class Illus1Page {

  constructor(public navCtrl: NavController, public navParams: NavParams, public actionSheetCtrl: ActionSheetController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Illus1Page');
  }


   presentActionSheet() {
   let actionSheet = this.actionSheetCtrl.create({
     title: 'View',
     buttons: [
       {
         text: 'Images',
         handler: () => {
           this.navCtrl.push(ImagesmotionPage);
         }
       },
       {
         text: 'Animation',
         handler: () => {
         this.navCtrl.push(MotionanimatePage);
          
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
