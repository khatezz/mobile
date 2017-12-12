import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Matter page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-matter',
  templateUrl: 'matter.html'
})
export class MatterPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad MatterPage');
  }

  videos: any[] = [

 			{
 				title: 'Introduction to Matter',
 				video: 'https://www.youtube.com/embed/wclY8F-UoTE',
 			},

 			{
 				title: 'What is Matter',
 				video: 'https://www.youtube.com/embed/68QDZAl29oE',
 			},

 			{
 				title: 'States of Matter',
 				video: 'https://www.youtube.com/embed/s-KvoVzukHo',
 			}
 	]

}
