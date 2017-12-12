import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Act16Page } from '../act16/act16';
import { Act16aPage } from '../act16a/act16a';
import { Act16bPage } from '../act16b/act16b';
import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { QuizPage } from '../quiz/quiz';

/*
  Generated class for the Lesson44 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson44',
  templateUrl: 'lesson44.html'
})
export class Lesson44Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson44Page');
  }

  	nextPage(){
  		this.navCtrl.push(Act16Page);
  	}

  	nextPage1(){
  		this.navCtrl.push(Act16aPage);
  	}

  	nextPage2(){
  		this.navCtrl.push(Act16bPage);
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
