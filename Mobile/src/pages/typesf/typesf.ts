import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Typesf page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-typesf',
  templateUrl: 'typesf.html'
})
export class TypesfPage {

	 showuser: boolean;
	 showuser1: boolean;
	 showuser2: boolean;
  constructor(public navCtrl: NavController, public navParams: NavParams) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad TypesfPage');
  }

  prof(){
    if(this.showuser == true){
      this.showuser = false;
    }else{
      this.showuser = true;
    }
  }


  prof1(){
    if(this.showuser1 == true){
      this.showuser1 = false;
    }else{
      this.showuser1 = true;
    }
  }



  prof2(){
    if(this.showuser2 == true){
      this.showuser2 = false;
    }else{
      this.showuser2 = true;
    }
  }
}
