import { Component } from '@angular/core';

import { NavController, NavParams } from 'ionic-angular';
import { FQuizPage } from '../fQuiz/fQuiz';
import { Lesson31Page } from '../lesson31/lesson31';
import { Lesson32Page } from '../lesson32/lesson32';
import { Lesson33Page } from '../lesson33/lesson33';


@Component({
  selector: 'page-page4',
  templateUrl: 'page4.html'
})
export class Page4 {
  selectedItem: any;
  icons: string[];
  items: Array<{title: string, note: string, icon: string}>;

  constructor(public navCtrl: NavController, public navParams: NavParams) {
    // If we navigated to this page, we will have an item available as a nav param
    this.selectedItem = navParams.get('item');

    // Let's populate this page with some filler content for funzies
    this.icons = ['flask', 'wifi', 'beer', 'football', 'basketball', 'paper-plane',
    'american-football', 'boat', 'bluetooth', 'build'];

    this.items = [];
    for (let i = 1; i < 11; i++) {
      this.items.push({
        title: 'Item ' + i,
        note: 'This is item #' + i,
        icon: this.icons[Math.floor(Math.random() * this.icons.length)]
      });
    }
  }

  itemTapped(event, item) {
    // That's right, we're pushing to ourselves!
    this.navCtrl.push(Page4, {
      item: item
    });
  }

  bquizPage(){
  this.navCtrl.push( FQuizPage );
 }

 

 lesson1(){

  this.navCtrl.push(Lesson31Page);
 }


 lesson2(){

  this.navCtrl.push(Lesson32Page);
 }



lesson3(){

  this.navCtrl.push(Lesson33Page);
 }


}
