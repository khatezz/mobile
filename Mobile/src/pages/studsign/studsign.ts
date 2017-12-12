import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { UserService } from '../../services/user.service'; 
import { HomePage } from '../home/home';




/*
  Generated class for the Studsign page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-studsign',
  templateUrl: 'studsign.html'
})
export class StudsignPage {

    constructor(public navCtrl: NavController,public userService: UserService) {}



    reg = {
    fname:null,
    lname:null,
    section:null,
    username:null,
    password:null
 };


 register(reg){
    this.userService._register(reg);
    this.navCtrl.push(HomePage);
 }
  

  

  cancel(){
  	this.navCtrl.push(HomePage);

  }

}
