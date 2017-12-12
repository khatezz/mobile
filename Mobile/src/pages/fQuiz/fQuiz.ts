import { Component } from '@angular/core';

import { NavController } from 'ionic-angular';
import {StartPage} from '../start/start';

@Component({
  selector: 'page-fQuiz',
  templateUrl: 'fQuiz.html'
  
  
})
export class FQuizPage {

  constructor(public navCtrl: NavController) {
    
  }

  start(){
  	this.navCtrl.push(StartPage);
  }

}
