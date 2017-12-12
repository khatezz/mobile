import { Component } from '@angular/core';
import { NavController, NavParams, AlertController } from 'ionic-angular';
import { ApplePage } from '../apple/apple';
import { FishPage } from '../fish/fish';
import { CakePage } from '../cake/cake';


/*
  Generated class for the DigestiveSystem page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-digestive-system',
  templateUrl: 'digestive-system.html'
})
export class DigestiveSystemPage {

  constructor(public navCtrl: NavController, public navParams: NavParams, public alertCtrl: AlertController) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad DigestiveSystemPage');
  }

  click1(){
  	let alert = this.alertCtrl.create({
  		title: 'Information',
  		subTitle: 'apple are blah blah blach',
  		buttons: [
  			{
  				text:'Lets Eat',
  				handler: ()=>{
  					this.navCtrl.push(ApplePage);
  				}
  			},
  			{
  				text: 'Cancel',
  				handler: () => {
  					console.log('cancel');
  				}
  			}
  		]
  	});

  	alert.present();
  }


   click2(){
  	let alert = this.alertCtrl.create({
  		title: 'Information',
  		subTitle: 'apple are blah blah blach',
  		buttons: [
  			{
  				text:'Lets Eat',
  				handler: ()=>{
  					this.navCtrl.push(FishPage);
  				}
  			},
  			{
  				text: 'Cancel',
  				handler: () => {
  					console.log('cancel');
  				}
  			}
  		]
  	});

  	alert.present();
  }


    click3(){
  	let alert = this.alertCtrl.create({
  		title: 'Information',
  		subTitle: 'apple are blah blah blach',
  		buttons: [
  			{
  				text:'Lets Eat',
  				handler: ()=>{
  					this.navCtrl.push(CakePage);
  				}
  			},
  			{
  				text: 'Cancel',
  				handler: () => {
  					console.log('cancel');
  				}
  			}
  		]
  	});

  	alert.present();
  }



}
