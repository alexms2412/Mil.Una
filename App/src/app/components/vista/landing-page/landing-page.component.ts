import { Component, OnInit } from '@angular/core';
import { window } from 'rxjs';

@Component({
  selector: 'app-landing-page',
  templateUrl: './landing-page.component.html',
  styleUrls: ['./landing-page.component.css']
})
export class LandingPageComponent implements OnInit {

  constructor() { }



ngOnInit(): void {

  
  }


projectCount: number = 0; //70

projectCountStop: any = setInterval(()=>{

  this.projectCount++;

  if(this.projectCount == 70){

    clearInterval(this.projectCountStop);

  }


},15);


projectCount2: number = 0; //40

projectCountStop2: any = setInterval(()=>{

  this.projectCount2++;

  if(this.projectCount2 == 40){

    clearInterval(this.projectCountStop2);

  }


},35);


  projectCount3: number = 0; //25

  projectCountStop3: any = setInterval(()=>{

    this.projectCount3++;

    if(this.projectCount3 == 25){

      clearInterval(this.projectCountStop3);

    }


  },35);


  projectCount4: number = 2200; //2500

  projectCountStop4: any = setInterval(()=>{

    this.projectCount4++;
 


    if(this.projectCount4 == 2500){

      clearInterval(this.projectCountStop4);

    }

  },1);


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

}
