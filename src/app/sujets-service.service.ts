import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/internal/Observable';
import { Sujets } from './sujets';

@Injectable({
  providedIn: 'root'
})
export class SujetsServiceService {

  private usersUrl: string;

  constructor(private http: HttpClient) {
    this.usersUrl = 'http://localhost:8080/st';
  }

  public findAll(): Observable<Sujets[]> {
    return this.http.get<Sujets[]>(this.usersUrl);
  }

  public save(sujet: Sujets) {
    return this.http.post<Sujets>(this.usersUrl, sujet);
  }
}
