import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import {DigestmodulePage} from '../digestmodule/digestmodule';
import { TestmainPage } from '../testmain/testmain';
import { MultimediaPage } from '../multimedia/multimedia';

/*
  Generated class for the Digestive page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-digestive',
  templateUrl: 'digestive.html'
})
export class DigestivePage {

	
	choices: Array<{title: string, icons: string, component: any}>;


  constructor(public navCtrl: NavController, public navParams: NavParams) {

  	this.choices = [
  		{title: 'Digestive System' ,icons: 'book', component: DigestmodulePage},
  		{title: 'Test Yourself', icons: 'bulb', component: TestmainPage},
  		{title: 'Multimedia', icons: 'play', component: MultimediaPage},

  	]
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad DigestivePage');
  }

  choicePage(page){
  	this.navCtrl.push(page.component);
  }

}
