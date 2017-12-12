import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Drills1Page } from '../drills1/drills1';

/*
  Generated class for the Guess5 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-guess5',
  templateUrl: 'guess5.html'
})
export class Guess5Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Guess5Page');
  }

  back(){
  	this.navCtrl.setRoot(Drills1Page);
  }

}
