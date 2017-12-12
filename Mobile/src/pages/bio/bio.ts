import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Bio page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-bio',
  templateUrl: 'bio.html'
})
export class BioPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad BioPage');
  }

  videos: any[] = [

 			{
 				title: 'Introduction to Biodiversity',
 				video: 'https://www.youtube.com/embed/0-PE3ve3w2w',
 			},

 			{
 				title: 'Biodiversity',
 				video: 'https://www.youtube.com/embed/aqtdaIkxnQo',
 			},

 			{
 				title: 'Why is biodiversity so important? ',
 				video: 'https://www.youtube.com/embed/GK_vRtHJZu4',
 			}
 	]
}
