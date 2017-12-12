import { Component, 
         style,
         trigger,
         state,
         transition,
         animate,
         keyframes,
         OnInit,
         EventEmitter
        } from '@angular/core';


import { NavController, PopoverController } from 'ionic-angular';
import { PopoverPage } from './popover';
import { GalleryPage } from '../gallery/gallery';
import { AnnouncementPage } from '../announcement/announcement';
import { StudentService } from '../../services/student.service';
import { Response } from '@angular/http';




@Component({
  selector: 'page-page1',
  templateUrl: 'page1.html',
  animations: [

      trigger('focusPanel',[

          state('inactive', style({

                backgroundColor: '#45e1f7',
                boxShadow: 'rgba(253, 253, 253, 0.2) 0 -1px 7px 1px, inset #f4f7fb 0 -1px 9px, #73faff 0 2px 12px'
          })),

           state('active', style({

               
                backgroundColor: '#43aebd',
                boxShadow: 'none',
                
          }))

      ])

    ]
  
  
})
export class Page1 {

  hobbies: string[];
  push: any;
  state: string;
 
   
 
  constructor(public navCtrl: NavController, public popoverCtrl: PopoverController, public studentService: StudentService) {

   
    
  }

    addhobby(hobby){
      this.hobbies.push(hobby);
    }

  	openPopover(myEvent) {
    let popover = this.popoverCtrl.create(PopoverPage);
    popover.present({
      ev: myEvent
    });
  }

  gallery(){
    this.navCtrl.push(GalleryPage);
  }

  notif(){
    this.state = 'active';
    this.navCtrl.push(AnnouncementPage);
  }


  ngOnInit(){
    this.studentService.getCheckingSeenAnnounce()
    .subscribe(

        response => {
         if(response == 200){
           this.state = 'inactive';
           
         }else{
           this.state = 'active';
         }
       }

     );
  }



}
