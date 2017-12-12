import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Act9Page } from '../act9/act9';
import { Act9aPage } from '../act9a/act9a';
import { Act9bPage } from '../act9b/act9b';
import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { QuizPage } from '../quiz/quiz';
/*
  Generated class for the Lesson23 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson23',
  templateUrl: 'lesson23.html'
})
export class Lesson23Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson23Page');
  }

  	nextPage(){
  		this.navCtrl.push(Act9Page);
  	}

  	nextPage1(){
  		this.navCtrl.push(Act9aPage);
  	}

  	nextPage2(){
  		this.navCtrl.push(Act9bPage);
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
