import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Eco page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-eco',
  templateUrl: 'eco.html'
})
export class EcoPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad EcoPage');
  }

  videos: any[] = [

 			{
 				title: 'Ecosystem',
 				video: 'https://www.youtube.com/embed/9yZEykofi24',
 			},

 			{
 				title: 'Introduction to Ecosystem',
 				video: 'https://www.youtube.com/embed/KHa9KOyD438',
 			},

 			
 	]

}
