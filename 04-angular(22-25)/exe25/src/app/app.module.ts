import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { UsersListService } from './users-list.service';

import { AppComponent } from './app.component';

@NgModule({
  declarations: [AppComponent],
  imports: [BrowserModule],
  providers: [UsersListService],
  bootstrap: [AppComponent],
})
export class AppModule {}
