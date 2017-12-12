import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Drills1Page } from '../drills1/drills1';


/*
  Generated class for the Timeq page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-timeq',
  templateUrl: 'timeq.html'
})
export class TimeqPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad TimeqPage');
  }

  
  back(){
  	this.navCtrl.setRoot(Drills1Page);
  }

}
