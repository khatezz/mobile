import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Sound page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-sound',
  templateUrl: 'sound.html'
})
export class SoundPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad SoundPage');
  }

  videos: any[] = [

 			  {
        title: 'Light',
        video: 'https://www.youtube.com/embed/i2MFGYuYm8E',
      },

      {
        title: 'What is Light',
        video: 'https://www.youtube.com/embed/VtE0d_Ycwp0',
      },
 	]

}
