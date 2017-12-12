import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Act12Page } from '../act12/act12';
import { Act12aPage } from '../act12a/act12a';
import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { QuizPage } from '../quiz/quiz';

/*
  Generated class for the Lesson33 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson33',
  templateUrl: 'lesson33.html'
})
export class Lesson33Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson33Page');
  }

  	nextPage(){
  		this.navCtrl.push(Act12Page);
  	}


  	nextPage1(){
  		this.navCtrl.push(Act12aPage);
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
