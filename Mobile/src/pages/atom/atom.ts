import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Atom page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-atom',
  templateUrl: 'atom.html'
})
export class AtomPage {

  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad AtomPage');
  }

  videos: any[] = [

 			{
 				title: 'What is Atom',
 				video: 'https://www.youtube.com/embed/o-3I1JGW-Ck',
 			},

 			{
 				title: 'Atom',
 				video: 'https://www.youtube.com/embed/_lNF3_30lUE',
 			},

 			{
 				title: 'Introduction to the atom ',
 				video: 'https://www.youtube.com/embed/1xSQlwWGT8M',
 			}
 	]

}
