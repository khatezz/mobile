import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Lesson31Page } from '../lesson31/lesson31';
import { Lesson32Page } from '../lesson32/lesson32';
import { Lesson33Page } from '../lesson33/lesson33';


/*
  Generated class for the Chapter3 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-chapter3',
  templateUrl: 'chapter3.html'
})
export class Chapter3Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Chapter3Page');
  }

  lesson1(){

  this.navCtrl.push(Lesson31Page);
 }


 lesson2(){

  this.navCtrl.push(Lesson32Page);
 }



lesson3(){

  this.navCtrl.push(Lesson33Page);
 }

}
