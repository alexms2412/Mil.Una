import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './components/header/header.component';
import { FooterComponent } from './components/footer/footer.component';
import { LandingPageComponent } from './components/vista/landing-page/landing-page.component';
import { EventosComponent } from './components/vista/eventos/eventos.component';
import { OfertasTrabajoComponent } from './components/vista/ofertas-trabajo/ofertas-trabajo.component';
import { LoginComponent } from './components/vista/login/login.component';
import { RegisterComponent } from './components/vista/register/register.component';
import { AdminComponent } from './components/vista/admin/admin.component';
import { GaleriaComponent } from './components/vista/galeria/galeria.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { OfertasTrabajoService } from './services/ofertas-trabajo.service';




@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    LandingPageComponent,
    EventosComponent,
    OfertasTrabajoComponent,
    LoginComponent,
    RegisterComponent,
    AdminComponent,
    GaleriaComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
<<<<<<< HEAD
    HttpClientModule,
=======
    HttpClientModule

>>>>>>> 2b4222f8bcb3f21d739221ec7d3eb70682baffb8

  ],
  providers: [
    OfertasTrabajoService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
