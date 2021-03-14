import { Component, OnInit } from '@angular/core';
import { UserApiService } from '../servives/user-api.service';

@Component({
  selector: 'app-user',
  templateUrl: './user.component.html',
  styleUrls: ['./user.component.css']
})
export class UserComponent implements OnInit {
  firstName = 'David';
  lastName = 'Ferns';
  email = 'David.Ferns@gmail.com';
  picture = '../assets/me.webp';
  gender = 'male';
  constructor(private userS: UserApiService) { }

  ngOnInit(): void {
  }
  async handleClick() {
    const res = await this.userS.getRndUser();
    const userdata = res.results[0];
    console.log(userdata);

    this.firstName = userdata.name.first;
    this.lastName = userdata.name.last;
    this.email = userdata.email;
    this.picture = userdata.picture.large;
    this.gender = userdata.gender;
  }
}
