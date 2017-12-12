import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Lesson1Page } from '../lesson1/lesson1';

/*
  Generated class for the Intro page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-intro',
  templateUrl: 'intro.html'
})
export class IntroPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad IntroPage');
  }

  next(){
  	this.navCtrl.push(Lesson1Page);
  }

}
