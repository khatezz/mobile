import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Heredity page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-heredity',
  templateUrl: 'heredity.html'
})
export class HeredityPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad HeredityPage');
  }

  videos: any[] = [

 			{
 				title: 'Heredity',
 				video: 'https://www.youtube.com/embed/CBezq1fFUEA',
 			},

 			{
 				title: 'Introduction to Heredity',
 				video: 'https://www.youtube.com/embed/eEUvRrhmcxM',
 			},

 			
 	]

}
