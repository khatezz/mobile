import { Component } from '@angular/core';
import { NavController, NavParams, LoadingController  } from 'ionic-angular';
import { IntroPage } from '../intro/intro';



/*
  Generated class for the Chapter1 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-chapter1',
  templateUrl: 'chapter1.html'
})
export class Chapter1Page {

  
  images =['sanvicente.jpg', 'im3.jpg'];

  constructor(public navCtrl: NavController, public navParams: NavParams, public loadingCtrl: LoadingController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Chapter1Page');
  }

   swipe(){
     
      let loader = this.loadingCtrl.create({
      content: "Please wait...",
      duration: 3000
    });
    loader.present();


     this.navCtrl.push( IntroPage );
  }

       
      

    

}
