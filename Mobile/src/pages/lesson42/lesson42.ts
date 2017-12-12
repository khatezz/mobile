import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Act14Page } from '../act14/act14';
import { Act14aPage } from '../act14a/act14a';
import { Act14bPage } from '../act14b/act14b';
import { Act14cPage } from '../act14c/act14c';
import { Act14dPage } from '../act14d/act14d';
import { Act14ePage } from '../act14e/act14e';
import { Act14fPage } from '../act14f/act14f';
import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { QuizPage } from '../quiz/quiz';

/*
  Generated class for the Lesson42 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson42',
  templateUrl: 'lesson42.html'
})
export class Lesson42Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson42Page');
  }


  	nextPage(){
  		this.navCtrl.push(Act14Page);
  	}

  	nextPage1(){
  		this.navCtrl.push(Act14aPage);
  	}


  	nextPage2(){
  		this.navCtrl.push(Act14bPage);
  	}

  	nextPage3(){
  		this.navCtrl.push(Act14cPage);
  	}

  	nextPage4(){
  		this.navCtrl.push(Act14dPage);
  	}

  	nextPage5(){
  		this.navCtrl.push(Act14ePage);
  	}

  	nextPage6(){
  		this.navCtrl.push(Act14fPage);
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
