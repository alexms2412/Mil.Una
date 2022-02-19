import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ActividadesService {
  private urlApi = '/api/evento/obtenerTodos'
  constructor(private http: HttpClient) { }

  getAllActividades():Observable<any>{
    return this.http.get(this.urlApi)
}
}
