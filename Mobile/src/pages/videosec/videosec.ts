import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { FaultsPage } from '../faults/faults';
import { TyphoonPage } from '../typhoon/typhoon';
import { SolarPage } from '../solar/solar';

/*
  Generated class for the Videosec page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-videosec',
  templateUrl: 'videosec.html'
})
export class VideosecPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad VideosecPage');
  }

   videos6(){
    this.navCtrl.push(FaultsPage);
  } 
   videos7(){
    this.navCtrl.push(TyphoonPage);
  } 
   videos8(){
    this.navCtrl.push(SolarPage);
  } 

}
