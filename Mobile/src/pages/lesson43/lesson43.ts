import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Act15Page } from '../act15/act15';
import { Act15aPage } from '../act15a/act15a';
import { Act15bPage } from '../act15b/act15b';
import { Act15cPage } from '../act15c/act15c';
import { Act15dPage } from '../act15d/act15d';
import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { QuizPage } from '../quiz/quiz';


/*
  Generated class for the Lesson43 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson43',
  templateUrl: 'lesson43.html'
})
export class Lesson43Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson43Page');
  }

  	nextPage(){

  		this.navCtrl.push(Act15Page);
  	}

  	nextPage1(){

  		this.navCtrl.push(Act15aPage);
  	}


  	nextPage2(){

  		this.navCtrl.push(Act15bPage);
  	}

  		nextPage3(){

  		this.navCtrl.push(Act15cPage);
  	}

  	nextPage4(){

  		this.navCtrl.push(Act15dPage);
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
