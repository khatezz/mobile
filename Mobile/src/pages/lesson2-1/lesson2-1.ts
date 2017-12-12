import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Act7Page } from '../act7/act7';
import { Act7aPage } from '../act7a/act7a';
import { Act7bPage } from '../act7b/act7b';
import { Act7cPage } from '../act7c/act7c';
import { Act7dPage } from '../act7d/act7d';
import { FaultsPage } from '../faults/faults';
import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { QuizPage } from '../quiz/quiz';

/*
  Generated class for the Lesson21 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson2-1',
  templateUrl: 'lesson2-1.html'
})
export class Lesson21Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson21Page');
  }


  nextPage(){

  	this.navCtrl.push(Act7Page);
  }

  nextPage1(){

  	this.navCtrl.push(Act7aPage);
  }

  nextPage2(){

  	this.navCtrl.push(Act7bPage);
  }


   nextPage3(){

  	this.navCtrl.push(Act7cPage);
  }

  nextPage4(){

  	this.navCtrl.push(Act7dPage);
  }

  page1(){
    this.navCtrl.push(FaultsPage);
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
