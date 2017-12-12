import { Component } from '@angular/core';

import { NavController, AlertController } from 'ionic-angular';

@Component({
  selector: 'page-library',
  templateUrl: 'library.html'
})
export class LibraryPage {

  constructor(public navCtrl: NavController, public alertCtrl: AlertController) {

  }

  	clickme(){
  		let prompt = this.alertCtrl.create({

  			 title :'Videos',
  			 message: 'Enter name of videos',
  			 inputs:[
  			 	{
  			 		name: 'title',
  			 		placeholder: 'type title'
  			 	},
  			 ],

  			 buttons: [
  			 	{
  			 		text: 'Cancel',
  			 		handler: data =>{
  			 			console.log('cancel');
  			 		}
  			 	},
  			 	{
  			 		text:'Save',
  			 		handler: data => {
  			 			console.log('save')
  			 		}
  			 	},
  			 ]


  		});

  		prompt.present();
  	}


  	clickme1(){
  		let alert = this.alertCtrl.create({
  			title: 'Welcome',
  			subTitle: 'No download image UWI!',
  			buttons: ['ok']
  		});
  		alert.present();
  	}



  	clickme2(){
  		let confirm = this.alertCtrl.create({

  			 title :'Validation',
  			 message: 'Are you Human?',
  			 buttons: [
  			 	{
  			 		text: 'Yes',
  			 		handler: data =>{
  			 			console.log('yes');
  			 		}
  			 	},
  			 	{
  			 		text:'No',
  			 		handler: data => {
  			 			console.log('no')
  			 		}
  			 	},
  			 ]


  		});

  		confirm.present();
  	}

}
