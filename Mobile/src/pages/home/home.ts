import { Component } from '@angular/core';

import { UserService } from '../../services/user.service';
import { NavController } from 'ionic-angular';
import { StudsignPage } from '../studsign/studsign';
import { TabsPage } from '../tabs/tabs';
import { RegisterPage } from '../register/register';


@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {
   
    email: string;
    password: string;
    code: string;
    

  constructor(public navCtrl: NavController,public userService: UserService) {
    
  }

log = {
   username: "",
   password: "",
   code: "",
 };

  onSignin(log){
    this.userService._login(log)
      .subscribe(
        tokenData => console.log(tokenData),
        error => console.log(error),
        response => {
          if(response == 401){
            console.log("wrong credentials");
          }else{
            this.navCtrl.setRoot(TabsPage);
          }
        }
      );
    
  }
    
   nextPageh(){
      this.navCtrl.push(StudsignPage);
   }

  //  submit(){
  //    if(this.email=='admin' && this.password=='pass'){
  //       this.navCtrl.setRoot(TabsadPage);
  //      }
  //      else if(this.email==null && this.password==null){
  //       console.log('not valid');
  //         }else if(this.email==null && this.password!=null){
  //           console.log('invalid');
  //         }else if(this.email!=null && this.password==null){
  //           console.log('invalid');
  //         }
          
  //         else{
  //        this.navCtrl.setRoot(TabsPage);
  //      }
          
  //    }

  
  register(){
    this.navCtrl.push(RegisterPage);
  }


    
  }
      

 
   

  
      
   


