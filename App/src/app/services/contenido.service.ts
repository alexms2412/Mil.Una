import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ContenidoService {
  private urlApi = '/api/contenido/obtenerTodos'
  constructor(private http: HttpClient) { }

  getAllContenido():Observable<any>{
    return this.http.get(this.urlApi)
  }
}
