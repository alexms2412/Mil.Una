import { Component, OnInit } from '@angular/core';
import { OfertasTrabajoService } from 'src/app/services/ofertas-trabajo.service';
import * as AOS from 'aos';
@Component({
  selector: 'app-ofertas-trabajo',
  templateUrl: './ofertas-trabajo.component.html',
  styleUrls: ['./ofertas-trabajo.component.css']
})
export class OfertasTrabajoComponent implements OnInit {
  

  constructor(private OfertasTrabajoService: OfertasTrabajoService) { }

  ngOnInit(): void {
    AOS.init();
    this.OfertasTrabajoService.getAllOfertasTrabajo().subscribe(data =>console.log(data));
  }



}
