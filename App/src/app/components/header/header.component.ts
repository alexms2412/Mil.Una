import { Component, OnInit } from '@angular/core';
@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {
 
  constructor() { }

  ngOnInit(): void {
  }


  inicio = "";
  actividades = "";
  galeria = "";
  empleo = "";
  acceso = "";

  cambio1(){

    this.inicio = "negrita"
  this.actividades = "";
  this.galeria = "";
  this.empleo = "";
  this.acceso = "";

  
  }

  cambio2(){

   
   this. inicio = "";
  this.actividades = "negrita";
  this.galeria = "";
  this.empleo = "";
  this.acceso = "";

  
  }

  cambio3(){

    this.inicio = ""

  this.actividades = "";
  this.galeria = "negrita";
  this.empleo = "";
  this.acceso = "";

  
  }

  cambio4(){

    this.inicio = ""
   this. inicio = "";
  this.actividades = "";
  this.galeria = "";
  this.empleo = "negrita";
  this.acceso = "";

  
  }

  cambio5(){

    this.inicio = ""
   this. inicio = "";
  this.actividades = "";
  this.galeria = "";
  this.empleo = "";
  this.acceso = "negrita";

  
  }

  






}



