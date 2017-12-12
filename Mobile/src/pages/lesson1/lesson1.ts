import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { BalancePage } from '../balance/balance';
import { Chapter1Page } from '../chapter1/chapter1';
import { LessonsecPage } from '../lessonsec/lessonsec';
import { LessonthirdPage } from '../lessonthird/lessonthird';
import { LessonfourPage } from '../lessonfour/lessonfour';


/*
  Generated class for the Lesson1 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-lesson1',
  templateUrl: 'lesson1.html'
})
export class Lesson1Page {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Lesson1Page');
  }

  


  click1(){
    this.navCtrl.push(BalancePage);
  }

  click2(){
    this.navCtrl.push(LessonsecPage);
  }

  click3(){
    this.navCtrl.push(LessonthirdPage);
  }

  click4(){
    this.navCtrl.push(LessonfourPage);
  }

  back(){
    this.navCtrl.setRoot(Chapter1Page);
  }

}
