import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Light page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-light',
  templateUrl: 'light.html'
})
export class LightPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad LightPage');
  }

  videos: any[] = [

 		{
        title: 'Light',
        video: 'https://www.youtube.com/embed/xGKg3TSO4v8',
      },

      {
        title: 'What is Light',
        video: 'https://www.youtube.com/embed/W5teyd8srp8',
      },

 			
 	]

}
