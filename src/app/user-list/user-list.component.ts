import { Component, OnInit } from '@angular/core';
import { User } from '../../model/user';
import { UserServiceService } from '../../sevice/user-service.service';

@Component({
  selector: 'app-user-list',
  templateUrl: './user-list.component.html',
  styleUrls: ['./user-list.component.css']
})
export class UserListComponent implements OnInit {
  [x: string]: any;

      users : User[] = [] ;

    constructor(private UserServiceService: UserServiceService) {
    }

    ngOnInit() {
      this.UserServiceService.findAll().subscribe(data => {
        this.users = data;
      });
    }

}
