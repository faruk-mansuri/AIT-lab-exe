import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root',
})
export class UsersListService {
  constructor() {}

  users = [
    { name: 'jack', age: 24 },
    { name: 'peter', age: 23 },
    { name: 'anna', age: 23 },
    { name: 'john', age: 25 },
    { name: 'emily', age: 24 },
  ];

  getUsers() {
    return this.users;
  }
}
