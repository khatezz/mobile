import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Act5Page } from '../act5/act5';
import { Act5aPage } from '../act5a/act5a';
import { Act5bPage } from '../act5b/act5b';
import { Act5cPage } from '../act5c/act5c';
import { Act5dPage } from '../act5d/act5d';
import { Act5ePage } from '../act5e/act5e';
import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { QuizPage } from '../quiz/quiz';

/*
  Generated class for the Lesson5 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson5',
  templateUrl: 'lesson5.html'
})
export class Lesson5Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson5Page');
  }


  nextPage(){
  	this.navCtrl.push(Act5Page);
  }


  nextPage1(){
  	this.navCtrl.push(Act5aPage);
  }


  nextPage2(){
  	this.navCtrl.push(Act5bPage);
  }

   nextPage3(){
  	this.navCtrl.push(Act5cPage);
  }

   nextPage4(){
  	this.navCtrl.push(Act5dPage);
  }

   nextPage5(){
  	this.navCtrl.push(Act5ePage);
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
