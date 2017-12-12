import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Typhoon page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-typhoon',
  templateUrl: 'typhoon.html'
})
export class TyphoonPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad TyphoonPage');
  }

  videos: any[] = [

 			{
 				title: 'Hurricane, Typhoon and Cyclones',
 				video: 'https://www.youtube.com/embed/SSx_gisp24w',
 			},

 			{
 				title: 'Tornadoes',
 				video: 'https://www.youtube.com/embed/lmWh9jV_1ac',
 			},

 			
 	]

}
