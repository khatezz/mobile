import { Component } from '@angular/core';
import { NavController, NavParams , AlertController, ActionSheetController} from 'ionic-angular';
import { Illus1Page } from '../illus1/illus1';
import { TypesfPage } from '../typesf/typesf';
import { MotionanimatePage } from '../motionanimate/motionanimate';
import { ImagesmotionPage } from '../imagesmotion/imagesmotion';

/*
  Generated class for the Subpart page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-subpart',
  templateUrl: 'subpart.html'
})
export class SubpartPage {

  constructor(public navCtrl: NavController, public navParams: NavParams, public alertCtrl: AlertController,  public actionSheetCtrl: ActionSheetController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad SubpartPage');
  }

  click() {
    let alert = this.alertCtrl.create({
      title: 'View Illustration',
      buttons: [
      		{
      			text: 'Ok',
      			handler: ()=>{
      				this.navCtrl.push(Illus1Page);
      			}
      		}
      	]
    });
    alert.present();
  }

  types(){
  	this.navCtrl.push(TypesfPage);
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
