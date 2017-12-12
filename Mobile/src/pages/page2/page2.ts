import { Component } from '@angular/core';

import { NavController, NavParams } from 'ionic-angular';
import { FQuizPage } from '../fQuiz/fQuiz';
import { Lesson1Page } from '../lesson1/lesson1';
import { Lesson2Page } from '../lesson2/lesson2';
import { Lesson4Page } from '../lesson4/lesson4';
import { Lesson3Page } from '../lesson3/lesson3';
import { Lesson5Page } from '../lesson5/lesson5';
import { Lesson6Page } from '../lesson6/lesson6';
import { Quizm1Page } from '../quizm1/quizm1';


@Component({
  selector: 'page-page2',
  templateUrl: 'page2.html'
})
export class Page2 {
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
    this.navCtrl.push(Page2, {
      item: item
    });
  }



 //functions for buttons

      bquizPage(){
        this.navCtrl.push( FQuizPage );
      }

      lesson1(){
        this.navCtrl.push( Lesson1Page );
      }

      lesson2(){
        this.navCtrl.push( Lesson2Page );
      }

      nextPage1(){

        this.navCtrl.push(Lesson4Page);
      }

    lesson4(){

      this.navCtrl.push(Lesson3Page) ;

    }

    lesson5(){

      this.navCtrl.push(Lesson5Page);
    }


     lesson6(){

      this.navCtrl.push(Lesson6Page);
    }

      quiz1(){
          this.navCtrl.push(Quizm1Page);
      }
}



