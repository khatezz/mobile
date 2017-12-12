import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Vid1 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-vid1',
  templateUrl: 'vid1.html'
})
export class Vid1Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Vid1Page');
  }



  videos: any[] = [

 			{
        title: 'Work, Power and Energy',
        video: 'https://www.youtube.com/embed/WSY4HzWZIlo',
      },

      {
        title: 'Introduction to Work',
        video: 'https://www.youtube.com/embed/WwMiB30vh4o',
      },

      {
        title: 'Energy',
        video: 'https://www.youtube.com/embed/ZM8ECpBuQYE',
      }
 	]
}
