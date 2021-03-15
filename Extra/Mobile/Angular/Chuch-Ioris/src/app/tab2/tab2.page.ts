import { Component } from '@angular/core';
import { ChuckApiService } from '../chuck-api.service';

@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss']
})
export class Tab2Page {

  categories = [];
  selectedCat = "";
  joke = "";
  icon = "";

  constructor(private jokeS: ChuckApiService) { }

  ngOnInit() {
    this.updateCat();
  }

  async updateCat() {
    const res = await this.jokeS.getCategories();
    this.categories = res;
  }
  selectCat(categorie) {
    this.selectedCat = categorie;
  }
  async handleClick() {
    const res = await this.jokeS.getJokeCat(this.selectedCat);
    this.joke = res.value;
  }
}
