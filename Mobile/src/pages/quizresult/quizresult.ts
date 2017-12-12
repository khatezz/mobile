import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { StudentService } from '../../services/student.service';
import { Response } from '@angular/http';

/*
  Generated class for the Quizresult page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-quizresult',
  templateUrl: 'quizresult.html'
})
export class QuizresultPage {

	quest = [];
	answer: string;
	answeruser: string;

  constructor(public navCtrl: NavController, public navParams: NavParams, public studentService: StudentService) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad QuizresultPage');
  }

   ngOnInit() {

  		this.studentService.getResultm1()
  			 .subscribe(
            quest => this.quest = quest,
            (error: Response) => console.log(error)

         );   
  		

  }

}
