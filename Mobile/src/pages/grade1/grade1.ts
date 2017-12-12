import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Grade1 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-grade1',
  templateUrl: 'grade1.html'
})
export class Grade1Page {
	quizzes: Array<{title: string, component: any}>;
  constructor(public navCtrl: NavController, public navParams: NavParams) {

  	
  		
  }


  ionViewDidLoad() {
    console.log('ionViewDidLoad Grade1Page');
  }


  openPage(page) {
    // Reset the content nav to have just this page
    // we wouldn't want the back button to show in this scenario
    this.navCtrl.push(page.component);
  }
}
