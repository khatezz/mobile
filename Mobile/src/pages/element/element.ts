import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Element page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-element',
  templateUrl: 'element.html'
})
export class ElementPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad ElementPage');
  }

  videos: any[] = [

 			{
 				title: 'Periodic Table of Elements',
 				video: 'https://www.youtube.com/embed/9yZEykofi24',
 			},

 			{
 				title: 'Elements',
 				video: 'https://www.youtube.com/embed/KHa9KOyD438',
 			},

 			
 	]

}
