import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Act10Page } from '../act10/act10';
import { Act10aPage } from '../act10a/act10a';
import { Act10bPage } from '../act10b/act10b';
import { Act10cPage } from '../act10c/act10c';
import { Act10dPage } from '../act10d/act10d';
import { Act10ePage } from '../act10e/act10e';
import { ParticlePage } from '../particle/particle';

import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { QuizPage } from '../quiz/quiz';
/*
  Generated class for the Lesson31 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson31',
  templateUrl: 'lesson31.html'
})
export class Lesson31Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson31Page');
  }

  	nextPage(){
  		this.navCtrl.push(Act10Page);
  	}

  	nextPage1(){
  		this.navCtrl.push(Act10aPage);
  	}


  	nextPage2(){
  		this.navCtrl.push(Act10bPage);
  	}

  	nextPage3(){
  		this.navCtrl.push(Act10cPage);
  	}

  	nextPage4(){
  		this.navCtrl.push(Act10dPage);
  	}

  	nextPage5(){
  		this.navCtrl.push(Act10ePage);
  	}

    page1(){
      this.navCtrl.push(ParticlePage);
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
