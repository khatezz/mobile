import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Solar page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-solar',
  templateUrl: 'solar.html'
})
export class SolarPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad SolarPage');
  }

  videos: any[] = [

 			{
 				title: 'Comets, Asteroids, Meteorites',
 				video: 'https://www.youtube.com/embed/dvd47rMYia0',
 			},

 			{
 				title: 'Other members of Solar System',
 				video: 'https://www.youtube.com/embed/Q4R2fPct-jk',
 			},

 			{
 				title: 'Solar System',
 				video: 'https://www.youtube.com/embed/iJwZ3uBzQV0',
 			}
 	]
}
