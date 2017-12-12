import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { UserService } from '../../services/user.service'; 
import { Questm5Page } from '../questm5/questm5';
import { NgForm } from '@angular/forms';
/*
  Generated class for the Questm4 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-questm4',
  templateUrl: 'questm4.html'
})
export class Questm4Page {

   constructor(public navCtrl: NavController, public navParams: NavParams,public userService: UserService ) {}

    onSubmit(form: NgForm){
      this.userService.addAnswer(form.value.answeruser)
        .subscribe(
          () => console.log('AnswerCreated')
        );
      form.reset();
 }

 next(){
  this.navCtrl.setRoot(Questm5Page);
 }

}
