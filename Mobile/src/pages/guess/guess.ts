import { Component } from '@angular/core';
import { NavController, NavParams, AlertController } from 'ionic-angular';
import { Guess1Page } from '../guess1/guess1';

/*
  Generated class for the Guess page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-guess',
  templateUrl: 'guess.html'
})
export class GuessPage {

  showcheck: boolean;
  showcheck1: boolean;
  showcheck2: boolean;
  showcheck3: boolean;


  constructor(public navCtrl: NavController, public navParams: NavParams, public alertCtrl: AlertController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad GuessPage');
  }

  click1(){
       if(this.showcheck == true){
          this.showcheck = false;
       }else{
          this.showcheck = true;
       }
  }

  click2(){

  if(this.showcheck1 == true){
          this.showcheck1 = false;
       }else{
          this.showcheck1 = true;
       }
  
  }


   click3(){

  if(this.showcheck2 == true){
          this.showcheck2 = false;
       }else{
          this.showcheck2 = true;
       }
  
  }


   click4(){

  	  if(this.showcheck3 == true){
          this.showcheck3 = false;
       }else{
          this.showcheck3 = true;
       }

  }

  next(){
    this.navCtrl.push(Guess1Page);
  }

}