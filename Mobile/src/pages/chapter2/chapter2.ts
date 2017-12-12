import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Lesson21Page } from '../lesson2-1/lesson2-1';
import { Lesson22Page } from '../lesson22/lesson22';
import { Lesson23Page } from '../lesson23/lesson23';
/*
  Generated class for the Chapter2 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-chapter2',
  templateUrl: 'chapter2.html'
})
export class Chapter2Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Chapter2Page');
  }

   lesson1(){

    this.navCtrl.push(Lesson21Page);
  }

  lesson2(){

    this.navCtrl.push(Lesson22Page);
  }

   lesson3(){

    this.navCtrl.push(Lesson23Page);
  }

}
