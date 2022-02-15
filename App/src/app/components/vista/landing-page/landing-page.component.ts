import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-landing-page',
  templateUrl: './landing-page.component.html',
  styleUrls: ['./landing-page.component.css']
})
export class LandingPageComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }


  controlAudio = "audio";

  ocultarVolumen = ""

  ocultarX = "ocultarX"

  auxiliar = 0;

ocultar(){

if(this.auxiliar == 0){

  this.controlAudio = " "

  this.ocultarVolumen = "ocultarVolumen"

  this.ocultarX = ""

  this.auxiliar = 1;

}else{

  this.controlAudio = "audio"

  this.ocultarVolumen = ""

  this.auxiliar = 0;

  this.ocultarX = "ocultarX"



}

  


}


  aux = 41;
  InsercionesLaborales = 0;

  animacionNumerica(){

  for(let i = 0; i < this.aux; i++){

    this.InsercionesLaborales = i;

    console.log(i);


  }


  }

}
