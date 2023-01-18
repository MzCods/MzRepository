import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { UserListComponent } from './user-list/user-list.component';
import { SujetFormComponent } from './sujet-form/sujet-form.component';

const routes: Routes = [
  { path: 'users', component: UserListComponent  },
  {path: 'adduser', component: SujetFormComponent  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

