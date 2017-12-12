import { Injectable } from '@angular/core';
import { Http, Response, Headers } from '@angular/http';
import 'rxjs/add/operator/map';
import { Observable } from 'rxjs';
import 'rxjs/Rx';
import {UserService} from './user.service';

@Injectable()
export class StudentService {
    http:any;
    baseUrl:string;

    constructor(http:Http, private userService: UserService){
            this.http = http;
            this.baseUrl = "http://http://localhost/Project1st/public/uploads/avatars/"
    }

    getPictures(){
        return this.http.get(this.baseUrl)
        .map(response => response.json());
    }

    
    getResultm1(){

        const token = this.userService.getToken();
         return this.http.get('http://localhost/Project1st/public/api/answerm1?token=' + token)
        .map((response: Response) => {
            return response.json().quest;
            }
        );  
    }


    getUsers(): Observable<any>{
        return this.http.get('http://localhost/Project1st/public/api/userprof')
        .map((response: Response) => {
            return response.json().users;
        }

        );
    }

    
    getMultiple(): Observable<any>{
        
        return this.http.get('http://localhost/Project1st/public/api/quiz')
        .map((response: Response) => {
            return response.json().quizzes;
            }
        );  
    }


    getTrue(): Observable<any>{
        return this.http.get('http://localhost/Project1st/public/api/true')
        .map((response: Response) => {
            return response.json().addtrues;
            }
        );  
    }


     getIdentify(): Observable<any>{
        return this.http.get('http://localhost/Project1st/public/api/identify')
        .map((response: Response) => {
            return response.json().addidentifies;
            }
        );  
    }








    getAnnouncement(): Observable<any>{
        const token = this.userService.getToken();
        return this.http.get('http://localhost/Project1st/public/api/announcement?token=' + token)
        .map((response: Response) => {
            return response.json().announcements;
            }
        );  
    }

     getCheckingSeenAnnounce(){
         const token = this.userService.getToken();
        return this.http.get('http://localhost/Project1st/public/api/nonseenannounce?token=' + token)
         .map((response: Response) => {
            return response.json().announcements;
            }
        ); 
    }









    getmultipleQuest(id: number):  Observable<any> { 

         return this.http.get('http://localhost/Project1st/public/api/getQuizId/' + id)
        .map(
            (response: Response) => { 

            return response.json().multiples;
            } 
            
        );
        
    }

     gettrueQuest(): Observable<any>{ 

         return this.http.get('http://localhost/Project1st/public/api/truequest' )
        .map(
            (response: Response) => { 

            return response.json().trues;
            }
            
        );  
    }


     getidentifyQuest(): Observable<any>{ 

         return this.http.get('http://localhost/Project1st/public/api/identifyquest' )
        .map(
            (response: Response) => { 

            return response.json().identifies;
            }
            
        );  
    }

    getQuestm1(): Observable<any>{
        return this.http.get('http://localhost/Project1st/public/api/questm1')
        .map((response: Response) => {
            return response.json().defquizzes;
            }
        );  
    }

    getmquest1(answer: string){
      
        return this.http.post(
            'http://localhost/Project1st/public/api/manswer1',
            {answer: answer},
            {headers: new Headers({'X-Requested-With': 'XMLHttpRequest'}) }
        );
    }



    


}