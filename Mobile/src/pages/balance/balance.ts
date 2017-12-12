import { Component } from '@angular/core';
import { NavController, NavParams, ActionSheetController } from 'ionic-angular';
import { SimulationPage } from '../simulation/simulation';
import { Video1Page } from '../video1/video1';
import { VideofirstPage } from '../videofirst/videofirst';
import { QuizPage } from '../quiz/quiz';
import { Pageact1Page } from '../pageact1/pageact1';
import { AnimatePage } from '../animate/animate';
import { Subless2Page } from '../subless2/subless2';
import { Subless3Page } from '../subless3/subless3';
import { Subless4Page } from '../subless4/subless4';
import { Subless5Page } from '../subless5/subless5';
import { Subless6Page } from '../subless6/subless6';
import { Lesson2Page } from '../lesson2/lesson2';
import { Drills1Page } from '../drills1/drills1';
// import { Quizm1Page } from '../quizm1/quizm1';





/*
  Generated class for the Balance page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-balance',
  templateUrl: 'balance.html'
})
export class BalancePage {

  constructor(public navCtrl: NavController, public navParams: NavParams, public actionSheetCtrl: ActionSheetController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad BalancePage');
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

   act(){
    this.navCtrl.push(Pageact1Page);
  }

    click1(){
    this.navCtrl.push(Lesson2Page);
  }

    click2(){
    this.navCtrl.push(Subless2Page);
  }

    click3(){
    this.navCtrl.push(Subless3Page);
  }

    click4(){
    this.navCtrl.push(Subless4Page);
  }

    click5(){
    this.navCtrl.push(Subless5Page);
  }

    click6(){
    this.navCtrl.push(Subless6Page);
  }

  // drills(){
  //   this.navCtrl.push(Drills1Page);
  // }

  // simulate(){
  //   this.navCtrl.push(Simulation1Page);
  // }


  presentActionSheet() {
   let actionSheet = this.actionSheetCtrl.create({
     title: 'Go To',
     buttons: [
       {
         text: 'Activities and Drills',
         handler: () => {
           this.navCtrl.push(Drills1Page);
         }
       },

        {
         text: 'Simulation',
         handler: () => {
           this.navCtrl.push(SimulationPage);
         }
       },

       {
         text: 'Videos',
         handler: () => {
           this.navCtrl.push(VideofirstPage);
         }
       },

       //  {
       //   text: 'Quiz',
       //   handler: () => {
       //     this.navCtrl.push(Quizm1Page);
       //   }
       // },
       
     ]
   });

   actionSheet.present();
 }

}
