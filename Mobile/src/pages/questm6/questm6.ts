import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { UserService } from '../../services/user.service'; 
import { Questm7Page } from '../questm7/questm7';
import { NgForm } from '@angular/forms';

/*
  Generated class for the Questm6 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-questm6',
  templateUrl: 'questm6.html'
})
export class Questm6Page {

  constructor(public navCtrl: NavController, public navParams: NavParams,public userService: UserService ) {}

    onSubmit(form: NgForm){
      this.userService.addAnswer(form.value.answeruser)
        .subscribe(
          () => console.log('AnswerCreated')
        );
      form.reset();
 }

 next(){
  this.navCtrl.setRoot(Questm7Page);
 }


}
