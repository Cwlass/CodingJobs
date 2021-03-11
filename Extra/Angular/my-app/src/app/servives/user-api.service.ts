import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class UserApiService {

  constructor(private http: HttpClient) { }
  async getRndUser() {
    return await this.http.get<any>('https://randomuser.me/api/').toPromise();
  }
}
