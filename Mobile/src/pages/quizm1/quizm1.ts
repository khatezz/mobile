import { Component } from '@angular/core';
import { NavController, NavParams, AlertController, LoadingController } from 'ionic-angular';
import { Questm1Page } from '../questm1/questm1';
import { Questg1Page } from '../questg1/questg1';


/*
  Generated class for the Quizm1 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-quizm1',
  templateUrl: 'quizm1.html'
})
export class Quizm1Page {

	
  constructor(public navCtrl: NavController, public navParams: NavParams, public alertCtrl: AlertController, public loadingCtrl: LoadingController) {
  			
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad Quizm1Page');
  }

  next(){

  		
  	let loader = this.loadingCtrl.create({
        content: "Please wait....",
        duration: 3000
      });
      loader.present();
      this.navCtrl.push( Questm1Page );

	 		
  		}

  next1()	{

      this.navCtrl.push(Questg1Page);
  }

 	}


