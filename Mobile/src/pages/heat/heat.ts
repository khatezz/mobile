import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Heat page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-heat',
  templateUrl: 'heat.html'
})
export class HeatPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad HeatPage');
  }

  videos: any[] = [

 			{
 				title: 'Heat',
 				video: 'https://www.youtube.com/embed/EJeAuQ7pkpc',
 			},

 			{
 				title: 'What is Heat',
 				video: 'https://www.youtube.com/embed/D2monVkCkX4',
 			},

 		
 	]

}
