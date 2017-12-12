import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Lesson2Page } from '../lesson2/lesson2';


/*
  Generated class for the Animate page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-animate',
  templateUrl: 'animate.html'
})
export class AnimatePage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad AnimatePage');
  }

  click(){
  	this.navCtrl.push(Lesson2Page);
  }

}
