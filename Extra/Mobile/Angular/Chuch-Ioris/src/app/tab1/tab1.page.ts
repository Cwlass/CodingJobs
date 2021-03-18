import { Component } from '@angular/core';
import { ChuckApiService } from '../chuck-api.service';

@Component({
  selector: 'app-tab1',
  templateUrl: 'tab1.page.html',
  styleUrls: ['tab1.page.scss']
})
export class Tab1Page {

  icon = "";
  rndJoke = "";

  constructor(private jokeS: ChuckApiService) { }
  async ngOnInit() {
    const joke = await this.jokeS.getRndJoke()
    this.rndJoke = joke.value;
    this.icon = joke.icon_url;
  }

}
