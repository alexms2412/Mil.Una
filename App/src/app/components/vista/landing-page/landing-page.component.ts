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

  projectCount: number = 0;
  projectCountStop: any;
  projectCount2: number = 0;
  projectCountStop2: any;
  projectCount3: number = 0; //25
  projectCountStop3: any;
  projectCount4: number = 2200; //2500
  projectCountStop4: any;

  Scroll(){


    var top = window.pageYOffset || document.documentElement.scrollTop;
  
  
    console.log(top)


    if(top > 1090){


      setInterval(()=>{

        if(this.projectCount !== 40){
          this.projectCount++;
        
          
        }else{
          clearInterval(this.projectCountStop);
       
        }
      
      
      },45);


    setInterval(()=>{

  if(this.projectCount2 !== 70){
    this.projectCount2++;
  
    
  }else{
    clearInterval(this.projectCountStop2);
 
  }


},35);


setInterval(()=>{

  if(this.projectCount3 !== 25){
    this.projectCount3++;
  
    
  }else{
    clearInterval(this.projectCountStop3);
 
  }


},45);


setInterval(()=>{

  if(this.projectCount4 !== 2500){
    this.projectCount4++;
  
    
  }else{
    clearInterval(this.projectCountStop4);
 
  }


},1);




    }

  
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

}
