import { Component } from '@angular/core';
import { ViewController, NavController } from 'ionic-angular';
import { HomePage } from '../home/home';
import { UserService } from '../../services/user.service';



@Component({
  templateUrl: 'popover.html'
})

export class PopoverContentPage {
constructor(public viewCtrl: ViewController, public navCtrl: NavController, public userService: UserService) {}
close() {
    this.viewCtrl.dismiss();
  }


logout(){
	
	this.navCtrl.push(HomePage);
}
}