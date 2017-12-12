import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { StudentService } from '../../services/student.service';
import { Response } from '@angular/http';
import { Quizm1Page } from '../quizm1/quizm1';
/*
  Generated class for the Questm11 page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-questm11',
  templateUrl: 'questm11.html'
})
export class Questm11Page {

  quest = [];
	answer: string;
	answeruser: string;

  constructor(public navCtrl: NavController, public navParams: NavParams, public studentService: StudentService) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad Questm2Page');
  }



  

  ngOnInit() {

  		this.studentService.getResultm1()
  			 .subscribe(
            quest => this.quest = quest,
            (error: Response) => console.log(error)

         );   
  		

  }

  back(){
    this.navCtrl.push(Quizm1Page);
  }

}
