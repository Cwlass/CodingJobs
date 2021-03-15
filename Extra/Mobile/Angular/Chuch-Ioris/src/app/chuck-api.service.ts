import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ChuckApiService {

  constructor(private http: HttpClient) { }
  async getRndJoke() {
    return await this.http.get<any>('https://api.chucknorris.io/jokes/random').toPromise();
  }
  async getCategories() {
    return await this.http.get<any>('https://api.chucknorris.io/jokes/categories').toPromise();
  }
  async getJokeCat(category) {
    return await this.http.get<any>('https://api.chucknorris.io/jokes/random?category=' + category).toPromise();
  }
}