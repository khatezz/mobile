import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Act13Page } from '../act13/act13';
import { Act13aPage } from '../act13a/act13a';
import { Act13bPage } from '../act13b/act13b';
import { Act13cPage } from '../act13c/act13c';
import { Act13dPage } from '../act13d/act13d';
import { EcosystemPage } from '../ecosystem/ecosystem';
import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { QuizPage } from '../quiz/quiz';

/*
  Generated class for the Lesson41 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson41',
  templateUrl: 'lesson41.html'
})
export class Lesson41Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson41Page');
  }


  nextPage(){

  	this.navCtrl.push(Act13Page);
  }


   nextPage1(){

  	this.navCtrl.push(Act13aPage);
  }

   nextPage2(){

  	this.navCtrl.push(Act13bPage);
  }

  nextPage3(){

  	this.navCtrl.push(Act13cPage);
  }

  nextPage4(){

  	this.navCtrl.push(Act13dPage);
  }

  page1(){
    this.navCtrl.push(EcosystemPage);
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
