import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Hurry1Page } from '../hurry1/hurry1';


/*
  Generated class for the Subless3 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-subless3',
  templateUrl: 'subless3.html'
})
export class Subless3Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Subless3Page');
  }

   hurry(){
    this.navCtrl.push(Hurry1Page);
  }

}
