import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Electricity page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-electricity',
  templateUrl: 'electricity.html'
})
export class ElectricityPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad ElectricityPage');
  }

  videos: any[] = [

 			{
 				title: 'Electricity',
 				video: 'https://www.youtube.com/embed/3-xKZKxXuu0',
 			},

 			{
 				title: 'Introduction to Electricity',
 				video: 'https://www.youtube.com/embed/GkNJvZINSEY',
 			},

 			{
 				title: 'What is Electricity',
 				video: 'https://www.youtube.com/embed/JPYt10zrclQ',
 			}
 	]

}
