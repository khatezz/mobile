import { Component } from '@angular/core';
import { NavController, NavParams, AlertController } from 'ionic-angular';
import { Guess2Page } from '../guess2/guess2';


/*
  Generated class for the Guess1 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-guess1',
  templateUrl: 'guess1.html'
})
export class Guess1Page {

  showcheck: boolean;
  showcheck1: boolean;
  showcheck2: boolean;

  constructor(public navCtrl: NavController, public navParams: NavParams, public alertCtrl: AlertController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Guess1Page');
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

    next(){
      this.navCtrl.push(Guess2Page);
    }


}
