import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Employee } from '../shared/employee';
import { Observable, throwError } from 'rxjs';
import { retry, catchError } from 'rxjs/operators';

export class RestApiService{

    //define apiurl
    apiUrl = 'http://10.9.20.139/laravel/IM-MPLAY/api/user/24';
    // constructor(private http: HttpClient) { }

}

