import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Act6Page } from '../act6/act6';   
import { Act6aPage } from '../act6a/act6a';   
import { Act6bPage } from '../act6b/act6b';   
import { Act6cPage } from '../act6c/act6c';   
import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { QuizPage } from '../quiz/quiz';

/*
  Generated class for the Lesson6 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson6',
  templateUrl: 'lesson6.html'
})
export class Lesson6Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson6Page');
  }

  	nextPage(){
  		this.navCtrl.push(Act6Page);
  	}


  	nextPage1(){
  		this.navCtrl.push(Act6aPage);
  	}

  	nextPage2(){
  		this.navCtrl.push(Act6bPage);
  	}

  	nextPage3(){
  		this.navCtrl.push(Act6cPage);
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
