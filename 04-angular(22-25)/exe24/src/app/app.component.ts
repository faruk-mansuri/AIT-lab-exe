import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  template: `
    <div>
      <h3>Registration form</h3>

      <form>
        <div>
          <label>name</label>
          <input type="text" name="name" [(ngModel)]="user.name" />
        </div>
        <div>
          <label>email</label>
          <input type="email" name="email" [(ngModel)]="user.email" />
        </div>
        <div>
          <label>password</label>
          <input type="text" name="password" [(ngModel)]="user.password" />
        </div>

        <label #errorLabel hidden="true"
          >please provide name, password and email</label
        >
        <br />
        <button (click)="handleSubmit(errorLabel)">submit</button>
      </form>
    </div>
  `,
  styles: [``],
})
export class AppComponent {
  user = {
    name: '',
    email: '',
    password: '',
  };
  handleSubmit(errorLabel: HTMLLabelElement) {
    if (!this.user.name || !this.user.email || !this.user.password) {
      errorLabel.hidden = false;
      return;
    }

    this.user = {
      name: '',
      email: '',
      password: '',
    };

    errorLabel.hidden = true;
    console.log(this.user);
  }
}
