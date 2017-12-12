import { Component } from '@angular/core';

import { Page1 } from '../page1/page1';
// import { LibraryPage } from '../library/library';
import { QuizPage } from '../quiz/quiz';
import { ProfilePage } from '../profile/profile';


@Component({
  templateUrl: 'tabs.html'
})
export class TabsPage {
  // this tells the tabs component which Pages
  // should be each tab's root Page
  tab1Root: any = Page1;
  tab2Root: any = QuizPage;
  // tab4Root: any = ProfilePage;

  constructor() {

  }
}
