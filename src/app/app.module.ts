import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { UserListComponent } from './user-list/user-list.component';
import { UserServiceService } from '../sevice/user-service.service';
import { HttpClientModule } from '@angular/common/http';
import { SujetFormComponent } from './sujet-form/sujet-form.component';
import { FormsModule } from '@angular/forms';
import { SujetsServiceService } from './sujets-service.service';




@NgModule({
  declarations: [
    AppComponent,
    UserListComponent,
    SujetFormComponent,
   
  ]
  
  ,
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule
    
  ],
  providers: [UserServiceService,SujetsServiceService],
  bootstrap: [AppComponent],
})
export class AppModule { }
