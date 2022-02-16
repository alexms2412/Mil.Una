import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CalendarioComponent } from './components/vista/calendario/calendario.component';
import { EventosComponent } from './components/vista/eventos/eventos.component';
import { OfertasTrabajoComponent } from './components/vista/ofertas-trabajo/ofertas-trabajo.component';
import { LoginComponent } from './components/vista/login/login.component';
import { RegisterComponent } from './components/vista/register/register.component';
import { GaleriaComponent } from './components/vista/galeria/galeria.component';
import { LandingPageComponent } from './components/vista/landing-page/landing-page.component';
import { AdminComponent } from './components/vista/admin/admin.component';



const routes: Routes = [
  { path : 'calendario', component:CalendarioComponent,data: { animationState: 'Four' } },
  { path : 'eventos', component:EventosComponent,	data: { animationState: 'Three' } },
  { path : 'galeria', component:GaleriaComponent,data: { animationState: 'Two' } },
  { path : 'trabajo', component:OfertasTrabajoComponent,data: { animationState: 'Five' } },
  { path : 'login', component:LoginComponent },
  { path : 'register', component:RegisterComponent },
  { path : 'admin', component:AdminComponent },
  { path : 'landing', component:LandingPageComponent,data: { animationState: 'One' } },
  { path: '', redirectTo: '/landing', pathMatch: 'full' }
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]

})

export class AppRoutingModule {}
