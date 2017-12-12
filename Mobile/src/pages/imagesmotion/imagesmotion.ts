import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Imagesmotion page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-imagesmotion',
  templateUrl: 'imagesmotion.html'
})
export class ImagesmotionPage {

	images = ['n1.png','n2.jpg','n4.jpg'];

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad ImagesmotionPage');
  }

}
