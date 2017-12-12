import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Grade1Page } from '../grade1/grade1';
import { Vid1Page } from '../vid1/vid1';
import { SoundPage } from '../sound/sound';
import { LightPage } from '../light/light';
import { HeatPage } from '../heat/heat';
import { ElectricityPage } from '../electricity/electricity';
import { FaultsPage } from '../faults/faults';
import { TyphoonPage } from '../typhoon/typhoon';
import { SolarPage } from '../solar/solar';
import { MatterPage } from '../matter/matter';
import { AtomPage } from '../atom/atom';
import { ElementPage } from '../element/element';
import { EcoPage } from '../eco/eco';
import { SystemPage } from '../system/system';
import { BioPage } from '../bio/bio';
import { HeredityPage } from '../heredity/heredity';

/*
  Generated class for the Video1 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-video1',
  templateUrl: 'video1.html'
})
export class Video1Page {
		
  
	constructor(public navCtrl: NavController, public navParams: NavParams) {

		
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
   videos6(){
    this.navCtrl.push(FaultsPage);
  } 
   videos7(){
    this.navCtrl.push(TyphoonPage);
  } 
   videos8(){
    this.navCtrl.push(SolarPage);
  } 
   videos9(){
    this.navCtrl.push(MatterPage);
  } 
   videos10(){
    this.navCtrl.push(AtomPage);
  } 
   videos11(){
    this.navCtrl.push(ElementPage);
  } 
   videos12(){
    this.navCtrl.push(SystemPage);
  } 
   videos13(){
    this.navCtrl.push(HeredityPage);
  } 
   videos14(){
    this.navCtrl.push(BioPage);
  } 
   videos15(){
    this.navCtrl.push(EcoPage);
  } 

  ionViewDidLoad() {
    console.log('ionViewDidLoad Video1Page');
  }

}
