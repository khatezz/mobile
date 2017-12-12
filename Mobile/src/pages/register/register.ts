import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { NgForm } from '@angular/forms';
import { Response } from '@angular/http';
import { UserService } from '../../services/user.service'; 
import { HomePage } from '../home/home';


/*
  Generated class for the Register page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-register',
  templateUrl: 'register.html'
})
export class RegisterPage {

	
    

  constructor(public navCtrl: NavController, public navParams: NavParams, public userService: UserService) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad RegisterPage');
  }

  onSubmit(form: NgForm){
      this.userService.signUp(form.value.fname, form.value.lname, form.value.code, form.value.username, form.value.password)
        .subscribe(
          () => console.log('AnswerCreated')
        );
      form.reset();
       this.navCtrl.setRoot(HomePage);
 }

 
 
 

}
