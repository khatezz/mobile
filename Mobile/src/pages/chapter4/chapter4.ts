import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Lesson41Page } from '../lesson41/lesson41';
import { Lesson42Page } from '../lesson42/lesson42';
import { Lesson43Page } from '../lesson43/lesson43';
import { Lesson44Page } from '../lesson44/lesson44';


/*
  Generated class for the Chapter4 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-chapter4',
  templateUrl: 'chapter4.html'
})
export class Chapter4Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Chapter4Page');
  }

  lesson1(){

    this.navCtrl.push(Lesson41Page);
  }


   lesson2(){

    this.navCtrl.push(Lesson42Page);
  }

   lesson3(){

    this.navCtrl.push(Lesson43Page);
  }


  lesson4(){

    this.navCtrl.push(Lesson44Page);
  }
 
}
