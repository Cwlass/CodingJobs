import { Component, OnInit } from '@angular/core';
import { JokeApiService } from '../services/joke-api.service';

@Component({
  selector: 'app-joke-gen',
  templateUrl: './joke-gen.component.html',
  styleUrls: ['./joke-gen.component.css']
})
export class JokeGenComponent implements OnInit {
  rndJoke = '';
  thumbnail = '';
  categories = [];
  constructor(private jokeS: JokeApiService) { }

  ngOnInit(): void {
  }
  async handleClick() {
    const res = await this.jokeS.getRndJoke();
    console.log(res);
    const joke = res.value;
    this.rndJoke = joke;
    this.thumbnail = res.icon_url;
  }
  async updateCat({
    const res = await this.
  })
}
