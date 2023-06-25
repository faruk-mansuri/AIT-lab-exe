import { Component } from '@angular/core';
import { UsersListService } from './users-list.service';

@Component({
  selector: 'app-root',
  template: ` <h2>Users record</h2>
    <div class="user-container">
      <div class="user" *ngFor="let user of users">
        <h4>{{ user.name }}</h4>
        <h4>{{ user.age }}</h4>
      </div>
    </div>`,
  styles: [
    `
      h2 {
        text-align: center;
      }
      .user {
        display: flex;
        justify-content: space-around;
      }
    `,
  ],
})
export class AppComponent {
  users;
  constructor(users: UsersListService) {
    this.users = users.getUsers();
  }
  title = 'exe25';
}
