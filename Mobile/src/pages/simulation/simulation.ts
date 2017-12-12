import { Component } from '@angular/core';
import { NavController, NavParams, LoadingController } from 'ionic-angular';
import { TabsPage } from '../tabs/tabs';
import { AtomsPage } from '../atoms/atoms';
import { DigestiveSystemPage } from '../digestive-system/digestive-system';

/*
  Generated class for the Simulation page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-simulation',
  templateUrl: 'simulation.html'
})
export class SimulationPage {

  constructor(public navCtrl: NavController, public navParams: NavParams, public loadingCtrl: LoadingController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad SimulationPage');
  }

  

  nextPage(){
       let loader = this.loadingCtrl.create({
        content: "Please wait....",
        duration: 3000
      });
      loader.present();
      this.navCtrl.push( AtomsPage );
     
  }


   nextPage1(){
       let loader = this.loadingCtrl.create({
        content: "Please wait....",
        duration: 3000
      });
      loader.present();
      this.navCtrl.push( DigestiveSystemPage );
     
  }


}
