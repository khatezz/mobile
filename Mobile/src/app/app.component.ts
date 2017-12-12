import { Component, ViewChild } from '@angular/core';
import { Nav, Platform } from 'ionic-angular';
import { StatusBar, Splashscreen } from 'ionic-native';

import { Chapter1Page } from '../pages/chapter1/chapter1';


import { Page3 } from '../pages/page3/page3';
import { Page1 } from '../pages/page1/page1';
import { Page4 } from '../pages/page4/page4';
import { Page5 } from '../pages/page5/page5';
import { TabsPage } from '../pages/tabs/tabs'; 
import { HomePage } from '../pages/home/home';
import { AnnouncementPage } from '../pages/announcement/announcement';
import { SimulationPage } from '../pages/simulation/simulation';
import { Video1Page } from '../pages/video1/video1';
import { UserService } from '../services/user.service'; 
import { StudentService } from '../services/student.service';
import { QuizPage } from '../pages/quiz/quiz';
  
@Component({
  templateUrl: 'app.html',
   providers:[UserService, StudentService],

})
export class MyApp {
  @ViewChild(Nav) nav: Nav;

  rootPage: any = Page1;


  pages: Array<{title: string, component: any, icon: string}>;
  others: Array<{title: string, component: any, icon: string}>;
  



  constructor(public platform: Platform) {
    this.initializeApp();

    // used for an example of ngFor and navigation
  
    this.pages = [
      
      { title: 'Home', component: TabsPage , icon: 'home'},
      { title: 'Lessons', component: Chapter1Page, icon: 'book' },
      
        ];


        this.others = [
      
      { title: 'Announcements', component: AnnouncementPage, icon: 'document' },
      { title: 'Simulations', component: SimulationPage, icon: 'game-controller-a' },
      { title: 'Videos', component: Video1Page, icon: 'film' },
      // { title: 'Take a quiz', component: QuizPage, icon: 'document' },
      { title: 'Logout', component: HomePage, icon: 'arrow-back' },
      
         
        ];
    }



  initializeApp() {
    this.platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.
      StatusBar.styleDefault();
      Splashscreen.hide();
    });
  }


  

  openPage(page) {
    // Reset the content nav to have just this page
    // we wouldn't want the back button to show in this scenario
    this.nav.setRoot(page.component);
  }


  openOthers(page) {
    // Reset the content nav to have just this page
    // we wouldn't want the back button to show in this scenario
    this.nav.setRoot(page.component);
  }


}





