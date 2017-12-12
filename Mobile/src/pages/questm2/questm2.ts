import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { Response } from '@angular/http';
import { UserService } from '../../services/user.service'; 
import { Multiple } from '../multiples.interface';
import { Questm3Page } from '../questm3/questm3';
import { NgForm } from '@angular/forms';



/*
  Generated class for the Questm1 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-questm2',
  templateUrl: 'questm2.html'
})
export class Questm2Page {
  
  

  constructor(public navCtrl: NavController, public navParams: NavParams,public userService: UserService ) {}

  

  ionViewDidLoad() {
    console.log('ionViewDidLoad Questm1Page');
  }



    onSubmit(form: NgForm){
      this.userService.addAnswer(form.value.answeruser)
        .subscribe(
          () => console.log('AnswerCreated')
        );
      form.reset();
 }

 next(){
  this.navCtrl.setRoot(Questm3Page);
 }


}