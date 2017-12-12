import { Component } from '@angular/core';
import { NavController, NavParams, ToastController, ActionSheetController } from 'ionic-angular';
import { MotionanimatePage } from '../motionanimate/motionanimate';
import { ImagesmotionPage } from '../imagesmotion/imagesmotion';

/*
  Generated class for the Inertia page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-inertia',
  templateUrl: 'inertia.html'
})
export class InertiaPage {

  constructor(public navCtrl: NavController, public navParams: NavParams, public toastCtrl: ToastController, public actionSheetCtrl: ActionSheetController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad InertiaPage');
  }


   presentToast() {
  const toast = this.toastCtrl.create({
    message: 'An object at rest stays at rest and an object in motion stays in motion with the same speed and in the same direction unless acted upon by an unbalanced force',
   	showCloseButton: true,
    position: 'long'
  });

 

  toast.present();
}


	presentToast1() {
  const toast = this.toastCtrl.create({
    message: 'A body will remain at rest or move at constant velocity unless acted upon by an external net or unbalanced force',
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
