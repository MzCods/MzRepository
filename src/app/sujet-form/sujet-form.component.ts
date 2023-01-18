import { Component } from '@angular/core';
import { ActivatedRoute,Router } from '@angular/router';
import { Sujets } from '../sujets';
import { SujetsServiceService } from '../sujets-service.service';

@Component({
  selector: 'app-sujet-form',
  templateUrl: './sujet-form.component.html',
  styleUrls: ['./sujet-form.component.css']
})
export class SujetFormComponent {

        sujet : Sujets;

        constructor(
          private route: ActivatedRoute, 
            private router: Router, 
            private SujetsServiceService: SujetsServiceService) {
            this.sujet = new Sujets();
        }

        onSubmit() {
          this.SujetsServiceService.save(this.sujet).subscribe(result => this.gotoUserList());
        }
      
        gotoUserList() {
          this.router.navigate(['/']);
        }

}
