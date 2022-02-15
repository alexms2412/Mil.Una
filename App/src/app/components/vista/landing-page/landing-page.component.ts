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


  aux = 41;
  InsercionesLaborales = 0;

  animacionNumerica(){

  for(let i = 0; i < this.aux; i++){

    this.InsercionesLaborales = i;

    console.log(i);


  }


  }

}
