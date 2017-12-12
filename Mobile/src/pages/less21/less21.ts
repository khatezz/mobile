import { Component } from '@angular/core';
import { NavController, NavParams, ActionSheetController} from 'ionic-angular';
import { OvideosPage } from '../ovideos/ovideos';
import { ImagesmotionPage } from '../imagesmotion/imagesmotion';


/*
  Generated class for the Less21 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-less21',
  templateUrl: 'less21.html'
})
export class Less21Page {

    showuser: boolean;
   showuser1: boolean;
   showuser2: boolean;

  constructor(public navCtrl: NavController, public navParams: NavParams, public actionSheetCtrl: ActionSheetController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Less21Page');
  }

 prof(){
    if(this.showuser == true){
      this.showuser = false;
    }else{
      this.showuser = true;
    }
  }


  prof1(){
    if(this.showuser1 == true){
      this.showuser1 = false;
    }else{
      this.showuser1 = true;
    }
  }


 prof2(){
    if(this.showuser2 == true){
      this.showuser2 = false;
    }else{
      this.showuser2 = true;
    }
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
         this.navCtrl.push(OvideosPage);
          
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
