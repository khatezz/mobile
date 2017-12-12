import { Injectable } from '@angular/core';
import { Http, Headers, Response  } from '@angular/http';
import 'rxjs/add/operator/map';
import 'rxjs/Rx';
import { Observable } from 'rxjs';


@Injectable()
export class UserService {
    http:any;
    baseUrl:string;

    constructor(http:Http){
            this.http = http;
            this.baseUrl = "http://localhost/json/users.php"
    }

    getUsers(){
        return this.http.get(this.baseUrl).map(response => response.json());
    }

    _register(response){
      
        return this.http.post(
            'http://localhost/json/post.php',
            response
        ).map( response => response.json() )
        .subscribe( response => { console.log(response); } );
       
    }


   postQuestm1(response){
    
         return this.http.post(
            'http://localhost/json/post.php',
            response
        ).map( response => response.json() )
        .subscribe( response => { console.log(response); } );
    }


     postQuestg1(response){
    
         return this.http.post(
            'http://localhost/json/post1.php',
            response
        ).map( response => response.json() )
        .subscribe( response => { console.log(response); } );
    }

   _login(response){
        return this.http.post(
            'http://localhost/Project1st/public/api/pupil/signin',
           response,
            {headers: new Headers({'X-Requested-With': 'XMLHttpRequest'})}
        ).map(
            (response: Response) => {
                const data = response.json();
                const token = data.token;
                const user = data.user;
                const base64Url = token.split('.')[1];
                const base64 = base64Url.replace('-', '+').replace('_', '/');
                return {token: token, decoded: JSON.parse(window.atob(base64))};
            }
        )
        .do(
            tokenData => {
                localStorage.setItem('token', tokenData.token);
            }
        );
   }


    _logout(data){

         return this.http.get(
            'http://localhost/json/login.php',
            data
        ).map( response => response.json() );
         
    }

   getProfilepic(): Observable<any>{
        const token = this.getToken();
        return this.http.get('http://localhost/Project1st/public/api/users?token=' + token)
        .map((response: Response) => {
            return response.json().user;
            }
        );  
    }
        

    getToken(){
        return localStorage.getItem('token');
    }

     addAnswer(answeruser: string){
        const token = this.getToken();
        const body = JSON.stringify({answeruser: answeruser});
        const headers = new Headers({'Content-Type': 'application/json'});
        return this.http.post('http://localhost/Project1st/public/api/postanswer?token=' + token, body, {headers: headers})
    }

     signUp(fname: string, lname: string, code: string, username: string, password: string){
        const body = JSON.stringify({fname: fname, lname: lname, code: code, username: username, password: password });
        const headers = new Headers({'Content-Type': 'application/json'});
        return this.http.post('http://localhost/Project1st/public/api/signup',body, {headers: headers})
    }

}