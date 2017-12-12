import { Component } from '@angular/core';
import { Multiple } from '../multiples.interface';
import { NavController, PopoverController } from 'ionic-angular';
import { PopoverContentPage } from './popover';
import { Response } from '@angular/http';
import { UserService } from '../../services/user.service';
import { ProgressmainPage } from '../progressmain/progressmain';


@Component({
  selector: 'page-profile',
  templateUrl: 'profile.html'
})
export class ProfilePage {
  user = {
     fname:null,
     lname:null,
     username:null,
  };

  showuser: boolean
  username: string;
  fname: string;
  lname: string;
  
 
  constructor(public navCtrl: NavController,public popoverCtrl: PopoverController, public userService: UserService) {
  	
  }


   openPopover(myEvent) {
    let popover = this.popoverCtrl.create(PopoverContentPage);
    popover.present({
      ev: myEvent
    });
  }

ngOnInit(){
           this.userService.getProfilepic()
          .subscribe(
            user => {this.user = user;},
            (error: Response) => console.log(error)
          ); 
 
      }

  prof(){
    if(this.showuser == true){
      this.showuser = false;
    }else{
      this.showuser = true;
    }
  }

  quiz(){
    this.navCtrl.push(ProgressmainPage);
  }

}




