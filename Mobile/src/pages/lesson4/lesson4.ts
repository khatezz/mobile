import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Act3Page } from '../act3/act3';
import { Act3aPage } from '../act3a/act3a';
import { Act3bPage } from '../act3b/act3b';
import { Act3cPage } from '../act3c/act3c';
import { Act3dPage } from '../act3d/act3d';
import { Act3ePage } from '../act3e/act3e';
import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { QuizPage } from '../quiz/quiz';

/*
  Generated class for the Lesson4 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson4',
  templateUrl: 'lesson4.html'
})
export class Lesson4Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson4Page');
  }

  nextPage(){

  	this.navCtrl.push(Act3Page);
  }


  nextPage1(){

  	this.navCtrl.push(Act3aPage);
  }

  nextPage2(){

  	this.navCtrl.push(Act3bPage);
  }


  nextPage3(){

  	this.navCtrl.push(Act3cPage);
  }

   nextPage4(){

  	this.navCtrl.push(Act3dPage);
  }


  nextPage5(){

  	this.navCtrl.push(Act3ePage);
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
