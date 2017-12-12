import { Component } from '@angular/core';
import { NavController, NavParams, ToastController, ActionSheetController  } from 'ionic-angular';
import { MotionanimatePage } from '../motionanimate/motionanimate';
import { ImagesmotionPage } from '../imagesmotion/imagesmotion';

/*
  Generated class for the Lmotion page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lmotion',
  templateUrl: 'lmotion.html'
})
export class LmotionPage {

  constructor(public navCtrl: NavController, public navParams: NavParams, public toastCtrl: ToastController, public actionSheetCtrl: ActionSheetController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad LmotionPage');
  }

  presentToast() {
  const toast = this.toastCtrl.create({
    message: 'Force is equal to change in momentum (mV) per change in time. For a constant mass, force equals mass times acceleration. F=m a',
   	showCloseButton: true,
    position: 'long'
  });

 

  toast.present();
}


	presentToast1() {
  const toast = this.toastCtrl.create({
    message: 'For every action, there is an equal and opposite re-action',
   	showCloseButton: true,
    position: 'long'
  });

 

  toast.present();
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
