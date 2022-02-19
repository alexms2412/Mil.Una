import { Component, OnInit } from '@angular/core';
import { ActividadesService } from 'src/app/services/actividades.service';

@Component({
  selector: 'app-eventos',
  templateUrl: './eventos.component.html',
  styleUrls: ['./eventos.component.css']
})
export class EventosComponent implements OnInit {
  actividades:any = [];
  constructor(private ActividadesService: ActividadesService) { }

  ngOnInit(): void {
    this.ActividadesService.getAllActividades().subscribe(response => this.actividades = response);
  }

}
