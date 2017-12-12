import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Act4Page } from '../act4/act4';
import { Act4aPage } from '../act4a/act4a';
import { Act4bPage } from '../act4b/act4b';
import { Act4cPage } from '../act4c/act4c';
import { Act4dPage } from '../act4d/act4d';  
import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { QuizPage } from '../quiz/quiz';
 



/*
  Generated class for the Lesson3 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson3',
  templateUrl: 'lesson3.html'
})
export class Lesson3Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson3Page');
  }


  	nextPage(){

  		this.navCtrl.push(Act4Page);
  	}

  	nextPage1(){

  		this.navCtrl.push(Act4aPage);
  	}


  	nextPage2(){

  		this.navCtrl.push(Act4bPage);
  	}

  	nextPage3(){

  		this.navCtrl.push(Act4cPage);
  	}

  	nextPage4(){

  		this.navCtrl.push(Act4dPage);
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
