import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Employee } from '../shared/employee';
import { Observable, throwError } from 'rxjs';
import { retry, catchError } from 'rxjs/operators';

export class RestApiService{

    //define apiurl
    apiUrl = 'http://10.9.20.139/laravel/IM-MPLAY/api/user/24';
    // constructor(private http: HttpClient) { }

    // Http Options
    httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json'
      })
    }  
  
    getEmployees(): Observable<Employee> {
      return this.http.get<Employee>(this.apiURL + '/IM-MPLAY/api/user/24')
      .pipe(
        retry(1),
        catchError(this.handleError)
      )
    }

    getEmployees(): Observable<Employee>{
        return this.http.get<Employee>(this.apiUrl + '/IM-MPLAY/api/user/24')
        .pipe(
            retry(1),
            catchError(this.handError)
        )
    }
    
    getEmployees(): Observable<Employee>{
        return this.http.get<Employee>(this.apiUrl + '/IM-MPLAY/api/user/24')
        .pipe(
            retry(1),
            catchError(this.handError)
        )
    }

}