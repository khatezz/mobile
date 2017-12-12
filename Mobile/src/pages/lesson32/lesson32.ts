import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Act11Page } from '../act11/act11';
import { Act11aPage } from '../act11a/act11a';
import { Act11bPage } from '../act11b/act11b';
import { Act11cPage } from '../act11c/act11c';
import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { QuizPage } from '../quiz/quiz';
/*
  Generated class for the Lesson32 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson32',
  templateUrl: 'lesson32.html'
})
export class Lesson32Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson32Page');
  }


  	nextPage(){
  		this.navCtrl.push(Act11Page);
  	}

  	nextPage1(){
  		this.navCtrl.push(Act11aPage);
  	}


  	nextPage2(){
  		this.navCtrl.push(Act11bPage);
  	}

  	nextPage3(){
  		this.navCtrl.push(Act11cPage);
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
