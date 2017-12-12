import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { QuizresultPage } from '../quizresult/quizresult';

/*
  Generated class for the Progressmain page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-progressmain',
  templateUrl: 'progressmain.html'
})
export class ProgressmainPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad ProgressmainPage');
  }

  next(){
  	this.navCtrl.push(QuizresultPage);
  }

}
