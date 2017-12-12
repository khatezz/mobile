import { Component , OnInit} from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { StudentService } from '../../services/student.service';

/*
  Generated class for the Announcement page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-announcement',
  templateUrl: 'announcement.html'
})
export class AnnouncementPage {

	 announcements= [];
   
	announce: string;
	created_at: any;
	updated_at: any;
   radius:number = 10;

  constructor(public navCtrl: NavController, public navParams: NavParams, public studentService: StudentService) {}

  ionViewDidLoad() {
    console.log('ionViewDidLoad AnnouncementPage');
  }

  ngOnInit(){
  	this.studentService.getAnnouncement()
  	.subscribe(
  		announcements => this.announcements = announcements
  	);
  }

 



}