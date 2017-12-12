import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Act8Page } from '../act8/act8';
import { Act8aPage } from '../act8a/act8a';
import { Act8bPage } from '../act8b/act8b';
import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { QuizPage } from '../quiz/quiz';
/*
  Generated class for the Lesson22 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson22',
  templateUrl: 'lesson22.html'
})
export class Lesson22Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson22Page');
  }


  nextPage(){
  	this.navCtrl.push(Act8Page);
  }

  nextPage1(){
  	this.navCtrl.push(Act8aPage);
  }

  nextPage2(){
  	this.navCtrl.push(Act8bPage);
  }
  simulation(){
    this.navCtrl.push(SimulationPage);
  }

  video(){
    this.navCtrl.push(Video1Page);
  }

  quiz(){
    this.navCtrl.push(QuizPage);
  }
}
