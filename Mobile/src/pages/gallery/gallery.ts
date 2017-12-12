import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';


/*
  Generated class for the Gallery page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-gallery',
  templateUrl: 'gallery.html'
})
export class GalleryPage {
	icons: Array<{title: string}>;
	 images =['sanvicente.jpg', 'im3.jpg', 'img.jpg', 'img2.jpg'];
		
		finans: Array<{answer: string, cor_answer: string , title: string}>;
		


  constructor(public navCtrl: NavController, public navParams: NavParams) {
  		
  		
  		this.finans = [
			{answer:'a' , cor_answer: 'a' ,title: 'checkmark-circle'},
			{answer:'b', cor_answer: 'a', title: 'close-circle'},
			
		];

		
		
  }

}




