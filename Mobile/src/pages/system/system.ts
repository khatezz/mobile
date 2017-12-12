import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the System page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-system',
  templateUrl: 'system.html'
})
export class SystemPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad SystemPage');
  }

  videos: any[] = [

 			{
 				title: 'How the Digestive System Works',
 				video: 'https://www.youtube.com/embed/VwrsL-lCZYo',
 			},

 			{
 				title: 'Digestion in Human Beings',
 				video: 'https://www.youtube.com/embed/zr4onA2k_LY',
 			},

 			{
 				title: 'Digestive System of Human Body',
 				video: 'https://www.youtube.com/embed/bFczvJp0bpU',
 			}
 	]
  
}
