import { Component } from '@angular/core';

import { NavController, NavParams } from 'ionic-angular';
import { FQuizPage } from '../fQuiz/fQuiz';
import { Lesson41Page } from '../lesson41/lesson41';
import { Lesson42Page } from '../lesson42/lesson42';
import { Lesson43Page } from '../lesson43/lesson43';
import { Lesson44Page } from '../lesson44/lesson44';


@Component({
  selector: 'page-page5',
  templateUrl: 'page5.html'
})
export class Page5 {
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
    this.navCtrl.push(Page5, {
      item: item
    });
  }


  bquizPage(){
  this.navCtrl.push( FQuizPage );
 }


  lesson1(){

    this.navCtrl.push(Lesson41Page);
  }


   lesson2(){

    this.navCtrl.push(Lesson42Page);
  }

   lesson3(){

    this.navCtrl.push(Lesson43Page);
  }


  lesson4(){

    this.navCtrl.push(Lesson44Page);
  }

}
