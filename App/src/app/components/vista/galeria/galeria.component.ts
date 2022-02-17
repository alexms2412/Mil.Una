import { Component, OnInit } from '@angular/core';
import { ContenidoService } from 'src/app/services/contenido.service';


@Component({
  selector: 'app-galeria',
  templateUrl: './galeria.component.html',
  styleUrls: ['./galeria.component.css']
})
export class GaleriaComponent implements OnInit {
  contenido:any = [];

  activeTab:string= 'fotos';
  onTabClick(tab:any){
  this.activeTab = tab;
}
  constructor(private ContenidoService: ContenidoService) { }

  ngOnInit(): void {
    this.ContenidoService.getAllContenido().subscribe(response => this.contenido = response);
  }

}
