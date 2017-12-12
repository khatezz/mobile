import { Component,
        style,
         trigger,
         state,
         transition,
         animate,
         keyframes  } from '@angular/core';


import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Atoms page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-atoms',
  templateUrl: 'atoms.html',
   animations: [

      trigger('focusPanel',[

          state('inactive', style({

                backgroundColor: '#45e1f7',

          })),

           state('active', style({

               
                    padding: '15px',
                    backgroundColor: '#a3f9a3',
                
          }))

      ])

    ]


})
export class AtomsPage {



	showpic: boolean;
	showpic1: boolean;
	showpic2: boolean;
	showpic3: boolean;
	showpic4: boolean;
	showpic5: boolean;
	showpic6: boolean;
	showpic7: boolean;
	showpic8: boolean;
  argon1 :boolean;
  state: string= 'inactive';
	
	

  constructor(public navCtrl: NavController, public navParams: NavParams) {


  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad AtomsPage');
  }

  argon(){
  	this.showpic = false;
  	this.showpic1 = false;
  	this.showpic2 = false;
  	this.showpic3 = false;
  	this.showpic4 = false;
  	this.showpic5 = false;
  	this.showpic6 = false;
  	this.showpic7 = false;
  	this.showpic8 = false;
    this.argon1 = true;
  }


  next1(){
    this.state = 'active';
  	this.showpic = true;
    
  }

  next2(){

    this.state = 'active';
  	this.showpic1 = true;
  }

  next3(){

    this.state = 'active';
  	this.showpic2 = true;
  }

  next4(){

    this.state = 'active';
  	this.showpic3 = true;
  }

  next5(){

    this.state = 'active';
  	this.showpic4 = true;
  }

  next6(){

    this.state = 'active';
  	this.showpic5 = true;
  }

  next7(){

    this.state = 'active';
  	this.showpic6 = true;
  }

  next8(){

    this.state = 'active';
  	this.showpic7 = true;
  }

  next9(){

    this.state = 'active';
  	this.showpic8 = true;
  }

}
