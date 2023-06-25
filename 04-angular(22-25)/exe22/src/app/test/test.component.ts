import { Component } from '@angular/core';

@Component({
  selector: 'app-test',
  template: `
    <div>
      <h4 [ngClass]="{ textSuccess: success }">Random text</h4>
      <button (click)="handleClick()">change color</button>

      <h2 [ngStyle]="title">hello user</h2>
    </div>

    <h3 *ngIf="value; else elseBlock">Peter Parker</h3>
    <ng-template #elseBlock>
      <h3>John</h3>
    </ng-template>
  `,
  styles: [
    `
      .textSuccess {
        color: green;
      }
    `,
  ],
})
export class TestComponent {
  success = true;

  title = {
    fontSize: '20px',
    color: 'red',
    textTransform: 'uppercase',
  };

  value = true;
  handleClick() {
    console.log(this.success);

    this.success = !this.success;
  }
}
