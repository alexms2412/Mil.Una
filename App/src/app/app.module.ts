import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './components/header/header.component';
import { FooterComponent } from './components/footer/footer.component';
import { LandingPageComponent } from './components/vista/landing-page/landing-page.component';
import { QuehacemosComponent } from './components/vista/quehacemos/quehacemos.component';
import { EventosComponent } from './components/vista/eventos/eventos.component';
import { OfertasTrabajoComponent } from './components/vista/ofertas-trabajo/ofertas-trabajo.component';
import { LoginComponent } from './components/vista/login/login.component';
import { RegisterComponent } from './components/vista/register/register.component';
import { AdminComponent } from './components/vista/admin/admin.component';
import { GaleriaComponent } from './components/vista/galeria/galeria.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { OfertasTrabajoService } from './services/ofertas-trabajo.service';
import { LoadingScreenComponent } from './components/loading-screen/loading-screen.component';



@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    LandingPageComponent,
    QuehacemosComponent,
    EventosComponent,
    OfertasTrabajoComponent,
    LoginComponent,
    RegisterComponent,
    AdminComponent,
    GaleriaComponent,
    LoadingScreenComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    HttpClientModule,
    
  ],
  providers: [
    OfertasTrabajoService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
