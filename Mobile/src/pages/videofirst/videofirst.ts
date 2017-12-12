import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Vid1Page } from '../vid1/vid1';
import { SoundPage } from '../sound/sound';
import { LightPage } from '../light/light';
import { HeatPage } from '../heat/heat';
import { ElectricityPage } from '../electricity/electricity';

/*
  Generated class for the Videofirst page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-videofirst',
  templateUrl: 'videofirst.html'
})
export class VideofirstPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad VideofirstPage');
  }

   videos1(){
    this.navCtrl.push(Vid1Page);
  } 
   videos2(){
    this.navCtrl.push(SoundPage);
  } 
   videos3(){
    this.navCtrl.push(LightPage);
  } 
   videos4(){
    this.navCtrl.push(HeatPage);
  } 
   videos5(){
    this.navCtrl.push(ElectricityPage);
  } 

}
