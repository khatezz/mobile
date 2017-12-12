import { Component } from '@angular/core';

import { NavController } from 'ionic-angular';
import {Video1Page} from '../video1/video1';

@Component({
  selector: 'page-games',
  templateUrl: 'games.html'
})
export class GamesPage {
	rootPage= Video1Page;
  constructor(public navCtrl: NavController) {

  }



}
